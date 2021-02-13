<?php

use Illuminate\Database\Seeder;

use App\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'shortTitle' => 'CEO',
                'longTitle' => 'Chief Executive Officer',
                'description' => 'This is the job description for a CEO.'
            ],
            [
                'shortTitle' => 'CTO',
                'longTitle' => 'Chief Technology Officer',
                'description' => 'This is the job description for a CTO.'
            ],
            [
                'shortTitle' => 'CMO',
                'longTitle' => 'Chief Marketing Officer',
                'description' => 'This is the job description for a CMO.'
            ],
            [
                'longTitle' => 'Backend Engineer',
                'description' => 'This is the job description for a Back-end Engineer.',
                'offerable' => 1
            ],
            [
                'longTitle' => 'Front-end Engineer',
                'description' => 'This is the job description for a Front-end Engineer.',
                'offerable' => 1
            ],
            [
                'longTitle' => 'Fullstack Engineer',
                'description' => 'This is the job description for a Fullstack Engineer.',
                'offerable' => 1
            ],
        ];

        foreach ($jobs as $key => $value) {
            Job::create($value);
        }
    }
}
