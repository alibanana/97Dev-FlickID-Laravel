<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedProject extends Model
{
    protected $table = 'featured_projects';
    
    protected $fillable = [
        'position', 'logo_file', 'ilustration_file', 'filter_invert',
        'filter_sepia', 'filter_saturate', 'filter_hue_rotate', 'filter_brightness',
        'filter_contrast', 'project_id'
    ];

    // Get the project a particular featured-project is belonging to.
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
