<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9491921a89d93c0b74ace2429f53f59
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9491921a89d93c0b74ace2429f53f59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9491921a89d93c0b74ace2429f53f59::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9491921a89d93c0b74ace2429f53f59::$classMap;

        }, null, ClassLoader::class);
    }
}
