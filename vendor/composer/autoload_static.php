<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8e9b9b7be907f94550e964d7e8ec86d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8e9b9b7be907f94550e964d7e8ec86d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8e9b9b7be907f94550e964d7e8ec86d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8e9b9b7be907f94550e964d7e8ec86d::$classMap;

        }, null, ClassLoader::class);
    }
}