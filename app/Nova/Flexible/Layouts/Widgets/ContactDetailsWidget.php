<?php

namespace App\Nova\Flexible\Layouts\Widgets;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ContactDetailsWidget extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'contactdetailswidget';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Contact Details Widget';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Title', 'title'),
            Text::make('Address', 'address'),
            Text::make('Phone', 'phone'),
            Text::make('Hotline', 'hotline'),
            Text::make('Fax', 'fax'),
            Text::make('Email', 'email'),
        ];
    }

}
