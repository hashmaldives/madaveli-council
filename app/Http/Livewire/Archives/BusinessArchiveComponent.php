<?php

namespace App\Http\Livewire\Archives;

use App\Models\Island;
use App\Models\Sidebar;
use Livewire\Component;
use App\Models\Business;
use App\Models\BusinessType;
use Livewire\WithPagination;
use App\Models\BusinessCategory;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class BusinessArchiveComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $selectedCategory = [], $selectedType = [], $selectedIsland = [];
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
        $this->sidebar = Sidebar::find(nova_get_setting('sidebar-business'));
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
            $titleEn = 'Service Prividers & Businesses';
            $titleDh = 'ވިޔަފާރިތަކާއި އެކިއެކި ޚިދުމަތްދޭ ތަންތަން';
        } else {
            $titleEn = 'Service Prividers & Businesses' . ' - Page ' .$this->page;
            $titleDh = 'ވިޔަފާރިތަކާއި އެކިއެކި ޚިދުމަތްދޭ ތަންތަން' . ' - ސަފްހާ ' .$this->page;
        }

        return view('livewire.archives.business-archive-component', [
            // 'data' => Business::when(count($this->selectedCategory),function($query){
            //     $query->whereHas('business_category' , function($q){
            //         $q->where('business_category_id',$this->selectedCategory);
            //     });
            // })
            // ->when(count($this->selectedType),function($query){
            //     $query->whereHas('business_type' , function($q){
            //         $q->where('business_type_id',$this->selectedType);
            //     });
            // })
            // ->when(count($this->selectedIsland),function($query){
            //     $query->whereHas('island' , function($q){
            //         $q->where('island_id',$this->selectedIsland);
            //     });
            // })
            // ->when($this->search,function($q){
            //     $q->search($this->search);
            // })
            // ->with('business_category', 'business_type')
            // ->latest()
            // ->paginate(15),

            'data' => Business::query()
            ->whereDate('created_at', '>=', $this->start)
            ->whereDate('created_at', '<=', $this->end)
            ->when(count($this->selectedCategory),function($query){
                $query->whereHas('business_category' , function($q){
                    $q->where('business_category_id',$this->selectedCategory);
                });
            })
            ->when(count($this->selectedType),function($query){
                $query->whereHas('business_type' , function($q){
                    $q->where('business_type_id',$this->selectedType);
                });
            })
            ->when(count($this->selectedIsland),function($query){
                $query->whereHas('island' , function($q){
                    $q->where('island_id',$this->selectedIsland);
                });
            })
            ->when($this->search,function($q){
                $q->search($this->search);
            })
            ->with('business_category', 'business_type')
            ->latest()
            ->paginate(15),
            'resourceRoute' => 'single-business',
            'titleEn' => $titleEn,
            'titleDh' => $titleDh,
            'categories' => BusinessCategory::latest()->get(),
            'types' => BusinessType::latest()->get(),
        ]);
    }
}
