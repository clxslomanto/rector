<?php

declare(strict_types=1);

namespace Rector\PostRector\Rector;

use PhpParser\Node;
use PhpParser\Node\Name;
use PHPStan\Reflection\ReflectionProvider;
use Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory;
use Rector\CodingStyle\ClassNameImport\ClassNameImportSkipper;
use Rector\CodingStyle\Node\NameImporter;
use Rector\Core\Configuration\Option;
use Rector\NodeNameResolver\NodeNameResolver;
use Rector\NodeTypeResolver\PhpDoc\NodeAnalyzer\DocBlockNameImporter;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class NameImportingPostRector extends AbstractPostRector
{
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;

    /**
     * @var NameImporter
     */
    private $nameImporter;

    /**
     * @var DocBlockNameImporter
     */
    private $docBlockNameImporter;

    /**
     * @var ClassNameImportSkipper
     */
    private $classNameImportSkipper;

    /**
     * @var PhpDocInfoFactory
     */
    private $phpDocInfoFactory;

    /**
     * @var NodeNameResolver
     */
    private $nodeNameResolver;

    /**
     * @var ReflectionProvider
     */
    private $reflectionProvider;

    public function __construct(
        ParameterProvider $parameterProvider,
        NameImporter $nameImporter,
        DocBlockNameImporter $docBlockNameImporter,
        ClassNameImportSkipper $classNameImportSkipper,
        PhpDocInfoFactory $phpDocInfoFactory,
        NodeNameResolver $nodeNameResolver,
        ReflectionProvider $reflectionProvider
    ) {
        $this->parameterProvider = $parameterProvider;
        $this->nameImporter = $nameImporter;
        $this->docBlockNameImporter = $docBlockNameImporter;
        $this->classNameImportSkipper = $classNameImportSkipper;
        $this->phpDocInfoFactory = $phpDocInfoFactory;
        $this->nodeNameResolver = $nodeNameResolver;
        $this->reflectionProvider = $reflectionProvider;
    }

    public function enterNode(Node $node): ?Node
    {
        $autoImportNames = $this->parameterProvider->provideParameter(Option::AUTO_IMPORT_NAMES);
        if (! $autoImportNames) {
            return null;
        }

        if ($node instanceof Name) {
            return $this->processNodeName($node);
        }

        $importDocBlocks = (bool) $this->parameterProvider->provideParameter(Option::IMPORT_DOC_BLOCKS);
        if (! $importDocBlocks) {
            return null;
        }

        $phpDocInfo = $this->phpDocInfoFactory->createFromNodeOrEmpty($node);
        $this->docBlockNameImporter->importNames($phpDocInfo, $node);

        return $node;
    }

    public function getPriority(): int
    {
        // this must run after NodeRemovingPostRector, sine renamed use imports can block next import
        return 600;
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Imports fully qualified names', [
            new CodeSample(
                <<<'CODE_SAMPLE'
class SomeClass
{
    public function run(App\AnotherClass $anotherClass)
    {
    }
}
CODE_SAMPLE
,
                <<<'CODE_SAMPLE'
use App\AnotherClass;

class SomeClass
{
    public function run(AnotherClass $anotherClass)
    {
    }
}
CODE_SAMPLE
            ),
        ]);
    }

    private function processNodeName(Name $name): ?Node
    {
        if ($name->isSpecialClassName()) {
            return $name;
        }

        $importName = $this->nodeNameResolver->getName($name);

        if (! is_callable($importName)) {
            return $this->nameImporter->importName($name);
        }

        if (substr_count($name->toCodeString(), '\\') <= 1) {
            return $this->nameImporter->importName($name);
        }

        if (! $this->classNameImportSkipper->isFoundInUse($name)) {
            return $this->nameImporter->importName($name);
        }

        if ($this->reflectionProvider->hasFunction(new Name($name->getLast()), null)) {
            return $this->nameImporter->importName($name);
        }

        return null;
    }
}
