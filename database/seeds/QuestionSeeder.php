<?php

use Illuminate\Database\Seeder;

use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'How long have you been working in the related field?',
                'question_type_id' => '1'
            ],
            [
                'question' => 'How long have you been working in the related field?',
                'question_type_id' => '2'
            ],
            [
                'question' => 'How long have you been working in the related field?',
                'question_type_id' => '3'
            ]
        ];

        foreach ($questions as $key => $value) {
            Question::create($value);
        }
    }
}
