<?php

namespace HashTechnologies\LinkField;

use Laravel\Nova\Fields\Field;

class LinkField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'link-field';

    public function details($details)
    {
        $class = $details['class'] ?? null;
        
        return $this->withMeta([
            'href' => is_callable($details['href']) ? call_user_func($details['href']) : $details['href'],
            'text' => is_callable($details['text']) ? call_user_func($details['text']) : $details['text'],
            'newTab' => is_callable($details['newTab']) ? call_user_func($details['newTab']) : $details['newTab'],
            'class' => is_callable($class) ? call_user_func($class) : $class,
        ]);
    }
    
}
