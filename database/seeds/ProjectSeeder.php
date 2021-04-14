<?php

use Illuminate\Database\Seeder;

use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'ilustration_file'=>'assets/seeder/project-flick-ilustration.png',
                'logo_file'=>'assets/seeder/project-flick-logo.png',
                'title'=>'Flick',
                'description'=>'A financial technology company providing solutions to users and merchant.',
                'sub_description'=>'We have created e-money, peer-to-peer lending, remittance, e-commerce and point-of-sales systems.',
                'scope'=>"Design\r\nImplementation",
                'technologies'=>"Android Mobile\r\niOS Mobile\r\nWeb Console\r\nAWS Integration",
                'deliverables'=>"iOS and Android User App\r\nAdmin Web Console\r\nPayment Integration\r\nGeolocation & Tracking",
                'bg_file'=>'assets/seeder/project-flick-background.png',
                'headline'=>'Flick now has 150+ restaurant partners',
                'sub_headline'=>'We help business grow to their fullest potential through technology',
                'featured_ilustration_file'=>'assets/seeder/featured-project-flick-ilustration.png',
                'filter_invert'=>78,
                'filter_sepia'=>55,
                'filter_saturate'=>779,
                'filter_hue_rotate'=>357,
                'filter_brightness'=>95,
                'filter_contrast'=>106,
                'project_type_id'=>'1',
            ]
        ];

        foreach ($projects as $key => $value) {
            Project::create($value);
        }
    }
}
