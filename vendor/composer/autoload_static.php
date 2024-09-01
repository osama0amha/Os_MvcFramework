<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit246911db2b3ef0fa5ed374e966238e9f
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Os\\MvcFramework\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Os\\MvcFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit246911db2b3ef0fa5ed374e966238e9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit246911db2b3ef0fa5ed374e966238e9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit246911db2b3ef0fa5ed374e966238e9f::$classMap;

        }, null, ClassLoader::class);
    }
}