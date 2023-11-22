<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormSubmission extends Model
{
    use HasFactory;
    use LogsActivity;
    
    protected static $logAttributes = ['name', 'text'];
    protected $guarded = [];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'title_en', 'title_dh', 'content_en', 'content_dh']);
        // Chain fluent methods for configuration options
    }

    public function dynamic_form()
    {
        return $this->belongsTo(DynamicForm::class);
    }

    

}
