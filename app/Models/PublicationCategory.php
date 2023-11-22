<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicationCategory extends Model
{
    use LogsActivity;
    
    protected static $logAttributes = ['name', 'text'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
        //->logOnly(['name', 'title_en', 'title_dh', 'content_en', 'content_dh']);
        // Chain fluent methods for configuration options
    }
    
    protected $casts = [
        'attachment' => 'array',
    ];

    public function scopeSearch($query,$search)
    {
        $query->where('title_en','LIKE','%'.$search.'%')
        ->orwhere('title_dh','LIKE','%'.$search.'%');
        // ->orwhere('tags_en','LIKE','%'.$search.'%')
        // ->orwhere('tags_dh','LIKE','%'.$search.'%');
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
