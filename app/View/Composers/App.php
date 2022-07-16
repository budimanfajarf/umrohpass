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
            'logo_alt' => $this->logoAlt(),
            'about' => $this->about(),
            'contact_us' => $this->contactUs(),
            'whatsapp' => $this->whatsapp(),
            'social_media_links' => $this->socialMediaLinks(),
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

    /**
     * Logo Alt
     */
    public function logoAlt()
    {
        return get_field( 'logo_alt', 'options' );
    }

    /**
     * About
     */
    public function about()
    {
        return get_field( 'about', 'options' );
    }

    /**
     * Contact Us
     */
    public function contactUs()
    {
        return get_field( 'contact_us', 'options' );
    }

    /**
     * WhatsApp
     */
    public function whatsapp()
    {
        return get_field( 'whatsapp', 'options' );
    }

    /**
     * Social Media Links
     *
     * @return array
     */
    public function socialMediaLinks()
    {
        if (($socialMediaLinksField = get_field('social_media_links', 'options')) && is_array($socialMediaLinksField)) {
            return collect($socialMediaLinksField)->map(function($social) {
                if ($social['url']) {
                    if ($social['icon'] || $social['name']) {
                        $social['icon_svg'] = null;

                        if ($social['icon']) {
                            $iconSVg = $this->getSVGContent($social['icon']);

                            if ($iconSVg) {
                                $social['icon_svg'] = $iconSVg;
                            }
                        }

                        return $social;
                    }

                    return null;
                }
            })->filter(function($social) {
                return !empty($social);
            })->toArray();
        }

        return [];
    }

    /**
     * Get SVG Content
     *
     * @return string|null
     */
    public function getSVGContent( $content = null )
    {
        if ( $content && ( $content['subtype'] == 'svg' || $content['subtype'] == 'svg+xml' ) ) {
            $file = get_attached_file( $content['id'] );

            if ( file_exists( $file ) ) {
                return file_get_contents( $file );
            }
        }

        return null;
    }
}
