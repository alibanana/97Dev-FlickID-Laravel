<?php

use Illuminate\Database\Seeder;

use App\FeaturedProject;

class FeaturedProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $featured_project = [
            [
                'position'=>1,
                'project_id'=>1
            ]
        ];

        foreach ($featured_project as $key => $value) {
            FeaturedProject::create($value);
        }
    }
}
