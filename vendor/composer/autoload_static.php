<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd2a78fa659b558b00783e5de6efe657
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd2a78fa659b558b00783e5de6efe657::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd2a78fa659b558b00783e5de6efe657::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
