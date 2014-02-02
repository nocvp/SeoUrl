<?php

namespace SeoUrl\Service\Factory;

use SeoUrl\Service\Slug;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;

/**
 * Class SlugFactory
 *
 * @package SeoUrl\Service\Factory
 */
class SlugFactory implements FactoryInterface
{
    /**
     * Generates the Item controller
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return Slug
     */
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        /**
         * @var ServiceManager $serviceManager
         */
        $config = $serviceManager->get('Config');

        if (! isset($config['seo_url'])) {
            throw new \Exception('Configuration of SeoUrl not set.');
        }

        $service = new Slug($config['seo_url']);

        return $service;
    }
}
