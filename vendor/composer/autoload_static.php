<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb95a816f434ee02bd4eb2dbbc9dbb3e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimpleResponse\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimpleResponse\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb95a816f434ee02bd4eb2dbbc9dbb3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb95a816f434ee02bd4eb2dbbc9dbb3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
