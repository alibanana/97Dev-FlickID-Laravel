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
                'email' => 'abhista@test.com',
                'photo_file' => '/assets/seeder/team-member-abhista-gatya.png',
                'job_id' => 1,
            ],
            [
                'name' => 'Alifio Rasyid',
                'email' => 'alifio@test.com',
                'photo_file' => '/assets/seeder/team-member-abhista-gatya.png',
                'job_id' => 2,
            ],
            [
                'name' => 'Fernandha Dzaky',
                'email' => 'fernandha@test.com',
                'photo_file' => '/assets/seeder/team-member-abhista-gatya.png',
                'job_id' => 2,
            ],
            [
                'name' => 'Gabriel Amilaeno',
                'email' => 'gabriel@test.com',
                'photo_file' => '/assets/seeder/team-member-abhista-gatya.png',
                'job_id' => 3,
            ],
        ];

        foreach ($team_members as $key => $value) {
            TeamMember::create($value);
        }
    }
}
