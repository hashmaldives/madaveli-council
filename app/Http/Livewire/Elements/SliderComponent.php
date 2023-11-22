<?php

namespace App\Http\Livewire\Elements;

use App\Models\Slide;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SliderComponent extends Component
{
    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->slides = Slide::latest()->get();
    }

    public function render()
    {
        return view('livewire.elements.slider-component');
    }
}
