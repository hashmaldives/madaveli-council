<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Project;
use App\Models\Sidebar;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class SingleProject extends Component
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
        $this->data = Project::findorfail($itemID);
        $this->items = Project::latest()->get();
        $this->archiveTitleEn = 'Projects';
        $this->archiveTitleDh = 'މަޝްރޫއުުތައް';
        $this->archiveLink = 'projects';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-project'));
        $this->resourceRoute = 'single-project';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-project');
    }
}
