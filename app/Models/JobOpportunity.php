<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobOpportunity extends Model
{
    use HasFactory;
    use LogsActivity;
    
    protected static $logAttributes = ['name', 'text'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'text']);
        // Chain fluent methods for configuration options
    }

    protected $casts = [
        'application_deadline' => 'datetime',
        'attachment' => 'array',
    ];

    public function job_applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function scopeSearch($query,$search)
    {
        $query->where('title_en','LIKE','%'.$search.'%')
        ->orwhere('title_dh','LIKE','%'.$search.'%')
        ->orwhere('tags_en','LIKE','%'.$search.'%')
        ->orwhere('tags_dh','LIKE','%'.$search.'%');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

}
