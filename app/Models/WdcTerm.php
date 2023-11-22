<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WdcTerm extends Model
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
        'term_start_date' => 'date',
        'term_end_date' => 'date',
    ];

    public function wdc_members()
    {
        return $this->belongsToMany(WdcMember::class)->withPivot('level', 'position_en', 'position_dh', 'term_start_date', 'term_end_date');
    }

}
