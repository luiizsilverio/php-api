<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfcdd825955d38bb492ff70a0a7b4c11
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfcdd825955d38bb492ff70a0a7b4c11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfcdd825955d38bb492ff70a0a7b4c11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfcdd825955d38bb492ff70a0a7b4c11::$classMap;

        }, null, ClassLoader::class);
    }
}
