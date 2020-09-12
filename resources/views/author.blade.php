@extends('layouts.app')

@section('content')
<section class="breadcrumbs">
    <div class="elementor-container">
        <ul>
            <li><a href="/">الرئيسية</a></li>
            <li><a href="/">الكتاب</a></li>
            <li>عمرو العزالي</li>
        </ul>
    </div>
</section>
<section class="info">
    <div class="elementor-container">
        <div class="info__wrapper">
            <div class="author-info">
                <figure class="author-img">
                    <img src="http://0.gravatar.com/avatar/048eb53619909f210b8dc6c51f07b884?s=210&d=mm&r=g" alt="">
                </figure>
                <div class="author-d">
                    <h1>عمرو العزالي</h1>
                    <p class="description">وقد أعرب سمير قسيمي صاحب رواية “سلالم ترولار” المرشحة للجائزة العالمية للرواية العربية لهذا العام (البوكر)، عن سعادته الكبيرة بوجود الرواية ضمن قائمة الترشيح للجائزة المرموقة، وقال “إن من شأن ذلك رفع من معنويات الكاتب، وبخاصة أنه يدفع العمل، وربما الأعمال السابقة للكاتب إلى ساحة مقروئية أكثر اتساعا من تلك التي اعتاد عليها. </p>
                    <div class="author-meta">
                        <ul>
                          <li><i class="fas fa-user-edit"></i>مجموع المقالات (128)</li>
                        </ul>
                    </div>
                    <div class="icons mob">
                        <ul>
                            <li><a
                                target="_blank"
                                href="#"
                            ><i class="fab fa-facebook-f"></i></a></li>
                            <li><a
                                target="_blank"
                                href="#"
                            ><i class="fab fa-twitter"></i></a></li>
                            <li><a
                                target="_blank"
                                href="#"
                            ><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a
                                target="_blank"
                                href="#"
                            ><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="icons">
                <ul>
                  <li><a
                      target="_blank"
                      href="#"
                    ><i class="fab fa-facebook-f"></i></a></li>
                  <li><a
                      target="_blank"
                      href="#"
                    ><i class="fab fa-twitter"></i></a></li>
                  <li><a
                      target="_blank"
                      href="#"
                    ><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a
                      target="_blank"
                      href="#"
                    ><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="elementor-container">
        <div class="popular__wrapper">
            <div class="popular__posts">
                <div class="ad">
                    <h2>مقالات الكاتب</h2>
                </div>
                @include('partials.post')
                @include('partials.post')
                @include('partials.post')
                @include('partials.post')
                @include('partials.post')
                @include('partials.post')
                @include('partials.post')
                
            </div>
            @include('layouts.sidebar')
        </div>   
    </div>
</section>

@endsection