<?php

use Illuminate\Database\Seeder;

use App\QuestionType;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question_types = [
            [
                'type' => 'Multiple-Choice'
            ],
            [
                'type' => 'Slider'
            ],
            [
                'type' => 'Open-Ended'
            ]
        ];

        foreach ($question_types as $key => $value) {
            QuestionType::create($value);
        }
    }
}
