<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
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

    public function employee_sections()
    {
        return $this->belongsToMany(EmployeeSection::class)->withPivot('level', 'position_en', 'position_dh', 'employment_start_date', 'employment_end_date');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

}
