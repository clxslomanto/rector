<?php

declare(strict_types=1);

namespace Rector\Set\ValueObject;

use Rector\CakePHP\Set\CakePHPSetList;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Laravel\Set\LaravelSetList;
use Rector\Nette\Set\KdybySetList;
use Rector\Nette\Set\NetteSetList;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\Contract\SetListInterface;
use Rector\Symfony\Set\SwiftmailerSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Symfony\Set\TwigSetList;

final class SetList implements SetListInterface
{
    /**
     * @var string
     */
    public const DEFLUENT = __DIR__ . '/../../../config/set/defluent.php';

    /**
     * @var string
     */
    public const ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION = __DIR__ . '/../../../config/set/action-injection-to-constructor-injection.php';

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_30 = CakePHPSetList::CAKEPHP_30;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_34 = CakePHPSetList::CAKEPHP_34;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_35 = CakePHPSetList::CAKEPHP_35;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_36 = CakePHPSetList::CAKEPHP_36;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_37 = CakePHPSetList::CAKEPHP_37;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_38 = CakePHPSetList::CAKEPHP_38;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_40 = CakePHPSetList::CAKEPHP_40;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_41 = CakePHPSetList::CAKEPHP_41;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_42 = CakePHPSetList::CAKEPHP_42;

    /**
     * @deprecated
     * @see Use CakePHPSetList instead
     * @var string
     */
    public const CAKEPHP_FLUENT_OPTIONS = CakePHPSetList::CAKEPHP_FLUENT_OPTIONS;

    /**
     * @var string
     */
    public const CODE_QUALITY = __DIR__ . '/../../../config/set/code-quality.php';

    /**
     * @var string
     */
    public const CODE_QUALITY_STRICT = __DIR__ . '/../../../config/set/code-quality-strict.php';

    /**
     * @var string
     */
    public const CODING_STYLE = __DIR__ . '/../../../config/set/coding-style.php';

    /**
     * @var string
     */
    public const CONTRIBUTTE_TO_SYMFONY = __DIR__ . '/../../../config/set/contributte-to-symfony.php';

    /**
     * @var string
     */
    public const DEAD_CODE = __DIR__ . '/../../../config/set/dead-code.php';

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_25 = DoctrineSetList::DOCTRINE_25;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_BEHAVIORS_20 = DoctrineSetList::DOCTRINE_BEHAVIORS_20;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_CODE_QUALITY = DoctrineSetList::DOCTRINE_CODE_QUALITY;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_COMMON_20 = DoctrineSetList::DOCTRINE_COMMON_20;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_DBAL_210 = DoctrineSetList::DOCTRINE_DBAL_210;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_DBAL_211 = DoctrineSetList::DOCTRINE_DBAL_211;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_DBAL_30 = DoctrineSetList::DOCTRINE_DBAL_30;

    /**
     * @deprecated
     * @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_GEDMO_TO_KNPLABS = DoctrineSetList::DOCTRINE_GEDMO_TO_KNPLABS;

    /**
     * @deprecated
      @see Use DoctrineSetList instead
     * @var string
     */
    public const DOCTRINE_REPOSITORY_AS_SERVICE = DoctrineSetList::DOCTRINE_REPOSITORY_AS_SERVICE;

    /**
     * @var string
     */
    public const FLYSYSTEM_20 = __DIR__ . '/../../../config/set/flysystem-20.php';

    /**
     * @var string
     */
    public const FRAMEWORK_EXTRA_BUNDLE_40 = __DIR__ . '/../../../config/set/framework-extra-bundle-40.php';

    /**
     * @var string
     */
    public const FRAMEWORK_EXTRA_BUNDLE_50 = __DIR__ . '/../../../config/set/framework-extra-bundle-50.php';

    /**
     * @var string
     */
    public const GMAGICK_TO_IMAGICK = __DIR__ . '/../../../config/set/gmagick_to_imagick.php';

    /**
     * @var string
     */
    public const KDYBY_TO_SYMFONY = __DIR__ . '/../../../config/set/kdyby-to-symfony.php';

    /**
     * @deprecated Use KdybySetList instead
     * @var string
     */
    public const KDYBY_EVENTS_TO_CONTRIBUTTE_EVENT_DISPATCHER = KdybySetList::KDYBY_EVENTS_TO_CONTRIBUTTE_EVENT_DISPATCHER;

    /**
     * @deprecated Use KdybySetList instead
     * @var string
     */
    public const KDYBY_TRANSLATOR_TO_CONTRIBUTTE_TRANSLATION = KdybySetList::KDYBY_TRANSLATOR_TO_CONTRIBUTTE_TRANSLATION;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const ARRAY_STR_FUNCTIONS_TO_STATIC_CALL = LaravelSetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_50 = LaravelSetList::LARAVEL_50;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_51 = LaravelSetList::LARAVEL_51;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_52 = LaravelSetList::LARAVEL_52;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_53 = LaravelSetList::LARAVEL_53;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_54 = LaravelSetList::LARAVEL_54;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_55 = LaravelSetList::LARAVEL_55;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_56 = LaravelSetList::LARAVEL_56;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_57 = LaravelSetList::LARAVEL_57;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_58 = LaravelSetList::LARAVEL_58;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_60 = LaravelSetList::LARAVEL_60;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_STATIC_TO_INJECTION = LaravelSetList::LARAVEL_STATIC_TO_INJECTION;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_CODE_QUALITY = LaravelSetList::LARAVEL_CODE_QUALITY;

    /**
     * For BC layer
     * @deprecated Use LaravelSetList from rector/rector-laravel instead
     * @var string
     */
    public const LARAVEL_ARRAY_STR_FUNCTION_TO_STATIC_CALL = LaravelSetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL;

    /**
     * @var string
     */
    public const LEAGUE_EVENT_30 = __DIR__ . '/../../../config/set/league-event-30.php';

    /**
     * @var string
     */
    public const MONOLOG_20 = __DIR__ . '/../../../config/set/monolog20.php';

    /**
     * @var string
     */
    public const MYSQL_TO_MYSQLI = __DIR__ . '/../../../config/set/mysql-to-mysqli.php';

    /**
     * @var string
     */
    public const NAMING = __DIR__ . '/../../../config/set/naming.php';

    /**
     * @var string
     */
    public const NETTE_24 = NetteSetList::NETTE_24;

    /**
     * @var string
     */
    public const NETTE_30 = NetteSetList::NETTE_30;

    /**
     * @var string
     */
    public const NETTE_31 = NetteSetList::NETTE_31;

    /**
     * @var string
     */
    public const NETTE_CODE_QUALITY = NetteSetList::NETTE_CODE_QUALITY;

    /**
     * @var string
     */
    public const NETTE_UTILS_CODE_QUALITY = NetteSetList::NETTE_UTILS_CODE_QUALITY;

    /**
     * @var string
     */
    public const NETTE_CONTROL_TO_SYMFONY_CONTROLLER = __DIR__ . '/../../../config/set/nette-control-to-symfony-controller.php';

    /**
     * @var string
     */
    public const NETTE_FORMS_TO_SYMFONY = __DIR__ . '/../../../config/set/nette-forms-to-symfony.php';

    /**
     * @var string
     */
    public const NETTE_TESTER_TO_PHPUNIT = __DIR__ . '/../../../config/set/nette-tester-to-phpunit.php';

    /**
     * @var string
     */
    public const NETTE_TO_SYMFONY = __DIR__ . '/../../../config/set/nette-to-symfony.php';

    /**
     * @var string
     */
    public const ORDER = __DIR__ . '/../../../config/set/order.php';

    /**
     * @var string
     */
    public const PHALCON_40 = __DIR__ . '/../../../config/set/phalcon40.php';

    /**
     * @var string
     */
    public const PHPEXCEL_TO_PHPSPREADSHEET = __DIR__ . '/../../../config/set/phpexcel-to-phpspreadsheet.php';

    /**
     * @var string
     */
    public const PHPSPEC_30 = __DIR__ . '/../../../config/set/phpspec30.php';

    /**
     * @var string
     */
    public const PHPSPEC_40 = __DIR__ . '/../../../config/set/phpspec40.php';

    /**
     * @var string
     */
    public const PHPSPEC_TO_PHPUNIT = __DIR__ . '/../../../config/set/phpspec-to-phpunit.php';

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT80_DMS = PHPUnitSetList::PHPUNIT80_DMS;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_40 = PHPUnitSetList::PHPUNIT_40;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_50 = PHPUnitSetList::PHPUNIT_50;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_60 = PHPUnitSetList::PHPUNIT_60;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_70 = PHPUnitSetList::PHPUNIT_70;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_75 = PHPUnitSetList::PHPUNIT_75;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_80 = PHPUnitSetList::PHPUNIT_80;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_90 = PHPUnitSetList::PHPUNIT_90;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_91 = PHPUnitSetList::PHPUNIT_91;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_CODE_QUALITY = PHPUnitSetList::PHPUNIT_CODE_QUALITY;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_EXCEPTION = PHPUnitSetList::PHPUNIT_EXCEPTION;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_MOCK = PHPUnitSetList::PHPUNIT_MOCK;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_SPECIFIC_METHOD = PHPUnitSetList::PHPUNIT_SPECIFIC_METHOD;

    /**
     * @deprecated
     * @see Use PHPUnitSetList instead
     * @var string
     */
    public const PHPUNIT_YIELD_DATA_PROVIDER = PHPUnitSetList::PHPUNIT_YIELD_DATA_PROVIDER;

    /**
     * @var string
     */
    public const PHP_52 = __DIR__ . '/../../../config/set/php52.php';

    /**
     * @var string
     */
    public const PHP_53 = __DIR__ . '/../../../config/set/php53.php';

    /**
     * @var string
     */
    public const PHP_54 = __DIR__ . '/../../../config/set/php54.php';

    /**
     * @var string
     */
    public const PHP_55 = __DIR__ . '/../../../config/set/php55.php';

    /**
     * @var string
     */
    public const PHP_56 = __DIR__ . '/../../../config/set/php56.php';

    /**
     * @var string
     */
    public const PHP_70 = __DIR__ . '/../../../config/set/php70.php';

    /**
     * @var string
     */
    public const PHP_71 = __DIR__ . '/../../../config/set/php71.php';

    /**
     * @var string
     */
    public const PHP_72 = __DIR__ . '/../../../config/set/php72.php';

    /**
     * @var string
     */
    public const PHP_73 = __DIR__ . '/../../../config/set/php73.php';

    /**
     * @var string
     */
    public const PHP_74 = __DIR__ . '/../../../config/set/php74.php';

    /**
     * @var string
     */
    public const PHP_80 = __DIR__ . '/../../../config/set/php80.php';

    /**
     * @var string
     */
    public const PRIVATIZATION = __DIR__ . '/../../../config/set/privatization.php';

    /**
     * @var string
     */
    public const PSR_4 = __DIR__ . '/../../../config/set/psr-4.php';

    /**
     * @var string
     */
    public const SAFE_07 = __DIR__ . '/../../../config/set/safe07.php';

    /**
     * For BC layer
     * @deprecated Use SwiftmailerSetList from rector/rector-symfony instead
     * @var string
     */
    public const SWIFTMAILER_60 = SwiftmailerSetList::SWIFTMAILER_60;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_26 = SymfonySetList::SYMFONY_26;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_28 = SymfonySetList::SYMFONY_28;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_30 = SymfonySetList::SYMFONY_30;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_31 = SymfonySetList::SYMFONY_31;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_32 = SymfonySetList::SYMFONY_32;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_33 = SymfonySetList::SYMFONY_33;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_34 = SymfonySetList::SYMFONY_34;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_40 = SymfonySetList::SYMFONY_40;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_41 = SymfonySetList::SYMFONY_41;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_42 = SymfonySetList::SYMFONY_42;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_43 = SymfonySetList::SYMFONY_43;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_44 = SymfonySetList::SYMFONY_44;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_50 = SymfonySetList::SYMFONY_50;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_50_TYPES = SymfonySetList::SYMFONY_50_TYPES;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_52 = SymfonySetList::SYMFONY_52;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_CODE_QUALITY = SymfonySetList::SYMFONY_CODE_QUALITY;

    /**
     * For BC layer
     * @deprecated Use SymfonySetList from rector/rector-symfony instead
     * @var string
     */
    public const SYMFONY_CONSTRUCTOR_INJECTION = SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_112 = TwigSetList::TWIG_112;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_127 = TwigSetList::TWIG_127;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_134 = TwigSetList::TWIG_134;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_140 = TwigSetList::TWIG_140;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_20 = TwigSetList::TWIG_20;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_240 = TwigSetList::TWIG_240;

    /**
     * For BC layer
     * @deprecated Use TwigSetList from rector/rector-symfony instead
     * @var string
     */
    public const TWIG_UNDERSCORE_TO_NAMESPACE = TwigSetList::TWIG_UNDERSCORE_TO_NAMESPACE;

    /**
     * @var string
     */
    public const TYPE_DECLARATION = __DIR__ . '/../../../config/set/type-declaration.php';

    /**
     * @var string
     */
    public const TYPE_DECLARATION_STRICT = __DIR__ . '/../../../config/set/type-declaration-strict.php';

    /**
     * @var string
     */
    public const UNWRAP_COMPAT = __DIR__ . '/../../../config/set/unwrap-compat.php';

    /**
     * @var string
     */
    public const EARLY_RETURN = __DIR__ . '/../../../config/set/early-return.php';

    /**
     * @var string
     */
    public const CARBON_2 = __DIR__ . '/../../../config/set/carbon-2.php';
}
