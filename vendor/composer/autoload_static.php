<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f4ec270e1e5ace38a08bbb30b230c69
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clockwork\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clockwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/itsgoingd/clockwork/Clockwork',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f4ec270e1e5ace38a08bbb30b230c69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f4ec270e1e5ace38a08bbb30b230c69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f4ec270e1e5ace38a08bbb30b230c69::$classMap;

        }, null, ClassLoader::class);
    }
}
