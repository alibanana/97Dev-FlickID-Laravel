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
                'filter_invert'=>78,
                'filter_sepia'=>55,
                'filter_saturate'=>779,
                'filter_hue_rotate'=>357,
                'filter_brightness'=>95,
                'filter_contrast'=>106,
                'project_id'=>1
            ],
            [
                'position'=>2,
                'logo_file'=>'/assets/seeder/featured-project-beepay-logo.png',
                'ilustration_file'=>'/assets/seeder/featured-project-beepay-ilustration.png',
                'filter_invert'=>67,
                'filter_sepia'=>22,
                'filter_saturate'=>6592,
                'filter_hue_rotate'=>357,
                'filter_brightness'=>93,
                'filter_contrast'=>113,
                'project_id'=>2
            ],
            [
                'position'=>3,
                'logo_file'=>'/assets/seeder/featured-project-mobilocal-logo.png',
                'ilustration_file'=>'/assets/seeder/featured-project-mobilocal-ilustration.png',
                'filter_invert'=>57,
                'filter_sepia'=>16,
                'filter_saturate'=>1581,
                'filter_hue_rotate'=>187,
                'filter_brightness'=>103,
                'filter_contrast'=>101,
                'project_id'=>3
            ]
        ];

        foreach ($featured_project as $key => $value) {
            FeaturedProject::create($value);
        }
    }
}
