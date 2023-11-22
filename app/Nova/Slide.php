<?php

namespace App\Nova;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaColorField\Color;
use Eminiarts\Tabs\Traits\HasTabs;
use Hashtechnologies\TinyMce\TinyMce;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class Slide extends Resource
{
    use HasTabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Slide::class;

    /**
     * The click action to use when clicking on the resource in the table.
     *
     * Can be one of: 'detail' (default), 'edit', 'select', 'preview', or 'ignore'.
     *
     * @var string
     */
    public static $clickAction = 'edit';

    /**
     * Indicates whether Nova should check for modifications between viewing and updating a resource.
     *
     * @var bool
     */
    public static $trafficCop = true;

    /**
     * The pagination per-page options configured for this resource.
     *
     * @return array
     */
    public static $perPageOptions = [50, 100, 150];

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Tabs::make('Content', [
                Tab::make('Settings', [
                    Text::make('Title', 'title')->rules('required'),
                    MediaHubField::make('Slide Image', 'image')->defaultCollection('slides')->rules('required'),
                    Text::make('Url', 'url')->help('Int link: (page-slug). Ext Link: (https://www.website.com/)'),
                    Boolean::make('External Link?', 'external_link'),
                    MediaHubField::make('Slide Video', 'video')->defaultCollection('videos'),
                    Select::make('Caption Position', 'caption_position')->options([
                        'none' => 'None - Hide Caption',
                        'bottom_left' => 'Bottom Left',
                        'bottom_right' => 'Bottom Right',
                        'top_left' => 'Top Left',
                        'top_right' => 'Top Right',
                        'center' => 'Center',
                        'center center_right' => 'Center Right',
                        'center center_left' => 'Center Left',
                        'center center_top' => 'Center Top',
                        'center center_bottom' => 'Center Bottom',
                    ])->rules('required'),
                    Boolean::make('Active BG Filter', 'bg_filter_activate'),
                    Color::make('BG Filter Color', 'bg_filter_color')->sketch(),
                    Select::make('Filter Visibility', 'filter_visibility')->options([
                        '1' => '0.1', '2' => '0.2', '3' => '0.3', '4' => '0.4', '5' => '0.5', '6' => '0.6', '7' => '0.7', '8' => '0.8', '9' => '0.9',
                    ])->help('Select the transparency level of the filter.'),
                    Color::make('Caption Text Color', 'caption_text_color')->sketch(),
                    Select::make('Caption Animation', 'caption_animation')->options([
                        'none' => 'No Animation',
                        'fade' => 'fade',
                        'left(short)' => 'left(short)',
                        'left(long)' => 'left(long)',
                        'left(short,false)' => 'left(short,false)',
                        'left(long,false)' => 'left(long,false)',
                        'left(800)' => 'left(800)',
                        'left(200|800)' => 'left(200|800)',
                        'right(short)' => 'right(short)',
                        'right(long)' => 'right(long)',
                        'right(short,false)' => 'right(short,false)',
                        'right(long,false)' => 'right(long,false)',
                        'right(800)' => 'right(800)',
                        'right(200|800)' => 'right(200|800)',
                        'top(short)' => 'top(short)',
                        'top(long)' => 'top(long)',
                        'top(short,false)' => 'top(short,false)',
                        'top(long,false)' => 'top(long,false)',
                        'top(800)' => 'top(800)',
                        'top(200|800)' => 'top(200|800)',
                        'bottom(short)' => 'bottom(short)',
                        'bottom(long)' => 'bottom(long)',
                        'bottom(short,false)' => 'bottom(short,false)',
                        'bottom(long,false)' => 'bottom(long,false)',
                        'bottom(800)' => 'bottom(800)',
                        'bottom(200|800)' => 'bottom(200|800)',
                        'front(long)' => '3D front(long)',
                        'front(800)' => '3D front(800)',
                        'front(1300)' => '3D front(1300)',
                        'front(200|800)' => '3D front(200|800)',
                        'back(long)' => '3D back(long)',
                        'back(1300)' => '3D back(1300)',
                        'back(800)' => '3D back(800)',
                        'back(200|800)' => '3D back(200|800)',
                        'rotatefront(40,400,c)' => '3D rotatefront(40,400,c)',
                        'rotatefront(150,600,tl)' => '3D rotatefront(150,600,tl)',
                        'rotatefront(-150,600,b)' => '3D rotatefront(-150,600,b)',
                        'rotatefront(90,600,tr)' => '3D rotatefront(90,600,tr)',
                        'rotatefront(-180,1300,br)' => '3D rotatefront(-180,1300,br)',
                        'rotatefront(20,620,br)' => '3D rotatefront(20,620,br)',
                        'rotatefront(20|180,500|1000,l)' => '3D rotatefront(20|180,500|1000,l)',
                        'rotatefront(180|300,500)' => '3D rotatefront(180|300,500)',
                        'rotatefront(-180|180,700,bl)' => '3D rotatefront(-180|180,700,bl)',
                        'rotatefront(-360|360,400|900,tr)' => '3D rotatefront(-360|360,400|900,tr)',
                        'rotateback(40,400,c)' => '3D rotateback(40,400,c)',
                        'rotateback(150,600,tl)' => '3D rotateback(150,600,tl)',
                        'rotateback(-150,600,b)' => '3D rotateback(-150,600,b)',
                        'rotateback(90,600,tr)' => '3D rotateback(90,600,tr)',
                        'rotateback(-180,1300,br)' => '3D rotateback(-180,1300,br)',
                        'rotateback(20,620,br)' => '3D rotateback(20,620,br)',
                        'rotateback(20|180,500|1000,l)' => '3D rotateback(20|180,500|1000,l)',
                        'rotateback(180|300,500)' => '3D rotateback(180|300,500)',
                        'rotateback(-180|180,700,bl)' => '3D rotateback(-180|180,700,bl)',
                        'rotateback(-360|360,400|900,tr)' => '3D rotateback(-360|360,400|900,tr)',
                    ])->rules('required'),
                ]),
                Tab::make('Caption Content English', [
                    Flexible::make('Caption Sections', 'slide_sections_en')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\SlideSectionLayout::class)
                ]),
                Tab::make('Caption Content Dhivehi', [
                    Flexible::make('Caption Sections', 'slide_sections_dh')->stacked()
                        ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\SlideSectionLayoutDh::class)
                ]),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
