<div class="post" style="grid-template-columns: 1fr !important;">
    <figure class="post-img"  style="max-width: 100% !important">
        <a href="{{route('article' , $hnormalArticle->slug)}}" title="{{$hnormalArticle->seo}}">
            <img src="{{$hnormalArticle->author->image}}" alt="{{$hnormalArticle->seo}}">
        </a>
    </figure>
    <div>
        <a href="{{route('article' , $hnormalArticle->slug)}}" title="{{$hnormalArticle->seo}}" class="category">
            <span class="category-label">{{$hnormalArticle->author->name}}</span>
        </a>
        <div class="post-title"  style="overflow: hidden; height:36px">
            <h6 style=" font-size:16px"><a href="{{route('article' , $hnormalArticle->slug)}}">{{$hnormalArticle->title}}</a></h6>
        </div>
        {{-- @if($hnormalArticle->small_description)
            <div class="post-description">
                <p>{{ $hnormalArticle->small_description }}</p>
            </div>
        @endif --}}
        <div class="post-meta">
            <ul class="post-meta__list">
            {{-- <li><i class="dot">.</i>{{$hnormalArticle->created_at}}</li> --}}
            </ul>
        </div>
    </div>
</div>