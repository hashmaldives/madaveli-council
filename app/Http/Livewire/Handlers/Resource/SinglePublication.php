<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Publication;
use Illuminate\Support\Facades\Session;

class SinglePublication extends Component
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
        $this->data = Publication::with('publication_category')->findorfail($itemID);
        $this->items = Publication::latest()->get();
        $this->archiveTitleEn = 'Publications';
        $this->archiveTitleDh = 'ޝާއިރުކުރުންތައް';
        $this->archiveLink = 'publications';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-publications'));
        $this->resourceRoute = 'single-publication';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-publication');
    }
}
