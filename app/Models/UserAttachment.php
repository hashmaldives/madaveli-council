<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAttachment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function idea_box_submission()
    {
        return $this->belongsTo(IdeaBoxSubmission::class);
    }

    public function application_form_submission()
    {
        return $this->belongsTo(ApplicationFormSubmission::class);
    }
}
