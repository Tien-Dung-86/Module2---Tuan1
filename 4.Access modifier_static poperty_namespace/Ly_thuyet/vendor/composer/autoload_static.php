<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40500e8336b0eb22ed7469dc61511a79
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40500e8336b0eb22ed7469dc61511a79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40500e8336b0eb22ed7469dc61511a79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40500e8336b0eb22ed7469dc61511a79::$classMap;

        }, null, ClassLoader::class);
    }
}