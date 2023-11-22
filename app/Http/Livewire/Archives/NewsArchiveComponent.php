<?php

namespace App\Http\Livewire\Archives;

use App\Models\News;
use App\Models\Sidebar;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class NewsArchiveComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $page = 1;
    public $sidebar;
    public $start, $end, $date_range;
    public $dateFilterApplied;
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
        $this->language = $language;
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->sidebar = Sidebar::find(nova_get_setting('sidebar-news'));
        $this->start = '';
        $this->end = date('Y-m-d');
    }

    public function setFilter()
    {
        [$this->start, $this->end] = explode('to', $this->date_range);
        $this->dateFilterApplied = true;
    }

    public function clearFilter()
    {
        $this->start = '';
        $this->end = date('Y-m-d');
        $this->date_range = '';
        $this->dateFilterApplied = false;
    }

    public function render()
    {

        if($this->page <= 1){
            $titleEn = 'News';
            $titleDh = 'ޚަބަރު';
        } else {
            $titleEn = 'News' . ' - Page ' .$this->page;
            $titleDh = 'ޚަބަރު' . ' - ސަފްހާ ' .$this->page;
        }

        return view('livewire.archives.news-archive-component', [
            'data' => News::query()
            ->search($this->search)
            ->whereDate('created_at', '>=', $this->start)
            ->whereDate('created_at', '<=', $this->end)
            ->latest()
            ->paginate(15),
            'resourceRoute' => 'single-news',
            'titleEn' => $titleEn,
            'titleDh' => $titleDh,
        ]);
    }
}
