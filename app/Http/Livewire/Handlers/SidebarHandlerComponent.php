<?php

namespace App\Http\Livewire\Handlers;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SidebarHandlerComponent extends Component
{
    public $data;
    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('languageEventDispatch');
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
    }

    public function render()
    {
        return view('livewire.handlers.sidebar-handler-component');
    }
}
