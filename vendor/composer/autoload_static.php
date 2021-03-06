<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccdbc746e163e9d9fae3c495712f2bd0
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitccdbc746e163e9d9fae3c495712f2bd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccdbc746e163e9d9fae3c495712f2bd0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitccdbc746e163e9d9fae3c495712f2bd0::$classMap;

        }, null, ClassLoader::class);
    }
}
