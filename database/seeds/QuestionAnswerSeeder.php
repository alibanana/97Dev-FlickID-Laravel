<?php

use Illuminate\Database\Seeder;

use App\QuestionAnswer;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question_answer = [
            [
                'question_answer' => '0 years',
                'question_id' => 1,
            ],
            [
                'question_answer' => '1 - 3 years',
                'question_id' => 1,
            ],
            [
                'question_answer' => '4 - 6 years',
                'question_id' => 1,
            ],
            [
                'question_answer' => '7 - 10 years',
                'question_id' => 1,
            ],
            [
                'question_answer' => '10+ years',
                'question_id' => 1,
            ],
            [
                'question_answer' => 'IDR 6 - 10 mil',
                'question_id' => 2,
            ],
            [
                'question_answer' => 'IDR 11 - 18 mil',
                'question_id' => 2,
            ],
            [
                'question_answer' => 'IDR 19 - 25 mil',
                'question_id' => 2,
            ],
            [
                'question_answer' => 'IDR 36 - 45 mil',
                'question_id' => 2,
            ],
            [
                'question_answer' => 'IDR 45+ mil',
                'question_id' => 2,
            ]
        ];

        foreach ($question_answer as $key => $value) {
            QuestionAnswer::create($value);
        }
    }
}
