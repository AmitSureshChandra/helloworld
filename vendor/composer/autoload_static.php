<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit311e13e018b5260639705fe789fab20a
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit311e13e018b5260639705fe789fab20a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
