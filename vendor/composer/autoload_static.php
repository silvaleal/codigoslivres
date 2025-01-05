<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34e82991c60d8ac92d31a6df1f69cab8
{
    public static $files = array (
        'b91cd993a612c15c0e572e3deb7615b7' => __DIR__ . '/../..' . '/router/router.php',
        'a6c441fd467e5d495cc5cc1f84dd8a31' => __DIR__ . '/../..' . '/app/database/autoloader.php',
        'ff855914a4677fc8e6ef9cb2abbca468' => __DIR__ . '/../..' . '/app/database/connection.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'components\\' => 11,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'app\\Controllers\\RepositoryController' => __DIR__ . '/../..' . '/app/Controllers/RepositoryController.php',
        'app\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/Controllers/UserController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34e82991c60d8ac92d31a6df1f69cab8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34e82991c60d8ac92d31a6df1f69cab8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34e82991c60d8ac92d31a6df1f69cab8::$classMap;

        }, null, ClassLoader::class);
    }
}
