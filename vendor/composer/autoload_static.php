<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40ac0ae999b82792e1740c88920b0087
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaintenancePage\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaintenancePage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40ac0ae999b82792e1740c88920b0087::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40ac0ae999b82792e1740c88920b0087::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
