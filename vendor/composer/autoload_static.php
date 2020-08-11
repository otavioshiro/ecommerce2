<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4255b1b8fcc863d4ad1e4bf5b5f8ba6e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hcode\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4255b1b8fcc863d4ad1e4bf5b5f8ba6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4255b1b8fcc863d4ad1e4bf5b5f8ba6e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4255b1b8fcc863d4ad1e4bf5b5f8ba6e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
