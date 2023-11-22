<?php

namespace App\Nova\Flexible\Layouts\SpecialLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class UserSelectLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'userlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'User Item';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Select a user','user')->searchable()->nullable()->options(\App\Models\User::pluck('name', 'id'))->displayUsingLabels(),
        ];
    }

}
