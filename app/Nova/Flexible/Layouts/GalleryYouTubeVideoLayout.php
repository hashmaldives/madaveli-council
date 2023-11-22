<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Textarea;

class GalleryYouTubeVideoLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'galleryyoutubevideo';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Embedd a youtube video';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            
            Text::make('Title', 'title')->help('For admin reference only (will not be displayed on website)'),
            Text::make('Video ID', 'youtube_video_id')->rules('required')->help('Enter video ID only. Eg: (IleONjCS66I)'),
            Text::make('Video Caption English', 'caption_en'),
            ThaanaText::make('Video Caption Dhivehi', 'caption_dh'),
            Select::make('Columns', 'column')->options([
                '2' => '2 Column',
                '3' => '3 Column',
                '4' => '4 Column',
                '5' => '5 Column',
                '6' => '6 Column',
                '7' => '7 Column',
                '8' => '8 Column',
                '9' => '9 Column',
                '10' => '10 Column',
                '11' => '11 Column',
                '12' => '12 Column',
            ])->help(
                'Select the size of this block.'
            )->rules('required')
        ];
    }

}
