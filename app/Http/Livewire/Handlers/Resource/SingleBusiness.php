<?php

namespace App\Http\Livewire\Handlers\Resource;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Business;
use Illuminate\Support\Facades\Session;

class SingleBusiness extends Component
{
    public $language;
    public $slug;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('languageEventDispatch');
    }

    public function mount($slug) {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->slug = $slug ? $slug : '/';
        $this->data = Business::where('slug',$slug)->with('business_category', 'business_type')->first();
        if (empty($this->data)) {
            abort(404);
        }
        $this->items = Business::latest()->get();
        $this->archiveTitleEn = 'Service Prividers & Businesses';
        $this->archiveTitleDh = 'ވިޔަފާރިތަކާއި އެކިއެކި ޚިދުމަތްދޭ ތަންތަން';
        $this->archiveLink = 'serviceproviders';
        $this->sideBar = Sidebar::find(nova_get_setting('sidebar-business'));
        $this->resourceRoute = 'single-business';
    }
    
    public function render()
    {
        return view('livewire.handlers.resource.single-business');
    }
}
