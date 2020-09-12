@extends('layouts.app')

@section('content')
@include('layouts.breadcrumbs' , ['name' => 'المقالات'])
<div class="articles-page">
    <div class="container">
        <div class="articles__wrapper">
            <div class="articles">
                
                
                <div class="grid-articles-sec">
                    @foreach($articles as $hnormalArticle)
                         @include('partials.hauthorArticle' , ['hnormalArticle' , $hnormalArticle])
                     @endforeach
                </div>
                @if ($articles->hasPages())
                    {{ $articles->appends(request()->input())->links() }}
                @endif
                
                <div class="ad">
                    <a href="{{$ad->link}}"><img src="{{$ad->value}}" alt=""></a>
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
</div>


@endsection