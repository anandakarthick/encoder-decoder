<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33281fc6137c9281b7aeab3a88a27c1d
{
    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'censanext_encoder_decoder' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit33281fc6137c9281b7aeab3a88a27c1d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit33281fc6137c9281b7aeab3a88a27c1d::$classMap;

        }, null, ClassLoader::class);
    }
}
