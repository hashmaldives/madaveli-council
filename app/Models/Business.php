<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
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
    
    public function business_category()
    {
        return $this->belongsToMany(BusinessCategory::class);
    }

    public function business_type()
    {
        return $this->belongsToMany(BusinessType::class);
    }

    public function scopeSearch($query,$search)
    {
        $query->where('title_en','LIKE','%'.$search.'%')
        ->orWhere('title_dh','LIKE','%'.$search.'%');
        // ->orwhere('tags_en','LIKE','%'.$search.'%')
        // ->orwhere('tags_dh','LIKE','%'.$search.'%');
    }
}
