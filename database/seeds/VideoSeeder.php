<?php

use Illuminate\Database\Seeder;
use App\Video;
class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $videos = [
            [
                'name' => 'أسباب تراجع مستوى ريال مدريد في الليجا و دوري الأبطال',
                'image' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img/http://axilthemes.com/themes/papr/wp-content/uploads/2019/08/videos-05-400x400.jpg',
                'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/fPNI-ixoysE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'submain' => 1,
                'author_id' => 1,
            ],
            [
                'name' => 'أفلام أرخت حرب أكتوبر ١٩٧٣',
                'image' => 'https://images.unsplash.com/photo-1553531580-a0868f1263f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80',
                'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ecYrQmMIo58" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'submain' => 1,
                'author_id' => 2,
            ],
            [
                'name' => 'هدف رمضان صبحي',
                'image' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img/http://axilthemes.com/themes/papr/wp-content/uploads/2019/08/videos-03-400x400.jpg',
                'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/aQ-Fa6B1HO0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'submain' => 1,
                'author_id' => 3,
            ],
            [
                'name' => 'العالم العربي ـ هل يهدد الإعلام البديل مستقبل وسائل الاعلام التقليدية ',
                'image' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img/http://axilthemes.com/themes/papr/wp-content/uploads/2019/08/videos-02-400x400.jpg',
                'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rfOVekvdCRU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'submain' => 1,
                'author_id' => 4,
            ],

        ];
        foreach ($videos as $video) {
           Video::create([
            'name'  => $video['name'],
            'seo'  => $video['name'],
            'image'  => $video['image'],
            'link'  => $video['link'],
            'submain'  => $video['submain'],
            'author_id'  => $video['author_id'],
           ]);
        }
        Video::insert([
            [
                'name' => 'مؤسسة الاعلام البديل تكرم الكاتبه لمياء السعيد بعد حصولها علي جائزة يوسف زيدان',
                'image' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img/http://axilthemes.com/themes/papr/wp-content/uploads/2019/08/videos-01-1620x980.jpg',
                'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/NRV7OCq4dZY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'main' => 1,
                'author_id' => 4,
            ],
        ]);
    }
}
