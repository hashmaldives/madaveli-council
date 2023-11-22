<?php

namespace App\Http\Livewire\Archives;

use App\Models\Project;
use App\Models\Sidebar;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProjectStatus;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class ProjectArchiveComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $page = 1;
    public $selectedCategory = [];
    public $selectedStatus = [];
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
        $this->sidebar = Sidebar::find(nova_get_setting('sidebar-project'));
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
            $titleEn = 'Projects';
            $titleDh = 'މަޝްރޫއުުތައް';
        } else {
            $titleEn = 'Projects' . ' - Page ' .$this->page;
            $titleDh = 'މަޝްރޫއުުތައް' . ' - ސަފްހާ ' .$this->page;
        }

        return view('livewire.archives.project-archive-component', [
            // 'data' => Project::with('project_category', 'project_status')
            // ->when(count($this->selectedCategory),function($query){
            //     $query->whereHas('project_category', fn($query) => $query->whereIn('id',$this->selectedCategory));
            // })
            // ->when(count($this->selectedStatus),function($query){
            //     $query->whereHas('project_status', fn($query) => $query->whereIn('id',$this->selectedStatus));
            // })
            // ->search($this->search)
            // ->latest()
            // ->paginate(15),
            'data' => Project::query()
            ->with('project_category', 'project_status')
            ->when(count($this->selectedCategory),function($query){
                $query->whereHas('project_category', fn($query) => $query->whereIn('id',$this->selectedCategory));
            })
            ->when(count($this->selectedStatus),function($query){
                $query->whereHas('project_status', fn($query) => $query->whereIn('id',$this->selectedStatus));
            })
            ->search($this->search)
            ->whereDate('created_at', '>=', $this->start)
            ->whereDate('created_at', '<=', $this->end)
            ->latest()
            ->paginate(15),
            'resourceRoute' => 'single-project',
            'titleEn' => $titleEn,
            'titleDh' => $titleDh,
            'categories' => ProjectCategory::latest()->get(),
            'statuses' => ProjectStatus::latest()->get(),
        ]);
    }
}
