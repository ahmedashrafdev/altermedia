<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            ['name' => 'سياسة'],
            ['name' => 'فن'],
            ['name' => 'ثقافة'],
            ['name' => 'تاريخ'],
            ['name' => 'ادب'],
            ['name' => 'شعر'],
            ['name' => 'تكنولوجيا'],
            ['name' => 'احمد_حمدي'],
            ['name' => 'تكريم'],
            ['name' => 'حفل'],
            ['name' => 'ندوة'],
            ['name' => 'منوعات'],
            ['name' => 'فيديو'],
            ['name' => 'كرة_قدم'],
            ['name' => 'قصة'],
            ['name' => 'مترجم'],
            ['name' => 'مهرجان'],
        ]);
    }
}
