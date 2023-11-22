<?php

namespace App\Nova\Flexible\Layouts\Forms\Fields;

use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\MultiSelect;
use HashTechnologies\ThaanaText\ThaanaText;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class MultiFileField extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'multifilefield';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Multi File Field';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Label English', 'label_en')->rules('required'),
            ThaanaText::make('Label Dhivehi', 'label_dh')->rules('required'),
            Boolean::make('Required?', 'required'),
            MultiSelect::make('Allowed File Types', 'allowed_file_types')->options([
                'PDF' => ['label' => 'PDF', 'group' => "Documents"],
                'DOCX' => ['label' => 'DOCX', 'group' => "Documents"],
                'XLSX' => ['label' => 'XLSX', 'group' => "Documents"],
                'JPG' => ['label' => 'JPG', 'group' => "Photos"],
                'PNG' => ['label' => 'PNG', 'group' => "Photos"],
                'GIF' => ['label' => 'GIF', 'group' => "Photos"],
            ])->displayUsingLabels()->rules('required'),
            Number::make('Max File Size Allowed (MB)', 'max_size')->help('values are in MB'),
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
            )->rules('required')
        ];
    }

}