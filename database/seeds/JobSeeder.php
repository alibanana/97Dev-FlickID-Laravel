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
                'title' => 'CEO',
                'description' => 'This is the job description for a CEO.'
            ],
            [
                'title' => 'CTO',
                'description' => 'This is the job description for a CTO.'
            ],
            [
                'title' => 'CMO',
                'description' => 'This is the job description for a CMO.'
            ],
            [
                'title' => 'Backend Engineer',
                'description' => 'This is the job description for a Back-end Engineer.',
                'offerable' => 1
            ],
            [
                'title' => 'Front-end Engineer',
                'description' => 'This is the job description for a Front-end Engineer.',
                'offerable' => 1
            ],
            [
                'title' => 'Fullstack Engineer',
                'description' => 'This is the job description for a Fullstack Engineer.',
                'offerable' => 1
            ],
        ];

        foreach ($jobs as $key => $value) {
            Job::create($value);
        }
    }
}
