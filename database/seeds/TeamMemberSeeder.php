<?php

use Illuminate\Database\Seeder;

use App\TeamMember;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team_members = [
            [
                'name' => 'Abhista Gatya',                
                'photo_file' => 'assets/seeder/team-member-abhista-gatya.png',
                'job_id' => 1,
            ]
        ];

        foreach ($team_members as $key => $value) {
            TeamMember::create($value);
        }
    }
}
