<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1,100) as $index){
            Post::create([
                "user_id" => rand(1, 20),
                "category_id" => rand(1, 5),
                "title" => $faker->sentence,
                "content" => $faker->paragraph,
                "thumbnail" => $faker->imageUrl(),
                "status" => $this->getRandomStatus(),
            ]);
        }
    }
    public function getRandomStatus(){
        $status = array('draft', 'published');
        return $status[array_rand($status)];
    }
}
