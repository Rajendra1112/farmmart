<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc454ec4fb3625d3d75abcec58b2373fb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc454ec4fb3625d3d75abcec58b2373fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc454ec4fb3625d3d75abcec58b2373fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc454ec4fb3625d3d75abcec58b2373fb::$classMap;

        }, null, ClassLoader::class);
    }
}
