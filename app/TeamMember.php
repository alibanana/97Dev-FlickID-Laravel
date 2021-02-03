<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members';
    
    protected $fillable = [
        'name', 'email', 'photo_file', 'job_id'
    ];

    // Get the job of a certain team member.
    public function job()
    {
        return $this->belongsTo('App\Job');
    }
}
