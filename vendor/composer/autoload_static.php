<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35e79c52847cce637f143ec32ca2a582
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brunoba\\JwCountries\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brunoba\\JwCountries\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit35e79c52847cce637f143ec32ca2a582::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35e79c52847cce637f143ec32ca2a582::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit35e79c52847cce637f143ec32ca2a582::$classMap;

        }, null, ClassLoader::class);
    }
}
