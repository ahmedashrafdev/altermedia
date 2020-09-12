<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
            ['featured' => true , 'name' => 'ثقافة' , 'slug' => 'ثقافة' , 'image' => 'https://image.freepik.com/free-photo/top-view-mexican-hat-salsa-sauce-tortilla-black-slate-red-chilies-wooden-bench_23-2148042474.jpg'],
            ['featured' => true , 'name' => 'فن' , 'slug' => 'فن' , 'image' => 'https://image.freepik.com/free-vector/paint-textures-background-design_1343-68.jpg'],
            ['featured' => true , 'name' => 'رياضة' , 'slug' => 'رياضة' , 'image' => 'https://image.freepik.com/free-photo/sportive-couple-dark-studio_23-2147752890.jpg'],
            ['featured' => true , 'name' => 'اخبار' , 'slug' => 'اخبار' , 'image' => 'https://image.freepik.com/free-photo/coffee-shop-cafe-latte-cappuccino-newspaper-brownie-concept_53876-16323.jpg'],
            ['featured' => true , 'name' => 'سينيما' , 'slug' => 'سينيما' , 'image' => 'https://image.freepik.com/free-photo/curled-filmstrip-isolated-white-background_23-2148188214.jpg'],

        ]);
    }
}
