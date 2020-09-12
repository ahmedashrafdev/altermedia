<?php

use Illuminate\Database\Seeder;
use App\StaticHtml;
class StaticHtmlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        StaticHtml::create([
            "key" => 'about',
            "image" => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img/http://axilthemes.com/themes/axilnews/wp-content/uploads/2019/08/about-us.jpg',
            "value" => 'مؤسسه عمل إجتماعي ترحب بجميع الجهود و المشاركات الفردية والجماعية علي حد سواء ، وتعمل في مجال التنمية المجتمعية من خلال الثقافة واللإعلام فلا يخفي أحد من الراصدين المتخصصين ، أو من عموم المتابعين علي حد سواء تنامي دور وسائل الإتصال الحديثة في إحداث تأثير علي واقعنا اليومي ، و ظهور ما يسمي بالإعلام الجديد بأذرعخ و أدواته الحديثة …… ليطرح نفسه علي الساحة كإعلام بديل بروح عصر يتسم بالسرعة والحدة ولا يخلو من الصخب ومن هنا كنا …. ومن هنا كانت الإعلام البديل لتطرح المؤسسة نفسها كرقم في المعادلة الإعلامية من خلال إعداد جيل شاب من الإعلامين المهره ، المدربين علي الأدوات الإعلاميه الحديثة ….. وإطلاق نوافذ إعلاميه بروح هذا الجيل الشاب لتثري المناخ العام ،وتضيف إلي الإعلام المصرى وتعبر به إلي آفاق أخري من شأنها إيصال صوت مصر الشاب إلي الخارج و الداخل كذلك . الهيكل الإداري ',
        ]);
        StaticHtml::create([
            "key" => 'seo',
            "value" => 'صرح الناقد طارق الشناوي في أخر ندواته بدار الأوبرا المصرية والتي كانت قائمة في مضمونها على محاربة الإرهاب بالفن، '
        ]);
        StaticHtml::create([
            "key" => 'contact',
            "image" => 'https://cdn.shortpixel.ai/client/q_lossless,ret_img/http://axilthemes.com/themes/axilnews/wp-content/uploads/2019/08/contact-banner.jpg',
        ]);
        StaticHtml::create([
            "key" => 'address',
            "value" =>'١١شارع مختار سعيد- أرض الجولف- خلف الرقابة الإدارية- الدور الأول- مصر الجديدة'
        ]);
        StaticHtml::create([
            "key" => 'phone',
            "value" =>'(888) 456-2790',
        ]);
        StaticHtml::create([
            "key" => 'land_phone',
            "value" => '(121) 255-53333',
        ]);
        StaticHtml::create([
            "key" => 'email',
            "value" =>'example@domain.com',
        ]);
        StaticHtml::create([
            "key" => 'facebook',
            "value" =>'http://facebook.com/',
        ]);
        StaticHtml::create([
            "key" => 'twitter',
            "value" =>'https://twitter.com/',
        ]);
        StaticHtml::create([
            "key" => 'youtube',
            "value" =>'https://youtube.com/',
        ]);
        StaticHtml::create([
            "key" => 'linkedin',
            "value" =>'https://linkedin.com/',
        ]);
        
    }
}
