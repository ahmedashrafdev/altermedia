@extends('layouts.app')

@section('content')
<div class="post-page">
    <section class="breadcrumbs">
        <div class="elementor-container">
            <ul>
                <li><a href="/">الرئيسية</a></li>
                <li><a href="/posts">مقالات</a></li>
                <li><a href="/posts">{{$post->category->name}}</a></li>
                <li>{{$post->title}}</li>
            </ul>
        </div>
    </section>

    <section class="post-image">
        <div class="elementor-container">
            <div class="post-image__wrapper">
                <div class="post-data">
                    <a href="" class="category">
                    <span class="category-label">{{$post->category->name}}</span>
                    </a>
                    <div class="post-title">
                    <h6><a href="/">{{$post->title}}</a></h6>
                    </div>
                    
                    <div class="post-meta">
                        <ul class="post-meta__list">
                            @isset($post->author)
                            <li>
                                <span>بواسطة</span>
                                <a href="/">
                                    <span class="author">{{$post->author->name}}</span>
                                </a>
                            </li>
                            @endisset
                            <li><i class="dot">.</i>{{$post->created_at}}</li>
                            {{-- <li>
                                <span class="views">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                                    321 مشاهدات
                                </span>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <figure class="post-image__img">
                <img src="{{$post->image}}" alt="{{$post->seo}}">
                </figure>
            </div>
        </div>

    </section>

    <section class="post-content">
        <div class="elementor-container">
            <div class="post-content__wrapper">
                <div class="post-content__content">
                        {!!$post->content!!} {!!$post->content!!} {!!$post->content!!} {!!$post->content!!} {!!$post->content!!}   
                    
                    {{-- @include('psot') --}}
                    <div class="post-ad">
                        <a href="http://savumoney.co"><img src="{{asset('storage/ad1.jpg')}}" alt=""></a>
                    </div>
                    <div class="post-bottom">
                        <div class="share">
                            <h2 class="share-title">
                                مشاركة
                            </h2>
                            <div class="social-links">
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
                        <hr>
                        {{-- @include('partials.comment') --}}
                        {{-- <hr> --}}
                    </div>
                    {{-- <div class="post-navigation">
                        <div class="prev">
                            <div class="control">
                                <a href="">السابق</a>
                            </div>
                            <div class="post-navigation-title">
                                <h6><a href="">ansd</a></h6>
                            </div>
                        </div>
                        <div class="next">
                            <div class="prev">
                                <div class="control">
                                    <a href="">السابق</a>
                                </div>
                                <div class="post-navigation-title">
                                    <h6><a href="">ansd</a></h6>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="contact__form">
                        <div class="title">
                            <h3>اترك تعليق</h3>
                        </div>
                        <form action="">
                            @csrf
                            <div class="input">
                                <textarea placeholder="التعليق"></textarea>
                            </div>
                            <div class="comment-form-wrapper">
                                <div class="input">
                                    <input type="text" placeholder="الاسم">
                                </div>
                                <div class="input">
                                    <input type="text" placeholder="البريد الالكتروني">
                                </div>
                            </div>
                            <div class="input">
                                <button type="submit">تعليق</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
                    @include('layouts.sidebar')
            </div>
            <section class="most">
                    <div class="elementor-container">
                        <div class="header">
                            <h2>مقالات ذات صلة</h2>
                        </div>
                        <div class="most__posts">
                            @foreach($related as $topPost)
                                @include('partials.topPost' , ['topPost' => $topPost])
                            @endforeach
                        </div>
                    </div>
                </section>

        </div>
    </section>
</div>

@endsection