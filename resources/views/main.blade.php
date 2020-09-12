@extends('layouts.app')

@section('content')
    <section class="recently">
        <div class="elementor-container">
            <div class="recently__wrapper">
                <div class="main-post">
                    @include('partials.mainPost' , ['mainPost' => $mainPost])
                </div>
                <div class="submain-posts">
                    <div class="header">
                        <h2>اضاف حديثا</h2>
                        <a href="/">عرض الجميع</a>
                    </div>
                    @foreach ($recents as $normalPost)
                        @include('partials.post' , ['normalPost' => $normalPost])
                    @endforeach
                    

                </div>
            </div>
        </div>
    </section>
    <section class="videos">
        <div class="elementor-container">
            <div class="header">
                <h2>مقاطع الفيديو</h2>
                <a href="/">عرض الجميع</a>
            </div>

            <div class="videos__wrapper">

                @include('partials.mainVideo' , ['mainVideo' => $mainVideo])
                @foreach ($videos as $video)
                    @include('partials.video'  , ['video' => $video])
                @endforeach
            </div>

        </div>
    </section> 
    
    {{-- <section class="trending">
        <div class="elementor-container">
            <div class="header">
                <h2>اخترنا لك</h2>
                <a href="/">عرض الجميع</a>
            </div>
            <div class="trending__posts">
                @foreach ($trending as $normalPost)
                    @include('partials.post' , ['normalPost' => $normalPost])
                @endforeach
            </div>
        </div>
    </section> --}}
    <section class="popular">
        <div class="elementor-container">
            <div class="popular__wrapper">
                <div class="popular__posts">
                    <div class="ad">
                        <a href="{{$ad->link}}"><img src="{{$ad->value}}" alt=""></a>
                    </div>
                    <div class="grid-articles-sec">
                        @foreach($articles as $hnormalArticle)
                             @include('partials.hauthorArticle' , ['hnormalArticle' , $hnormalArticle])
                         @endforeach
                        {{-- @foreach ($featured as $hPost)
                            @include('partials.hpost' , ['normalPost' => $hPost])
                        @endforeach --}}
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>   
        </div>
    </section>
    <section class="top">
        <div class="elementor-container">
            <div class="header">
                <h2>الاكثر مشاهدة</h2>
                <a href="/">عرض الجميع</a>
            </div>
            <div class="top__posts">
                @foreach ($tops as $topPost)
                    @include('partials.topPost' , ['topPost' => $topPost])
                @endforeach
            </div>
        </div>
    </section>
  
    <section class="most">
        <div class="elementor-container">
            <div class="header">
                <h2>موضوعات</h2>
                <a href="/">عرض الجميع</a>
            </div>
            <div class="most__posts">
                @foreach ($mosts as $topPost)
                    @include('partials.topPost' , ['topPost' => $topPost])
                @endforeach

            </div>
        </div>
    </section>
@endsection