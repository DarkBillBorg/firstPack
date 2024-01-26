<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa71a28d14ee6dcbe1b3219350c0ad3c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'So\\FirstPack\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'So\\FirstPack\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa71a28d14ee6dcbe1b3219350c0ad3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa71a28d14ee6dcbe1b3219350c0ad3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa71a28d14ee6dcbe1b3219350c0ad3c::$classMap;

        }, null, ClassLoader::class);
    }
}
