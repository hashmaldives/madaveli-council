<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Download;
use App\Models\Publication;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SiteSearchComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    // public $page = 1;
    public $sidebar;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    public function updatingSearch(){
        $this->resetPage();
        $this->resetPage('resultNews');
        $this->resetPage('resultPage');
        $this->resetPage('resultGallery');
        $this->resetPage('resultProject');
        $this->resetPage('resultDownload');
    }

    public $language;   
    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language;
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->sidebar = Sidebar::find(nova_get_setting('sidebar-news'));
    }

    public function render()
    {

        return view('livewire.site-search-component', [

            'news_results' => News::where('title_en','LIKE','%'.$this->search.'%')
            ->orWhere('title_dh','LIKE','%'.$this->search.'%')
            ->orWhere('content_en','LIKE','%'.$this->search.'%')
            ->orWhere('content_dh','LIKE','%'.$this->search.'%')
            ->latest()
            ->paginate(7, ['*'], 'resultNews'),

            'page_results' => Page::where('title_en','LIKE','%'.$this->search.'%')
            ->orWhere('title_dh','LIKE','%'.$this->search.'%')
            ->orWhere('content_en','LIKE','%'.$this->search.'%')
            ->orWhere('content_dh','LIKE','%'.$this->search.'%')
            ->latest()
            ->paginate(7, ['*'], 'resultPage'),

            'gallery_results' => Gallery::where('title_en','LIKE','%'.$this->search.'%')
            ->orWhere('title_dh','LIKE','%'.$this->search.'%')
            ->orWhere('content_en','LIKE','%'.$this->search.'%')
            ->orWhere('content_dh','LIKE','%'.$this->search.'%')
            ->latest()
            ->paginate(7, ['*'], 'resultGallery'),

            'project_results' => Project::where('title_en','LIKE','%'.$this->search.'%')
            ->orWhere('title_dh','LIKE','%'.$this->search.'%')
            ->orWhere('content_en','LIKE','%'.$this->search.'%')
            ->orWhere('content_dh','LIKE','%'.$this->search.'%')
            ->latest()
            ->paginate(7, ['*'], 'resultProject'),

            'download_results' => Download::where('title_en','LIKE','%'.$this->search.'%')
            ->orWhere('title_dh','LIKE','%'.$this->search.'%')
            ->latest()
            ->paginate(7, ['*'], 'resultDownload'),

            'publication_results' => Publication::where('title_en','LIKE','%'.$this->search.'%')
            ->orWhere('title_dh','LIKE','%'.$this->search.'%')
            ->latest()
            ->paginate(7, ['*'], 'resultPublication'),

        ]);
    }
}