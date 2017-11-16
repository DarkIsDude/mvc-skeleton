<?php
namespace Application;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Module declaration for Application
 */
class Module implements ConfigProviderInterface, AutoloaderProviderInterface
{
    /**
     * Return the config for this module
     *
     * @see ConfigProviderInterface
     * @return \Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Return loader
     *
     * @see AutoloaderProviderInterface
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__)
                )
            );
    }
}
