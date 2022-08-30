<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f018ed88d2fa404470ae18f97513dbf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f018ed88d2fa404470ae18f97513dbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f018ed88d2fa404470ae18f97513dbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f018ed88d2fa404470ae18f97513dbf::$classMap;

        }, null, ClassLoader::class);
    }
}