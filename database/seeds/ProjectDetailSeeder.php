<?php

use Illuminate\Database\Seeder;

use App\ProjectDetail;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_details = [
            [
                'title'=>"FlickPay",
                'description'=>"We are responsible of Flick's financial ecosystem development, we developed e-Money to support money flow throughout the ecosystem.",
                'ilustration_file'=>"assets/seeder/project-detail-flick-flickpay-ilustration.png",
                'project_id'=>"1",
            ],
            [
                'title'=>"FlickSilvi",
                'description'=>"One of the most important feature for Flick’s financial ecosystem is FlickSilvi, it enables customers to order and pay through QR Code on restaurant’s table. We developed the ordering and payment system, and monitoring app on merchant’s side.",
                'ilustration_file'=>"assets/seeder/project-detail-flick-flicksilvi-ilustration.png",
                'project_id'=>"1",
            ]
        ];

        foreach ($project_details as $key => $value) {
            ProjectDetail::create($value);
        }
    }
}
