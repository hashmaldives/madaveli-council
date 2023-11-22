<?php

namespace Hashtechnologies\TinyMce;

use Laravel\Nova\Fields\Field;

class TinyMce extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'tiny-mce';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = false;

    public function __construct(string $name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->resolveCallback = $resolveCallback;

        $this->withMeta([
            'options' => config('nova-tinymce-editor', []),
        ]);

        $this->thaana(true);
    }

    public function thaana($thaana = true){
        return $this->withMeta([
            'thaana' => $thaana,
        ]);
    }

    public function options($options)
    {
        $inlineOptions = $this->meta['options'] ?? [];

        return $this->withMeta([
            'options' => array_merge($inlineOptions, $options),
        ]);
    }
}
