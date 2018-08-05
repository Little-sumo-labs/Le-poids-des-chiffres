<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc7606d75e5ed2cc56f73b2c7f31a5b2
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
        'App\\weightOfNumbers' => __DIR__ . '/../..' . '/app/weightOfNumbers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc7606d75e5ed2cc56f73b2c7f31a5b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc7606d75e5ed2cc56f73b2c7f31a5b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc7606d75e5ed2cc56f73b2c7f31a5b2::$classMap;

        }, null, ClassLoader::class);
    }
}
