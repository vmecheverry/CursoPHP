<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe72fe649c643c6b3462c6e0267738b4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe72fe649c643c6b3462c6e0267738b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe72fe649c643c6b3462c6e0267738b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
