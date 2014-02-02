<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'SeoUrl\Slug' => 'SeoUrl\Service\Factory\SlugFactory'
        )
    ),
    'view_helpers' => array(
        'factories' => array(
            'seoSlug'   => 'SeoUrl\View\Helper\Factory\SeoSlugFactory'
        )
    ),
);
