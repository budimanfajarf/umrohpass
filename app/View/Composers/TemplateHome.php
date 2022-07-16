<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateHome extends Composer
{
    // use Traits\Helpers;

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-home',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        // dd($this->packageSection()['items'][0]['accommodation']);
        // dd($this->packageSection()['items'][0]['gallery_images'][0]);
        // dd($this->packageSection()['items'][0]['plane']['items'][0]);
        // dd(wp_get_attachment_image_url($this->packageSection()['items'][0]['plane']['items'][0]['image']));
        return [
            'atf_section' => $this->atfSection(),
            'about_section' => $this->aboutSection(),
            'testimonial_section' => $this->testimonialSection(),
            'gallery_section' => $this->gallerySection(),
            'package_section' => $this->packageSection(),
            'registration_section' => $this->registrationSection(),
            'faq_section' => $this->faqSection(),
        ];
    }

    public function atfSection()
    {
        return get_field( 'atf_section' );
    }

    public function aboutSection()
    {
        return get_field( 'about_section' );
    }

    public function testimonialSection()
    {
        return get_field( 'testimonial_section' );
    }

    public function gallerySection()
    {
        return get_field( 'gallery_section' );
    }

    public function packageSection()
    {
        return get_field( 'package_section' );
    }

    public function registrationSection()
    {
        return get_field( 'registration_section' );
    }

    public function faqSection()
    {
        return get_field( 'faq_section' );
    }
}
