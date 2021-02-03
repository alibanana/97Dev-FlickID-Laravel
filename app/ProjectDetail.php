<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    protected $table = 'project_details';
    
    protected $fillable = [
        'title', 'description', 'ilustration_file'
    ];

    // Get the project (parent) for a certain project-details.
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
