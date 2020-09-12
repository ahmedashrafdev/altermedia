@extends('layouts.app')
@section('content')
@include('layouts.breadcrumbs' , [ 'name' => 'من نحن' ] )
<div class="about page-content">
    <div class="elementor-container">
        <div class="about__img">
        <img src="{{App\StaticHtml::where('key' , 'about')->first()->image}}" alt="صورة لفريق العمل">
        </div>
        <div class="about__content">
            <div class="text">
                <div class="title">
                   <h2> نبذة عن المؤسسة</h2>
                </div>
                <div class="description">
                    <p>
                      {{App\StaticHtml::where('key' , 'about')->first()->value}}
                    </p>
                </div>
            </div>
            <div class="sidebar">

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
                <div class="tags__wrapper">
                    <div class="categories__title">
                        <h3>الاوسمة</h3>
                    </div>
                
                    <div class="tags">    
                        @foreach(App\Tag::all() as $tag)
                            <a href="/">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    let item = document.querySelector('.nav-about');
    item.classList.add('active')
</script>
@endpush