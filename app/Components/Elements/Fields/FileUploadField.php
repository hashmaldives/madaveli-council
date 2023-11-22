<?php

namespace App\View\Components\Elements\Fields;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class FileUploadField extends Component
{
    public $name;
    public $class;
    public $labelEn;
    public $labelDh;
    public $col;
    public $req;
    public $mimeTypes;
    public $filePreview;
    public $dualLanguage;
    public $language;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $class, $labelEn, $labelDh, $col, $req, $mimeTypes, $filePreview, $dualLanguage, $language)
    {
        $this->name  = $name;
        $this->class = $class;
        $this->labelEn = $labelEn;
        $this->labelDh = $labelDh;
        $this->col = $col;
        $this->mimeTypes = $mimeTypes;
        $this->filePreview = $filePreview;
        $this->dualLanguage = $dualLanguage;
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        if(!empty($req) && $req == 'true') {
            $this->req = 'required';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.fields.file-upload-field');
    }
}
