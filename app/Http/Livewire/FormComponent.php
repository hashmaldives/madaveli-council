<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DynamicForm;
use App\Models\FormSubmission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class FormComponent extends Component
{

    public $language;
    protected $listeners = ['languageToggled' => 'changeLanguage'];
    public $slug1;
    public $slug;
    public $data;
    public $formData = [];

    public $rules = [];
    public function changeLanguage($language)
    {
        $this->language = $language;
    }
    public function submit()
    {
        // dd($this->rules);
        $validatedData = $this->validate($this->rules, [], $this->formData);
        $submission = FormSubmission::create([
            'submission_data' => json_encode($this->formData),
            'dynamic_form_id' => $this->id
        ]);
    }
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->language = Session::has('language') ? Session::get('language') : nova_get_setting('default_language');
        $data = DynamicForm::where('slug', $this->slug)->firstorfail();
        $this->data = $data;
        foreach ($data->form_data as $section) {
            foreach ($section['attributes']['fields'] as $field) {
                if(isset($field['attributes']['name'])){
                    $fname = Str::slug($field['attributes']['name'], '_');
                    $this->formData[$fname] = '';
                    $this->rules['formData.'.$fname] = isset($field['attributes']['required']) ? 'required' : 'nullable'; 
                }
            }
        }

        // dd($this->formData);
    }

    public function render()
    {
        // $data = DynamicForm::where('slug', $this->slug)->firstorfail();
        return view('livewire.form-component', [
            // 'data' => $data,
        ]);
    }
}
