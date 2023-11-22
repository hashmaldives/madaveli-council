<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DynamicForm extends Model
{
    use HasFactory;

    use LogsActivity;
    
    protected static $logAttributes = ['name', 'text'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'title_en', 'title_dh', 'content_en', 'content_dh']);
        // Chain fluent methods for configuration options
    }

    protected $casts = [
        'form_data' => 'array',
    ];

    public function form_type()
    {
        return $this->belongsTo(FormType::class);
    }

    public function form_category()
    {
        return $this->belongsTo(FormCategory::class);
    }

    public function form_submission()
    {
        return $this->belongsTo(FormSubmission::class);
    }

    public function scopeSearch($query,$search)
    {
        $query->where('title_en','LIKE','%'.$search.'%')
        ->orwhere('title_dh','LIKE','%'.$search.'%');
        // ->orwhere('tags_en','LIKE','%'.$search.'%')
        // ->orwhere('tags_dh','LIKE','%'.$search.'%');
    }
}
