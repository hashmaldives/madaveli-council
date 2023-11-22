<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\CouncilMember;
use Illuminate\Support\Facades\Session;

class SingleCouncilMember extends Component
{
    public $language;
    public $slug = null;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('languageEventDispatch');
    }

    public function mount($slug) {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->slug = $slug ? $slug : '/';
        $this->data = CouncilMember::where('slug',$slug)->first();
        if (empty($this->data)) {
            abort(404);
        }
        $this->archiveTitleEn = 'Council Members';
        $this->archiveTitleDh = 'ކައުންސިލް މެމްބަރުން';
        $this->archiveLink = 'council-members';
        $this->resourceRoute = 'single-council-member';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-council-member');
    }
}
