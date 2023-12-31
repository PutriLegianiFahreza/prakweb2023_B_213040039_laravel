<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2f4ec270e1e5ace38a08bbb30b230c69
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit2f4ec270e1e5ace38a08bbb30b230c69', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2f4ec270e1e5ace38a08bbb30b230c69', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2f4ec270e1e5ace38a08bbb30b230c69::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
