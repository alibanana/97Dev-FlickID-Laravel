<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Developer 97',
                'email' => 'ninetyseven.dev@hotmail.com',
                'password' => bcrypt('Satusampai97')
            ],
            [
                'name' => 'Admin FlickID',
                'email' => 'cashitdeveloper@gmail.com',
                'password' => bcrypt('Satusampai8')
            ]
        ];
        
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
