<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_title', 'project_description', 'project_type','project_avatar',
    ];
}
