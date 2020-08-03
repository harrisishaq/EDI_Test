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
        $user = [
            [
               'email'=>'admin@email.com',
               'password'=> bcrypt('123456'),
               'is_admin'=>'1',
            ],
            [
               'email'=>'user@email.com',
               'password'=> bcrypt('123456'),
               'is_admin'=>'0',
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
