<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4aea7c2182bac732c0ad9b0e31ade894
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Google_Web_Stories_Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Google_Web_Stories_Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit4aea7c2182bac732c0ad9b0e31ade894', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Google_Web_Stories_Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit4aea7c2182bac732c0ad9b0e31ade894', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\Google_Web_Stories_Composer\Autoload\ComposerStaticInit4aea7c2182bac732c0ad9b0e31ade894::getInitializer($loader));
        } else {
            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}
