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
                'title' => 'CEO'
            ],
            [
                'title' => 'Backend Engineer',
                'offerable' => 1
            ],
            [
                'title' => 'Front-end Engineer',
                'offerable' => 1
            ],
            [
                'title' => 'Fullstack Engineer',
                'offerable' => 1
            ],
        ];

        foreach ($jobs as $key => $value) {
            Job::create($value);
        }
    }
}
