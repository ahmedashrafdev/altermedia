<div class="top-header">
    <div class="container">
        <div class="wrapper">
        <div class="links">
            <ul class="date">
            <li class="current-date">{{Carbon\Carbon::parse(now())->toFormattedDateString()}} </li>
            </ul>
            <ul class="links__list">
            <li><a href="#">للاعلان</a></li>
            <li><a href="">عن المؤسسة</a></li>
            <li><a href="">اتصل بنا</a></li>
            </ul>
        </div>
        <div class="icons">
            <ul>
                <li><a
                    target="_blank"
                    href="{{App\StaticHtml::where('key' , 'facebook')->first()->value}}"
                    ><i class="fab fa-facebook-f"></i></a></li>
                <li><a
                    target="_blank"
                    href="{{App\StaticHtml::where('key' , 'twitter')->first()->value}}"
                    ><i class="fab fa-twitter"></i></a></li>
                <li><a
                    target="_blank"
                    href="{{App\StaticHtml::where('key' , 'linkedin')->first()->value}}"
                    ><i class="fab fa-linkedin-in"></i></a></li>
                <li><a
                    target="_blank"
                    href="{{App\StaticHtml::where('key' , 'youtube')->first()->value}}"
                    ><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        </div>
        
    </div>
    
</div>
<div>

    <div class="container">
    <div class="top-ad">
            <div class="logo">
        
            </div>
            <div class="ad">
                <img src="http://axilthemes.com/themes/papr/wp-content/uploads/2019/07/clientbanner1.jpg" alt="">
            </div>
    
        </div>
    </div>
</div>