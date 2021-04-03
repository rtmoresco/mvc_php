<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32ec291fdaa409a587a7510674e333b1
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'R' => 
        array (
            'Raiz\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'Raiz\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Web',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32ec291fdaa409a587a7510674e333b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32ec291fdaa409a587a7510674e333b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32ec291fdaa409a587a7510674e333b1::$classMap;

        }, null, ClassLoader::class);
    }
}