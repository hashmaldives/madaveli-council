<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormType extends Model
{
    use HasFactory;
    use LogsActivity;
    
    protected static $logAttributes = ['name', 'text'];

    public function dynamic_forms()
    {
        return $this->hasMany(DynamicForm::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name', 'title_en', 'title_dh', 'content_en', 'content_dh']);
        // Chain fluent methods for configuration options
    }
}
