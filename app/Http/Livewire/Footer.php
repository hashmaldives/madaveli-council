<?php

namespace App\Http\Livewire;

use App\Models\Sidebar;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Footer extends Component
{

    public $widgets;
    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        if(!empty(nova_get_setting('sidebar-footer'))) {
            //$this->widgets = Sidebar::find(nova_get_setting('sidebar-footer'))->get();
            $this->widgets = Sidebar::find(nova_get_setting('sidebar-footer'));
        } else {
            $this->widgets = '';
        }
        
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
