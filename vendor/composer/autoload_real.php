<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite56457339a3f8b0632ce0261eb374590
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

        spl_autoload_register(array('ComposerAutoloaderInite56457339a3f8b0632ce0261eb374590', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite56457339a3f8b0632ce0261eb374590', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite56457339a3f8b0632ce0261eb374590::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
