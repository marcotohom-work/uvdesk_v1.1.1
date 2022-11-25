<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'uvdesk/community-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.13.3@648b0343343565c4a056bfc8392201385e8d89f0',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '1.7.3@09dde3eb237756190f2de738d3c97cff10a8407b',
  'doctrine/common' => '3.4.0@e09556bbdf95b8420e649162b19ae9da2d1a80f3',
  'doctrine/data-fixtures' => '1.5.3@ba37bfb776de763c5bf04a36d074cd5f5a083c42',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/doctrine-bundle' => '2.7.0@d2088fc50494e4e7441fecca54732245a613eeb6',
  'doctrine/doctrine-fixtures-bundle' => '3.4.2@601988c5b46dbd20a0f886f967210aba378a6fd5',
  'doctrine/doctrine-migrations-bundle' => '2.2.3@0a081b55a88259a887af7be654743a8c5f703e99',
  'doctrine/event-manager' => '1.1.2@eb2ecf80e3093e8f3c2769ac838e27d8ede8e683',
  'doctrine/inflector' => '2.0.5@ade2b3bbfb776f27f0558e26eed43b5d9fe1b392',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '2.3.5@28d92a34348fee5daeb80879e56461b2e862fc05',
  'doctrine/orm' => '2.13.1@35c44a56677adb3ce796138b6e4934ce93ec6811',
  'doctrine/persistence' => '3.0.3@ac6fce61f037d7e54dbb2435f5b5648d86548e23',
  'doctrine/sql-formatter' => '1.1.3@25a06c7bf4c6b8218f47928654252863ffc890a5',
  'egulias/email-validator' => '3.2.1@f88dcf4b14af14a98ad96b14b2b317969eab6715',
  'friendsofphp/proxy-manager-lts' => 'v1.0.12@8419f0158715b30d4b99a5bd37c6a39671994ad7',
  'google/recaptcha' => '1.2.4@614f25a9038be4f3f2da7cbfd778dc5b357d2419',
  'iamcal/lib_autolink' => 'v1.9@6a9e44d17f836806301b40723af673971a1a5112',
  'knplabs/knp-components' => 'v3.4.0@d990ef101bab58a078b6eb7250e57f5c68af5604',
  'knplabs/knp-paginator-bundle' => 'v5.9.0@7879916a8af4f4d4668535cb0b71f55cc416da66',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.4.0@a93fd278c97b2d41ebbce5ba048a24e3e6f580ba',
  'laminas/laminas-zendframework-bridge' => '1.4.1@88bf037259869891afce6504cacc4f8a07b24d0f',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'php-mime-mail-parser/php-mime-mail-parser' => '7.1.2@81d84bbc6a73b913110e155e98059526825c7ee3',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpstan/phpdoc-parser' => '1.8.0@8dd908dd6156e974b9a0f8bb4cd5ad0707830f04',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.2.8@bb962f8aed09e60b0942545f6e4842ffeee4aafd',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v5.4.7@4affdca3da5f380caa27a338269b36ac288b3981',
  'symfony/cache' => 'v5.4.11@5a0fff46df349f0db3fe242263451fddf5277362',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.4.11@ec79e03125c1d2477e43dde8528535d90cc78379',
  'symfony/console' => 'v5.4.12@c072aa8f724c3af64e2c7a96b796a4863d24dba1',
  'symfony/dependency-injection' => 'v5.4.11@a8b9251016e9476db73e25fa836904bc0bf74c62',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/doctrine-bridge' => 'v5.4.11@e0250f61a450518dd5b0b7847ec63d26665241dd',
  'symfony/dotenv' => 'v5.4.5@83a2310904a4f5d4f42526227b5a578ac82232a9',
  'symfony/error-handler' => 'v5.4.11@f75d17cb4769eb38cd5fccbda95cd80a054d35c8',
  'symfony/event-dispatcher' => 'v5.4.9@8e6ce1cc0279e3ff3c8ff0f43813bc88d21ca1bc',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/expression-language' => 'v5.4.11@eb59000eb72c9681502cb501af3c666be42d215e',
  'symfony/filesystem' => 'v5.4.12@2d67c1f9a1937406a9be3171b4b22250c0a11447',
  'symfony/finder' => 'v5.4.11@7872a66f57caffa2916a584db1aa7f12adc76f8c',
  'symfony/flex' => 'v1.19.3@ab0453b16029e131c112df1a76e59eb2a47e1f67',
  'symfony/form' => 'v5.4.12@d8c5cc929f8dc7a58b710c9474dd7a0173006017',
  'symfony/framework-bundle' => 'v5.4.12@49f8fe5d39b7513a3f26898788885dbe66b0d910',
  'symfony/http-client' => 'v5.4.12@6a057be154824487fd5e6b65ab83899e0c5ac550',
  'symfony/http-client-contracts' => 'v2.5.2@ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
  'symfony/http-foundation' => 'v5.4.12@f4bfe9611b113b15d98a43da68ec9b5a00d56791',
  'symfony/http-kernel' => 'v5.4.12@37f660fa3bcd78fe4893ce23ebe934618ec099be',
  'symfony/intl' => 'v5.4.11@d305c0c1d31b30b3876e041804c35e49e5f8a96e',
  'symfony/mailer' => 'v5.4.12@076043af11e58b20a68d2fd93f59cdbc6e8fdd00',
  'symfony/mime' => 'v5.4.12@03876e9c5a36f5b45e7d9a381edda5421eff8a90',
  'symfony/monolog-bridge' => 'v5.4.10@b3b0890e76e7eb626f27b165a5c501f2754dfbbd',
  'symfony/monolog-bundle' => 'v3.8.0@a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
  'symfony/notifier' => 'v5.4.8@c5df5af88278e8c15020dd1f95f30eebf280f895',
  'symfony/options-resolver' => 'v5.4.11@54f14e36aa73cb8f7261d7686691fd4d75ea2690',
  'symfony/password-hasher' => 'v5.4.11@b0169ed8f09a4ae39eb119218ea1685079a9b179',
  'symfony/polyfill-intl-grapheme' => 'v1.26.0@433d05519ce6990bf3530fba6957499d327395c2',
  'symfony/polyfill-intl-icu' => 'v1.26.0@e407643d610e5f2c8a4b14189150f68934bf5e48',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php73' => 'v1.26.0@e440d35fa0286f77fb45b79a03fedbeda9307e85',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/polyfill-php81' => 'v1.26.0@13f6d1271c663dc5ae9fb843a8f16521db7687a1',
  'symfony/process' => 'v5.4.11@6e75fe6874cbc7e4773d049616ab450eff537bf1',
  'symfony/property-access' => 'v5.4.11@c641d63e943ed31981bad4b4dcf29fe7da2ffa8c',
  'symfony/property-info' => 'v5.4.11@8a9a2b638a808cc92a2fbce185b9318e76b0e20c',
  'symfony/proxy-manager-bridge' => 'v5.4.6@e6936de1cc8f4e6e3b2264aef186ca21695aee8e',
  'symfony/routing' => 'v5.4.11@3e01ccd9b2a3a4167ba2b3c53612762300300226',
  'symfony/runtime' => 'v5.4.11@c32ac27a8abebe4e6375cd12a4f78ba78e9c742f',
  'symfony/security-bundle' => 'v5.4.11@86b49feb056b840f2b79a03fcfa2d378d6d34234',
  'symfony/security-core' => 'v5.4.11@25d14fa47f9efa084d3c23d0ae3b2624d2ad9e92',
  'symfony/security-csrf' => 'v5.4.11@b97ab244b6dda80abb84a4a236d682871695db4a',
  'symfony/security-guard' => 'v5.4.9@64c83d25b5b23fa07e77c861d19e46ce7929a789',
  'symfony/security-http' => 'v5.4.12@3ca3eb2a866a4a5adaf0a952d2d7db7208da378b',
  'symfony/serializer' => 'v5.4.12@776fa3010f62b97a7119757a66596a654cd244d4',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/stopwatch' => 'v5.4.5@4d04b5c24f3c9a1a168a131f6cbe297155bc0d30',
  'symfony/string' => 'v5.4.12@2fc515e512d721bf31ea76bd02fe23ada4640058',
  'symfony/swiftmailer-bundle' => 'v3.5.4@9daab339f226ac958192bf89836cb3378cc0e652',
  'symfony/translation' => 'v5.4.12@42ecc77eb4f229ce2df702a648ec93b8478d76ae',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/twig-bridge' => 'v5.4.12@94c3b38514c953e3e84719c96d4e578a01ca1819',
  'symfony/twig-bundle' => 'v5.4.8@c992b4474c3a31f3c40a1ca593d213833f91b818',
  'symfony/validator' => 'v5.4.12@38bc4d83d01b800f1fa5acaceb5ff77490b8f768',
  'symfony/var-dumper' => 'v5.4.11@b8f306d7b8ef34fb3db3305be97ba8e088fb4861',
  'symfony/var-exporter' => 'v5.4.10@8fc03ee75eeece3d9be1ef47d26d79bea1afb340',
  'symfony/web-link' => 'v5.4.3@8b9b073390359549fec5f5d797f23bbe9e2997a5',
  'symfony/yaml' => 'v5.4.12@7a3aa21ac8ab1a96cc6de5bbcab4bc9fc943b18c',
  'twig/extra-bundle' => 'v3.4.0@2e58256b0e9fe52f30149347c0547e4633304765',
  'twig/twig' => 'v3.4.2@e07cdd3d430cd7e453c31b36eb5ad6c0c5e43077',
  'uvdesk/automation-bundle' => 'v1.1.1@b9f51228332c34fe86d67370092f555dd5bc2ba0',
  'uvdesk/composer-plugin' => 'v1.1.0@c6e64a4701873fe9ae3e846f0b148ea5f799a6da',
  'uvdesk/core-framework' => 'v1.1.1@58a511a8828b90868c74d2f396842ae3b393c165',
  'uvdesk/extension-framework' => 'v1.1.0@fdc9f57f170f28984d92c5d341c5b144128615c5',
  'uvdesk/mailbox-component' => 'v1.1.1@9adf9f5952019f7bee01e3b38794b3edd0706683',
  'uvdesk/support-center-bundle' => 'v1.1.1@f02a4d11a8cdc4d6a486bb99777f2602e2f54f86',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nikic/php-parser' => 'v4.15.1@0ef6c55a3f47f89d7a374e6f835197a0b5fcf900',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.17@aa94dc41e8661fe90c7316849907cba3007b10d8',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.24@d0aa6097bef9fd42458a9b3c49da32c6ce6129c5',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.7@7fa545db548c90bdebeb9da0583001a252be5578',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.0@fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.4.11@081fe28a26b6bd671dea85ef3a4b5003f3c88027',
  'symfony/css-selector' => 'v5.4.11@c1681789f059ab756001052164726ae88512ae3d',
  'symfony/debug-bundle' => 'v5.4.11@ec73a8bb7b966ccbe9e76be3c7dc413d8ae84f47',
  'symfony/dom-crawler' => 'v5.4.12@291c1e92281a09152dda089f782e23dedd34bd4f',
  'symfony/maker-bundle' => 'v1.43.0@e3f9a1d9e0f4968f68454403e820dffc7db38a59',
  'symfony/phpunit-bridge' => 'v6.1.3@75c2fa71d049c1f48e39d208c0cefba97e66335a',
  'symfony/web-profiler-bundle' => 'v5.4.10@f61c99d8dbd864b11935851b598f784bcff36fc7',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'uvdesk/community-skeleton' => 'v1.1.1@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}