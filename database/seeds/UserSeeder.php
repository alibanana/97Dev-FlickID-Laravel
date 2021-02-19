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
        User::create([
            'name' => 'Admin Flick Software',
            'email' => 'official.alifio@gmail.com',
            'password' => bcrypt('7312081Alifio')
        ]);
    }
}
