<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cb7e8609d5590f601d0026b3aa91354
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dearvn\\Utils\\Test\\' => 18,
            'Dearvn\\Utils\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dearvn\\Utils\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/phpunit',
        ),
        'Dearvn\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Dearvn\\Utils\\Activator' => __DIR__ . '/../..' . '/src/Activator.php',
        'Dearvn\\Utils\\Assets' => __DIR__ . '/../..' . '/src/Assets.php',
        'Dearvn\\Utils\\Base' => __DIR__ . '/../..' . '/src/Base.php',
        'Dearvn\\Utils\\Core' => __DIR__ . '/../..' . '/src/Core.php',
        'Dearvn\\Utils\\Localization' => __DIR__ . '/../..' . '/src/Localization.php',
        'Dearvn\\Utils\\PackageLocalization' => __DIR__ . '/../..' . '/src/PackageLocalization.php',
        'Dearvn\\Utils\\PluginReceiver' => __DIR__ . '/../..' . '/src/PluginReceiver.php',
        'Dearvn\\Utils\\Service' => __DIR__ . '/../..' . '/src/Service.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cb7e8609d5590f601d0026b3aa91354::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cb7e8609d5590f601d0026b3aa91354::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1cb7e8609d5590f601d0026b3aa91354::$classMap;

        }, null, ClassLoader::class);
    }
}
