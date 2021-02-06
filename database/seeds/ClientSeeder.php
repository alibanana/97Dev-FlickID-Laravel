<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $status_list = ['Pending', 'Rejected', 'Accepted', 'Finished'];
        $description_list = [
            'I want to build an app that travels through time!',
            'I want to build a website for my company',
            'I want to build an android app to support my restaurant business.',
            'Can you guys build a simple portfolio website to store all my digital art works?',
            'I have a design already for a simple food ordering app for my restaurant. I would like you guys to make it.',
            "I would like a full redesign of my company's website.",
        ];
        
        foreach ($status_list as $status) { 
            $count = rand(1, 7);
            for ($i=0; $i <= $count; $i++) {
                $firstname = $faker->firstname; $lastname = $faker->lastname;
                Client::create([
                    'name'=>$firstname.' '.$lastname,
                    'company'=>$faker->company,
                    'phone'=>$faker->e164PhoneNumber,
                    'email'=>strtolower($firstname).'.'.strtolower($lastname).'@example.com',
                    'description'=>$description_list[rand(0, 5)],
                    'status'=>$status
                ]);
            }
        }
    }
}
