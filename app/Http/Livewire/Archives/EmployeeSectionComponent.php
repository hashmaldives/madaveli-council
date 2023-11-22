<?php

namespace App\Http\Livewire\Archives;

use App\Models\Sidebar;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EmployeeSection;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class EmployeeSectionComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
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
        $this->language = $language;
    }

    public function mount() {
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
    }

    public function render()
    {
        return view('livewire.archives.employee-section-component', [
            'data' => EmployeeSection::with('employees')->latest()->paginate(20),
            'resourceRoute' => 'single-employee',
        ]);
    }
}
