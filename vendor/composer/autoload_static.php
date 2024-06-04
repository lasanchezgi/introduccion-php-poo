<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a3c57e62eba7ba61717b9573356f7ed
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a3c57e62eba7ba61717b9573356f7ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a3c57e62eba7ba61717b9573356f7ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a3c57e62eba7ba61717b9573356f7ed::$classMap;

        }, null, ClassLoader::class);
    }
}
