<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
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

    public function job_opportunity()
    {
        return $this->belongsTo(JobOpportunity::class);
    }

    protected $casts = [
        'gce_al_results' => 'array',
        'gce_ol_results' => 'array',
        'higher_education_certificates' => 'array',
        'professional_trainings' => 'array',
        'employment_history' => 'array',
        'service_bonds' => 'array',
    ];

    protected $guarded = [];
}
