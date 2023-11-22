<?php

namespace App\View\Components\Elements\Fields;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class SearchField extends Component
{
    public $name;
    public $class;
    public $placeHolderEn;
    public $placeHolderDh;
    public $col;
    public $type;
    public $dualLanguage;
    public $language;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $class, $placeHolderEn, $placeHolderDh, $col, $type, $dualLanguage, $language)
    {
        $this->name  = $name;
        $this->class = $class;
        $this->placeHolderEn = $placeHolderEn;
        $this->placeHolderDh = $placeHolderDh;
        $this->col = $col;
        $this->type = $type;
        $this->dualLanguage = $dualLanguage;
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.fields.search-field');
    }
}
