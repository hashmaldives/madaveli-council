<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class LanguageToggle extends Component
{
    public $language = false;
    public $currentLanguage = '';
    public $switchId;

    public function mount($switchId) {
        $this->currenLanguage = nova_get_setting('default_language') == 'en' ? 'en' : 'dh';
        $this->switchId = $switchId;
        $this->language = Session::get('language') == 'dh' ? false : true;
    }

    public function updated() {
        $this->currentLanguage = $this->language ? 'en' : 'dh';
        Session::put('language',$this->currentLanguage);
        $this->emit('languageToggled',$this->currentLanguage);
    }
    public function render()
    {
        return view('livewire.language-toggle');
    }
}
