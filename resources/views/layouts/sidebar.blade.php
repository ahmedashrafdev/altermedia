@php 
$ad  = App\Ad::where('key' , 'sidebar')->first();
$articles = App\Article::where('featured' , true)->orderBy('order')->take(6)->get();
$categories = App\Category::all();
$sidbarRcents = App\Post::where('recent' , true)->orderBy('order')->take(6)->get();
$sidbarMosts = App\Post::where('most' , true)->orderBy('order')->take(6)->get();
//dd($ad);
//dd($articles);

@endphp

<div class="sidebar" id="sidebar">
    <div class="banner">
        <a href="http://savumoney.co"><img src="{{asset('storage/ad2.jpg')}}" alt=""></a>
    </div>
    <div class="ceo">
        <figure class="sidebar-author-img">
            <img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_390,h_390/http://axilthemes.com/themes/papr/wp-content/uploads/2019/08/team-5.jpg" alt="">
        </figure>
        <div class="sidebar-author">
            <div class="sidebar-author-data">
                    <h3><a href="/author"><strong>بقلم : </strong>احمد حمدي</a></h3>
                    <span><a href="/post">دراسة: العمل ليلاً يؤدي إلى الوفاة</a></span>
            </div>
        </div>
        <p class="description">صرح الناقد طارق الشناوي في أخر ندواته بدار الأوبرا المصرية والتي كانت قائمة في مضمونها على محاربة الإرهاب بالفن، </p>
    </div>
    {{-- <div class="categories">
        <div class="categories__title">
            <h3>الاقسام</h3>
            <div class="controllers">
                <span class="prev">
                    <i class="fa fa-angle-right"></i>
                </span>
                <span class="next">
                    <i class="fa fa-angle-left"></i>
                </span>
            </div>
        </div>
        <div class="categories__slides">
            @foreach($categories as $category)
                <div class="category">
                    <a
                    href="{{ route('posts', ['category'=>$category->slug]) }}"
                    class="category-inner"
                style="background-image: url({{$category->image}})"
                    >
                    <div class="overlay">
                        <div class="category__content">
                            <div class="counter"><span>{{count($category->posts)}}</span></div>
                            <h4 class="cat-title">{{$category->name}}</h4>
                        </div>
                    </div>
                        <!-- End of .counter-wrapper -->
                    </a>
                </div>
            @endforeach
        </div>
    </div> --}}

    {{-- <div class="newsletter">
        <div class="newsletter__icon">
            <i class="far fa-paper-plane"></i>
        </div>
        <div class="newsletter__header">
            <h6>تابع اخبارنا الاسبوعية</h6>
        </div>
        <div class="newsletter__content">
            <p>ادخل بريدك الالكتروني لكي يصلك اهم الاخبار </p>
        </div>
        <div class="newsletter__form">
            <div class="input">
                <input type="text" placeholder="ادخل بريدك الالكتروني">
            </div>
            <div class="input">
                <button type="submit">متابعة</button>
            </div>
        </div>
    </div> --}}
    
    {{-- <div class="social-links">
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
    </div> --}}
    {{-- <div class="tags__wrapper">
        <div class="categories__title">
            <h3>الاوسمة</h3>
        </div>
    
        <div class="tags">    
            @foreach(App\Tag::all() as $tag)
                <a href="/">{{$tag->name}}</a>
            @endforeach
        </div>
    </div> --}}
</div>