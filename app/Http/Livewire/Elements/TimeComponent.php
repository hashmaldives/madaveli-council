<?php

namespace App\Http\Livewire\Elements;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class TimeComponent extends Component
{
    public $language;
    protected $listeners = ['languageToggled' => 'changeLanguage'];
    public function changeLanguage($language)
    {
        $this->language = $language;
    }
    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
    }
    public function render()
    {
        return view('livewire.elements.time-component');
    }
}
