<?php

namespace App\Nova\Flexible\Layouts\Forms;

use Laravel\Nova\Fields\Text;
use HashTechnologies\ThaanaText\ThaanaText;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Hashtechnologies\TinyMce\TinyMce;

class FormSection extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'formsection';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Form Section';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Section Title English', 'section_title_en'),
            ThaanaText::make('Section Title Dhivehi', 'section_title_dh'),
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
                'Select the size of this field.'
            )->rules('required'),
            Flexible::make('Fields', 'fields')->rules('required')->button('Add Field')->stacked()
                ->menu(
                    'flexible-search-menu',
                    [
                        'selectLabel' => 'Press enter to select',
                        // the property on the layout entry
                        'label' => 'title',
                        // 'top', 'bottom', 'auto'
                        'openDirection' => 'bottom',
                    ]
                )
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\DateField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\DateTimeField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\InfoText::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\EmailField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\Heading::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\InfoBanner::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\NumberField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\PhoneField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\TextareaField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\FileField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\MultiFileField::class)
                ->addLayout(\App\Nova\Flexible\Layouts\Forms\Fields\TextField::class),
        ];
    }

}
