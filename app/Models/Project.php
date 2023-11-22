<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
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
        'images' => 'array',
        'videos' => 'array',
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public function project_category()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function project_status()
    {
        return $this->belongsTo(ProjectStatus::class);
    }

    public function scopeSearch($query,$search)
    {
        $query->where('title_en','LIKE','%'.$search.'%')
        ->orwhere('title_dh','LIKE','%'.$search.'%');
        // ->orwhere('tags_en','LIKE','%'.$search.'%')
        // ->orwhere('tags_dh','LIKE','%'.$search.'%');
    }

}
