<?php

namespace App\Http\Livewire\Handlers;

use App\Models\News;
use App\Models\Page;
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

class PageHandlerComponent extends Component
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
        // Loading page data
        $this->slug = $slug ? $slug : '/';
        $this->page = Page::where('slug',$slug)->with('sidebar')->first();
        if (empty($this->page)) {
            abort(404);
        }
        // Loading resources
        $this->slides = Slide::latest()->get();
        $this->news = News::latest()->get();
        $this->galleries = Gallery::latest()->get();
        $this->events = Event::latest()->get();
        $this->projects = Project::latest()->get();
        $this->publications = Publication::with('publication_category')->latest()->get();
    }

    public function render()
    {
        return view('templates.' . $this->page->template);
    }
}
