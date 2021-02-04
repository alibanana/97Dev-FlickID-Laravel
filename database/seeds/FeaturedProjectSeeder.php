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
                'logo_file'=>'/assets/seeder/featured-project-flick-logo.png',
                'ilustration_file'=>'/assets/seeder/featured-project-flick-ilustration.png',
                'color_code'=>'#FACA00',
                'project_id'=>1
            ],
            [
                'position'=>2,
                'logo_file'=>'/assets/seeder/featured-project-beepay-logo.png',
                'ilustration_file'=>'/assets/seeder/featured-project-beepay-ilustration.png',
                'color_code'=>'#FA8700',
                'project_id'=>2
            ],
            [
                'position'=>3,
                'logo_file'=>'/assets/seeder/featured-project-mobilocal-logo.png',
                'ilustration_file'=>'/assets/seeder/featured-project-mobilocal-ilustration.png',
                'color_code'=>'#749CFF',
                'project_id'=>3
            ]
        ];

        foreach ($featured_project as $key => $value) {
            FeaturedProject::create($value);
        }
    }
}
