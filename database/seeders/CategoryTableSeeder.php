<?php

namespace Database\Seeders;

use App\Models\Catagory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,10) as $index){

            $faker = \Faker\Factory::create();

            $category = $faker->unique()->name();

            Category::create([
                "name" => $category,
                "slug" => str_replace(' ', '-', $category),
                "status" => rand(0,1),
            ]);
        }
    }


    //  public function slugify($text)
    // {
    //     // replace non letter or digits
    //     $text = preg_replace('~[^\pL\d]+~U', '-', $text);

    //     // transliterate
    //     $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);

    //     // remove unwanted charecters 
    //     $text = preg_replace('~[^\W]+~', '', $text);

    //     // triming
    //     $text = trim($text, '-');

    //     // remove duplicate 
    //     $text = preg_replace('~-+~', '-', $text);

    //     // lowerCase
    //     $text = strtolower($text);

    //     // if(empty($text)){
    //     //     return '';
    //     // }

    //     return $text;
    // }
}
