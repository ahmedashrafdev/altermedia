<?php

use Illuminate\Database\Seeder;
use App\Ad;
class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ad::insert([
            ['key' => 'top_home' , 'value' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_728,h_90/http://axilthemes.com/themes/papr/wp-content/uploads/2019/07/clientbanner1.jpg' , 'link' => "/" ],
            ['key' => 'post' , 'value' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_728,h_90/http://axilthemes.com/themes/papr/wp-content/uploads/2019/07/clientbanner1.jpg' , 'link' => "/" ],
            ['key' => 'article' , 'value' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_728,h_90/http://axilthemes.com/themes/papr/wp-content/uploads/2019/07/clientbanner1.jpg' , 'link' => "/" ],
            ['key' => 'sidebar' , 'value' => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_390,h_350/http://axilthemes.com/themes/papr/wp-content/uploads/2019/08/clientbanner2.jpg' , 'link' => "/" ],
        ]);
    }
}
