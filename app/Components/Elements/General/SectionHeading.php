<?php

namespace App\View\Components\Elements\General;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class SectionHeading extends Component
{
    public $name;
    public $class;
    public $labelEn;
    public $labelDh;
    public $tag;
    public $dualLanguage;
    public $language;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $class, $labelEn, $labelDh, $tag, $dualLanguage, $language)
    {
        $this->name  = $name;
        $this->class = $class;
        $this->labelEn = $labelEn;
        $this->labelDh = $labelDh;
        $this->tag = $tag;
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
        return view('components.elements.general.section-heading');
    }
}
