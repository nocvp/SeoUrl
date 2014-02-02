<?php

namespace SeoUrl\View\Helper\Factory;

use SeoUrl\View\Helper\SeoSlug;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\View\HelperPluginManager;

/**
 * Class SeoSlugFactory
 *
 * @package SeoUrl\View\Helper\Factory
 */
class SeoSlugFactory implements FactoryInterface
{
    /**
     * Generates the category service
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return SeoSlug
     */
    public function createService(ServiceLocatorInterface $viewHelperManager)
    {
        /**
         * @var HelperPluginManager $viewHelperManager
         * @var ServiceManager $serviceManager
         */
        $serviceManager = $viewHelperManager->getServiceLocator();

        $slugService = $serviceManager->get('SeoUrl\Slug');

        $helper = new SeoSlug($slugService);

        return $helper;
    }
}
