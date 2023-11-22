<?php

namespace App\Nova\Flexible\Layouts\CouncilLayouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class DocumentAttachmentLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'documentattachmentlayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Additional Attachments';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Attachment Title En', 'title_en')->rules('required'),
            ThaanaText::make('Attachment Title Dh', 'title_dh')->rules('required'),
            MediaHubField::make('Attach Document', 'attachment')
                ->defaultCollection('documents')->rules('required'),
        ];
    }

}
