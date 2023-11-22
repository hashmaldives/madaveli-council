<?php

namespace App\Http\Livewire\Handlers;

use App\Models\News;
use App\Models\Event;
use App\Models\Slide;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\HomePageSection;
use Illuminate\Support\Facades\Session;

class HomeHandlerComponent extends Component
{

    public $language;

    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
        $this->dispatchBrowserEvent('languageEventDispatch');
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        // Loading resources
        $this->slides = Slide::latest()->get();
        $this->news = News::latest()->get();
        $this->galleries = Gallery::latest()->get();
        $this->events = Event::latest()->get();
        $this->projects = Project::latest()->get();
        $this->publications = Publication::with('publication_category')->latest()->get();
        $this->homeSections = HomePageSection::ordered()->get();
    }

    public function render()
    {
        return view('livewire.handlers.home-handler-component');
    }
}
