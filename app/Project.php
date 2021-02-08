<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'ilustration_file', 'logo_file', 'title', 'description', 
        'sub_description', 'scope', 'technologies', 'deliverables', 
        'bg_file', 'headline', 'sub-headline', 'project_type_id'
    ];

    // Get the project's type for a certain project.
    public function project_type()
    {
        return $this->belongsTo('App\ProjectType');
    }

    // Get all the project-details (child) for a certain project.
    public function details()
    {
        return $this->hasMany('App\ProjectDetail');
    }

    // Get the featured-project's for a certain project.
    public function featured_project()
    {
        return $this->hasOne('App\FeaturedProject');
    }
}
