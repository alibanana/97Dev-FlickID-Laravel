<?php

use Illuminate\Database\Seeder;

use App\ProjectType;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_types = [
            [
                'ilustration_file'=>'/assets/seeder/mobile-apps-icon.svg',
                'type'=>'Mobile Apps',
                'description'=>'Creating stable and easy to use application for both Android and iOS.'
            ],
            [
                'ilustration_file'=>'/assets/seeder/websites-icon.svg',
                'type'=>'Websites',
                'description'=>'Building responsive websites to fit every business needs.'
            ],
            [
                'ilustration_file'=>'/assets/seeder/desktop-icon.svg',
                'type'=>'Desktop',
                'description'=>'Designing powerful desktop application ready for Windows, Mac and Linux.'
            ]
        ];

        foreach ($project_types as $key => $value) {
            ProjectType::create($value);
        }
    }
}
