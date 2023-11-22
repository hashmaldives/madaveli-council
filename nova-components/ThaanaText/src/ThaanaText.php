<?php

namespace HashTechnologies\ThaanaText;

use Laravel\Nova\Fields\Field;

class ThaanaText extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'thaana-text';

    public function __construct(string $name, ? string $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->thaana(true);
        $this->type();
    }

    public function thaana($thaana = true){
        if($thaana){
            return $this->withMeta([
                'status' => 'enable',
            ]);
        }else{
            return $this->withMeta([
                'status' => 'disable',
            ]);
        }
    }

    public function type($type = 'phonetic'){
        return $this->withMeta([
            'type' => $type,
        ]);
    }

    public function convertToLatin($latin = 'latin'){
        return $this->withMeta([
            'latin' => $latin,
        ]);
    }
    
}
