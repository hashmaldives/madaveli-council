<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Event;
use App\Models\Sidebar;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SingleEvent extends Component
{
    public $language;
    public $itemID;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('languageEventDispatch');
    }

    public function mount($itemID) {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->data = Event::findorfail($itemID);
        $this->items = Event::latest()->get();
        $this->archiveTitleEn = 'Events';
        $this->archiveTitleDh = 'ހަރަކާތްތައް';
        $this->archiveLink = 'events';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-event'));
        $this->resourceRoute = 'single-event';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-event');
    }
}
