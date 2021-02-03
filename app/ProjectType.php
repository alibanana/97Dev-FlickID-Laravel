<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    protected $fillable = [
        'ilustration_file', 'type', 'description'
    ];

    // Get all the projects belonging to a certain type.
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
