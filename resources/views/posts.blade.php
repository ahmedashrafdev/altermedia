@extends('layouts.app')

@section('content')
@include('layouts.breadcrumbs' , ['name' => 'الموضوعات'])
<div class="articles-page">
    <div class="container">
        <div class="articles__wrapper">
            <div class="articles">
                
                @foreach($posts as $normalPost)
                    @include('partials.post' , ['normalPost' => $normalPost])
                @endforeach
                @if ($posts->hasPages())
                    {{ $posts->appends(request()->input())->links() }}
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