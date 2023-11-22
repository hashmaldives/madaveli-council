<?php

namespace App\Nova\Flexible\Layouts\CouncilLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class IdeaBoxSubjectLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'ideaboxsubjectlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'IdeaBox Subject';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Subject Name En', 'subject_en'),
            ThaanaText::make('Subject Name Dh', 'subject_dh'),
        ];
    }

}
