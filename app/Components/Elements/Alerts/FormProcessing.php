<?php

namespace App\View\Components\Elements\Alerts;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class FormProcessing extends Component
{
    public $target;
    public $icon;
    public $class;
    public $labelEn;
    public $labelDh;
    public $dualLanguage;
    public $language;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target, $icon, $class, $labelEn, $labelDh, $dualLanguage, $language)
    {
        $this->target  = $target;
        $this->icon  = $icon;
        $this->class = $class;
        $this->labelEn = $labelEn;
        $this->labelDh = $labelDh;
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
        return view('components.elements.alerts.form-processing');
    }
}
