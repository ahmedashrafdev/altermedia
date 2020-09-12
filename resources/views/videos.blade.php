@extends('layouts.app')

@section('content')
@include('layouts.breadcrumbs' , ['name' => 'الفيديوهات'])
<div class="articles-page">
    <div class="container">
        <div class="articles__wrapper">
            <div class="videos articles">
                @foreach ($videos as $video)
                    @include('partials.video' , ['video' => $video])
                @endforeach
                <div class="ad">
                    <img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_728,h_90/http://axilthemes.com/themes/papr/wp-content/uploads/2019/07/clientbanner1.jpg" alt="">
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
</div>


@endsection