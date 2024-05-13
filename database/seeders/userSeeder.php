<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=collect(
            [
                [
                  
                    "name"=>"Admin",
                    "email"=>"Admin@gmail.com",
                    "password"=>"admin1234"

                ],
                [
                   
                    "name"=>"User",
                    "email"=>"User@gmail.com",
                    "password"=>"user1234"

                ],
                [
                   
                    "name"=>"Faizan",
                    "email"=>"faizan@gmail.com",
                    "password"=>"faizan1234"

                ],
                [
                 
                    "name"=>"ali",
                    "email"=>"ali@gmail.com",
                    "password"=>"ali1234"

                ],
                [
                   
                    "name"=>"zohaib",
                    "email"=>"zohaib@gmail.com",
                    "password"=>"zohaib1234"

                ],
                [
                    
                    "name"=>"Waqas",
                    "email"=>"Waqas@gmail.com",
                    "password"=>"Waqas1234"

                ],
                [
                    
                    "name"=>"Noman",
                    "email"=>"Noman@gmail.com",
                    "password"=>"Noman1234"

                ]
                ]);
                $user->each(function($user){
                    User::insert($user);
                });
    }
}
