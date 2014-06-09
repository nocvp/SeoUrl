<?php
namespace SeoUrl\Service;

/**
 * Class SlugTrait
 *
 * @package SeoUrl\Service
 */
trait SlugTrait
{
    /**
     * @var Slug
     */
    protected $slugService;

    /**
     * @return Slug
     */
    public function getSlugService()
    {
        return $this->slugService;
    }

    /**
     * @param Slug $slugService
     */
    public function setSlugService(Slug $slugService)
    {
        $this->slugService = $slugService;
    }
}