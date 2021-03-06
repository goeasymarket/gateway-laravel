<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9c095dc3f853badd9f109bf0dccf7b4
{
    public static $files = array (
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Goeasymarket\\Laravel' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9c095dc3f853badd9f109bf0dccf7b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9c095dc3f853badd9f109bf0dccf7b4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb9c095dc3f853badd9f109bf0dccf7b4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
