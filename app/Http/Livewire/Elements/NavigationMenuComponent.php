<?php

namespace App\Http\Livewire\Elements;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class NavigationMenuComponent extends Component
{
    public $language;
    public $menuClass;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->menu = nova_get_menu_by_slug('primary_menu');
    }

    public function render()
    {
        return view('livewire.elements.navigation-menu-component');
    }
}
