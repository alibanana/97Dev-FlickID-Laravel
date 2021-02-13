<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'description', 'offerable'
    ];

    // Get all the team members with a certain job.
    public function team_members()
    {
        return $this->hasMany('App\TeamMember');
    }

    // Get all applicants with a certain job.
    public function applicants()
    {
        return $this->hasMany('App\Applicant');
    }
}
