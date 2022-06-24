<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb25929ad7a3ec13638dfe2d4021b4620
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb25929ad7a3ec13638dfe2d4021b4620::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb25929ad7a3ec13638dfe2d4021b4620::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb25929ad7a3ec13638dfe2d4021b4620::$classMap;

        }, null, ClassLoader::class);
    }
}