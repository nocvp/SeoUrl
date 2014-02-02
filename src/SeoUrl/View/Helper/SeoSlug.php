<?php

namespace SeoUrl\View\Helper;

use SeoUrl\Service\Slug as SlugService;
use Zend\View\Helper\AbstractHelper;

/**
 * Class SeoSlug
 *
 * @package SeoUrl\View\Helper
 */
class SeoSlug extends AbstractHelper
{
    /**
     * @var SlugService
     */
    protected $slug;

    /**
     * @param SlugService $slug
     */
    public function __construct(SlugService $slug)
    {
        $this->slug = $slug;
    }

    /**
     * Invokes the view helper
     *
     * @return string
     */
    public function __invoke($original = '')
    {
        return $this->slug->create($original);
    }

}