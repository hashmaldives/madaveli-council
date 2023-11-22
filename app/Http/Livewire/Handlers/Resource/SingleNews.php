<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\News;
use App\Models\Sidebar;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SingleNews extends Component
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
        $this->data = News::findorfail($itemID);
        $this->items = News::latest()->get();
        $this->archiveTitleEn = 'News';
        $this->archiveTitleDh = 'ޚަބަރު';
        $this->archiveLink = 'news';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-news'));
        $this->resourceRoute = 'single-news';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-news');
    }
}
