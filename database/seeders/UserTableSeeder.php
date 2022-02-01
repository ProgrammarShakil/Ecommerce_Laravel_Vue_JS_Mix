<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->defaultUser();

        $faker = \Faker\Factory::create();

        foreach (range(1,20) as $index){
            User::create([
                "name" => $faker->name,
                "email" => $faker->unique()->email,
                "password" => bcrypt($faker->password)
            ]);
        }
    }

    public function defaultUser(){
        User::create([
            "name" => "admin",
            "email" => "blog@gmail.com",
            "password" => bcrypt("123456")
        ]);
    }
}
