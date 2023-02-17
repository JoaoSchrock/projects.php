<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc664d8c00aa0f6c1f3ca45df9328fc7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc664d8c00aa0f6c1f3ca45df9328fc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc664d8c00aa0f6c1f3ca45df9328fc7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}