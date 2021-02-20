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
                'name' => 'Alifio Rasyid',
                'email' => 'official.alifio@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Fernandha Dzaky',
                'email' => 'fernandhadzaky@hotmail.com',
                'password' => bcrypt('password')
            ]
        ];
        
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
