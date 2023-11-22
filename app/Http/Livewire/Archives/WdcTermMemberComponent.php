<?php

namespace App\Http\Livewire\Archives;

use App\Models\Sidebar;
use App\Models\WdcTerm;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class WdcTermMemberComponent extends Component
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
        return view('livewire.archives.wdc-term-member-component', [
            'data' => WdcTerm::with('wdc_members')->latest()->paginate(20),
            'resourceRoute' => 'single-wdc-member',
        ]);
    }
}
