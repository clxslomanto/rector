<?php

declare(strict_types=1);

namespace Rector\BetterPhpDocParser\ValueObject\Type;

use PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode;
use PHPStan\PhpDocParser\Ast\Type\CallableTypeNode;
use PHPStan\PhpDocParser\Ast\Type\TypeNode;
use PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;

use Rector\PHPStanStaticTypeMapper\TypeMapper\ArrayTypeMapper;

final class SpacingAwareArrayTypeNode extends ArrayTypeNode
{
    public function __toString(): string
    {
        if ($this->type instanceof CallableTypeNode) {
            return sprintf('(%s)[]', (string) $this->type);
        }

        $typeAsString = (string) $this->type;

        if ($this->isGenericArrayCandidate($this->type)) {
            return sprintf('array<%s>', $typeAsString);
        }

        if ($this->type instanceof ArrayTypeNode) {
            return $this->printArrayType($this->type);
        }

        if ($this->type instanceof BracketsAwareUnionTypeNode) {
            return $this->printUnionType($this->type);
        }

        return $typeAsString . '[]';
    }

    private function isGenericArrayCandidate(TypeNode $typeNode): bool
    {
        if (! $this->getAttribute(ArrayTypeMapper::HAS_GENERIC_TYPE_PARENT)) {
            return false;
        }

        return $typeNode instanceof UnionTypeNode || $typeNode instanceof ArrayTypeNode;
    }

    private function printArrayType(ArrayTypeNode $arrayTypeNode): string
    {
        $typeAsString = (string) $arrayTypeNode;

        $singleTypesAsString = explode('|', $typeAsString);
        foreach ($singleTypesAsString as $key => $singleTypeAsString) {
            $singleTypesAsString[$key] = $singleTypeAsString . '[]';
        }

        return implode('|', $singleTypesAsString);
    }

    private function printUnionType(BracketsAwareUnionTypeNode $bracketsAwareUnionTypeNode): string
    {
        $unionedTypes = [];

        if ($bracketsAwareUnionTypeNode->isWrappedWithBrackets()) {
            return $bracketsAwareUnionTypeNode . '[]';
        }

        foreach ($bracketsAwareUnionTypeNode->types as $unionedType) {
            $unionedTypes[] = $unionedType . '[]';
        }

        return implode('|', $unionedTypes);
    }
}
