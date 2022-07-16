<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateHome extends Composer
{
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
        return [
            'atf_section' => $this->atfSection(),
            'about_section' => $this->aboutSection(),
            'testimonial_section' => $this->testimonialSection(),
            'registration_section' => $this->registrationSection(),
        ];
    }

    public function atfSection()
    {
        return get_field( 'atf_section' );
    }

    public function registrationSection()
    {
        return get_field( 'registration_section' );
    }

    public function aboutSection()
    {
        return get_field( 'about_section' );
    }

    public function testimonialSection()
    {
        return get_field( 'testimonial_section' );
    }
}
