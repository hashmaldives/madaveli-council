<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationFormCategory extends Model
{
    use HasFactory;

    public function application_form_submissions()
    {
        return $this->hasMany(ApplicationFormSubmission::class);
    }

}
