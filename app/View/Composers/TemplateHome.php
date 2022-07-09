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
            'registration_section' => $this->registrationSection(),
        ];
    }

    public function registrationSection()
    {
        return get_field( 'registration_section' );
    }
}
