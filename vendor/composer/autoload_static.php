<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85df83801c1df91bc1d9304dac148b2f
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mhdel\\Td3\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mhdel\\Td3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit85df83801c1df91bc1d9304dac148b2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85df83801c1df91bc1d9304dac148b2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85df83801c1df91bc1d9304dac148b2f::$classMap;

        }, null, ClassLoader::class);
    }
}