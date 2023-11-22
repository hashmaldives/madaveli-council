<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\WdcMember;
use Illuminate\Support\Facades\Session;

class SingleWdcMember extends Component
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
        $this->data = WdcMember::where('slug',$slug)->first();
        if (empty($this->data)) {
            abort(404);
        }
        $this->archiveTitleEn = 'WDC Members';
        $this->archiveTitleDh = 'އަންހެނުންގެ ތަރައްގީއަށް މަސްތްކަތް ކުރާ ކޮމެޓީގެ މެމްބަރުން';
        $this->archiveLink = 'wdc-members';
        $this->resourceRoute = 'single-wdc-member';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-wdc-member');
    }
}
