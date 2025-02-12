<?php

namespace Rector\Tests\CodingStyle\Rector\Namespace_\ImportFullyQualifiedNamesRector\FixtureGeneric;

class Repository
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var \Doctrine\ORM\EntityRepository<\Rector\Tests\CodingStyle\Rector\Namespace_\ImportFullyQualifiedNamesRector\Source\Generic\SomeGeneral>
     */
    private $repository;
}

?>
-----
<?php

namespace Rector\Tests\CodingStyle\Rector\Namespace_\ImportFullyQualifiedNamesRector\FixtureGeneric;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Rector\Tests\CodingStyle\Rector\Namespace_\ImportFullyQualifiedNamesRector\Source\Generic\SomeGeneral;
class Repository
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var EntityRepository<SomeGeneral>
     */
    private $repository;
}

?>
