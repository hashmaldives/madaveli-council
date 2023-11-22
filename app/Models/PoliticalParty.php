<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PoliticalParty extends Model
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

    public function council_members()
    {
        return $this->hasMany(CouncilMember::class);
    }

    public function wdc_members()
    {
        return $this->hasMany(WdcMember::class);
    }
}
