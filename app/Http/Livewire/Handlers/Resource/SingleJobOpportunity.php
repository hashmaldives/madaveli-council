<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\JobOpportunity;
use Illuminate\Support\Facades\Session;

class SingleJobOpportunity extends Component
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
        $this->data = JobOpportunity::findorfail($itemID);
        $this->items = JobOpportunity::latest()->get();
        $this->archiveTitleEn = 'Job Opportunities';
        $this->archiveTitleDh = 'ވަޒީފާގެ ފުރުސަތު';
        $this->archiveLink = 'job-opportunities';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-job'));
        $this->resourceRoute = 'single-job-opportunity';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-job-opportunity');
    }
}
