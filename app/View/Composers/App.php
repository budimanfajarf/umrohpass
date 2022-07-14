<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'logo' => $this->logo(),
            'placeholder_image_url' => $this->placeHolderImageUrl(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo( 'name', 'display' );
    }

    /**
     * Logo
     */
    public function logo()
    {
        return get_field( 'logo', 'options' );
    }

    /**
     * Placeholder Image
     */
    public function placeHolderImage()
    {
        return get_field( 'placeholder_image', 'options' );
    }

    /**
     * Placeholder Image URL
     */
    public function placeHolderImageUrl()
    {
        return $this->placeHolderImage()
            ? $this->placeHolderImage()['url']
            : 'https://via.placeholder.com/1280x720/cccccc/969696.png';
    }
}
