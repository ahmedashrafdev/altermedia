@extends('layouts.app')

@section('content')
@include('layouts.breadcrumbs' , ['name' => 'المؤلفين'])

<div class="authors-page">
   <div class="elementor-container">
       <div class="authors__wrapper">
            @include('partials.author')
            @include('partials.author')
            @include('partials.author')
            @include('partials.author')
       </div>
   </div>
</div>

@endsection