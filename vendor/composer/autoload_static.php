<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44ecb4c0d20ec758eaf7a02d2c3c772c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit44ecb4c0d20ec758eaf7a02d2c3c772c::$classMap;

        }, null, ClassLoader::class);
    }
}
