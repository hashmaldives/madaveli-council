<?php

namespace App\Http\Livewire\Archives;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Download;
use Livewire\WithPagination;
use App\Models\DownloadCategory;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class DownloadArchiveComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $selectedCategory = [];
    public $page = 1;
    public $sidebar;
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingSearch(){
        $this->resetPage();
    }

    public $language;   
    protected $listeners = ['languageToggled' => 'changeLanguage'];

    public function changeLanguage($language)
    {
        $this->language = $language ;
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->sidebar = Sidebar::find(nova_get_setting('sidebar-download'));
    }

    public function render()
    {

        if($this->page <= 1){
            $titleEn = 'Downloads';
            $titleDh = 'ޑައުންލޯޑް';
        } else {
            $titleEn = 'Downloads' . ' - Page ' .$this->page;
            $titleDh = 'ޑައުންލޯޑް' . ' - ސަފްހާ ' .$this->page;
        }

        return view('livewire.archives.download-archive-component', [
            'data' => Download::with('download_category')
            ->when(count($this->selectedCategory),function($query){
                $query->whereHas('download_category', fn($query) => $query->whereIn('id',$this->selectedCategory));
            })
            ->search($this->search)
            ->latest()
            ->paginate(15),
            'resourceRoute' => 'downloads',
            'titleEn' => $titleEn,
            'titleDh' => $titleDh,
            'categories' => DownloadCategory::latest()->get(),
        ]);
    }
}
