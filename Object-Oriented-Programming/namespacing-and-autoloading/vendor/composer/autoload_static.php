<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c864daccba23e3b29bf3db5134c0fa3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stutord\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stutord\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c864daccba23e3b29bf3db5134c0fa3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c864daccba23e3b29bf3db5134c0fa3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
