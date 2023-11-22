<?php

namespace App\View\Components\Elements\General;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class RichText extends Component
{
    public $name;
    public $class;
    public $contentEn;
    public $contentDh;
    public $col;
    public $design;
    public $icon;
    public $dualLanguage;
    public $language;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $class, $contentEn, $contentDh, $col, $design, $icon, $dualLanguage, $language)
    {
        $this->name  = $name;
        $this->class = $class;
        $this->contentEn = $contentEn;
        $this->contentDh = $contentDh;
        $this->col = $col;
        $this->design = $design;
        $this->icon = $icon;
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
        return view('components.elements.general.info-banner');
    }
}
