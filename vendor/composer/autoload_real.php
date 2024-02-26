<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita73eda80c8d716b973b77ee0b587e371
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

        spl_autoload_register(array('ComposerAutoloaderInita73eda80c8d716b973b77ee0b587e371', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita73eda80c8d716b973b77ee0b587e371', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita73eda80c8d716b973b77ee0b587e371::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
