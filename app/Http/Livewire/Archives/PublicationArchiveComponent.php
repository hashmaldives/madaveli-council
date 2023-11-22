<?php

namespace App\Http\Livewire\Archives;

use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Publication;
use Livewire\WithPagination;
use App\Models\PublicationCategory;
use Illuminate\Support\Facades\Session;

class PublicationArchiveComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $selectedCategory = [];
    public $page = 1;
    public $sidebar;
    public $start, $end, $date_range;
    public $dateFilterApplied;
    public $slug = null;
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

    public function mount($slug) {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $this->sidebar = Sidebar::find(nova_get_setting('sidebar-publication'));
        $this->start = '';
        $this->end = date('Y-m-d');
        // Loading category data
        $this->slug = $slug ? $slug : '/';
        $this->data = PublicationCategory::where('slug',$slug)->with('publications')->first();
        if (empty($this->data)) {
            abort(404);
        }
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
            $titleEn = $this->data->title_en;
            $titleDh = $this->data->title_dh;
        } else {
            $titleEn = $this->data->title_en . ' - Page ' .$this->page;
            $titleDh = $this->data->title_dh . ' - ސަފްހާ ' .$this->page;
        }

        return view('livewire.archives.publication-archive-component', [
            // 'items' => Publication::search($this->search)
            // ->where('publication_category_id', $this->data->id)
            // ->latest()
            // ->paginate(15),
            'items' => Publication::query()
            ->search($this->search)
            ->where('publication_category_id', $this->data->id)
            ->whereDate('created_at', '>=', $this->start)
            ->whereDate('created_at', '<=', $this->end)
            ->latest()
            ->paginate(15),
            'resourceRoute' => 'single-publication',
            'titleEn' => $titleEn,
            'titleDh' => $titleDh,
        ]);
    }
}
