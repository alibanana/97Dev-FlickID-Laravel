<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Job;
use App\Question;
use App\Applicant;
use App\ApplicantAnswer;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $status_list = ['Pending', 'Rejected', 'Accepted'];
        $offerable_jobs = Job::select('id')->where('offerable', 1)->get()->toArray();
        $questions = Question::all();

        foreach ($status_list as $status) { 
            $count = rand(1, 7);
            for ($i = 0; $i <= $count; $i++) {
                $firstname = $faker->firstname; $lastname = $faker->lastname;
                $applicant = Applicant::create([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => strtolower($firstname).'.'.strtolower($lastname).'@example.com',
                    'phone' => $faker->e164PhoneNumber,
                    'address' => $faker->address,
                    'cv_file' => '/assets/seeder/applicant-cv.pdf',
                    'status' => $status,
                    'job_id' => $offerable_jobs[rand(0, count($offerable_jobs)-1)]['id'],
                ]);
                foreach ($questions as $question) {
                    if ($question->question_type->type == 'Multiple-Choice') {
                        $applicant_answer = ApplicantAnswer::create([
                            'answer' => $question->question_answers[rand(0, count($question->question_answers)-1)]->question_answer,
                            'question_id' => $question->id,
                            'applicant_id' => $applicant->id
                        ]);
                    } else if ($question->question_type->type == 'Slider') {
                        $applicant_answer = ApplicantAnswer::create([
                            'answer' => rand($question->question_answers[0]->question_answer, $question->question_answers[1]->question_answer),
                            'question_id' => $question->id,
                            'applicant_id' => $applicant->id
                        ]);
                    } else {
                        $applicant_answer = ApplicantAnswer::create([
                            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et ullamcorper augue, ac eget.',
                            'question_id' => $question->id,
                            'applicant_id' => $applicant->id
                        ]);
                    }
                }
            }
        }
    }
}
