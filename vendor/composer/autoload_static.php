<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52379b60a66a45d70fa6c700b97b61ab
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sreeram\\CarRent\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sreeram\\CarRent\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52379b60a66a45d70fa6c700b97b61ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52379b60a66a45d70fa6c700b97b61ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52379b60a66a45d70fa6c700b97b61ab::$classMap;

        }, null, ClassLoader::class);
    }
}