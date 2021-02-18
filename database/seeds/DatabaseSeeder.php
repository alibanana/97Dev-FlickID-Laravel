<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProjectTypeSeeder::class,
            ProjectSeeder::class,
            ProjectDetailSeeder::class,
            FeaturedProjectSeeder::class,
            ClientSeeder::class,
            JobSeeder::class,
            TeamMemberSeeder::class,
            QuestionTypeSeeder::class,
            QuestionSeeder::class,
            QuestionAnswerSeeder::class,
            ApplicantSeeder::class
        ]);
    }
}
