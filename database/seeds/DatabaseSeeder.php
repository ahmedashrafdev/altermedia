<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StaticHtmlSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AdSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TagSeeder::class);
    }
}
