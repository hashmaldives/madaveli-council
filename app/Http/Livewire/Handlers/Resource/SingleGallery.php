<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Gallery;
use App\Models\Sidebar;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SingleGallery extends Component
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
        $this->data = Gallery::findorfail($itemID);
        $this->items = Gallery::latest()->get();
        $this->archiveTitleEn = 'Gallery';
        $this->archiveTitleDh = 'ގެލެރީ';
        $this->archiveLink = 'galleries';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-gallery'));
        $this->resourceRoute = 'single-gallery';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-gallery');
    }
}
