<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedProject extends Model
{
    protected $table = 'featured_projects';
    
    protected $fillable = [
        'position', 'logo_file', 'ilustration_file', 'color_code', 'project_id'
    ];

    // Get the project a particular featured-project is belonging to.
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
