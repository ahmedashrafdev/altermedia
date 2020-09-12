<div class="post">
    <figure class="post-img mw150">
        <a href="{{route('article' , $normalArticle->slug)}}" title="{{$normalArticle->seo}}">
            <img src="{{$normalArticle->author->image}}" alt="{{$normalArticle->seo}}">
        </a>
    </figure>
    <div>
        <a href="{{route('article' , $normalArticle->slug)}}" title="{{$normalArticle->seo}}" class="category">
            <span class="category-label">{{$normalArticle->author->name}}</span>
        </a>
        <div class="post-title">
            <h6><a href="{{route('article' , $normalArticle->slug)}}">{{$normalArticle->title}}</a></h6>
        </div>
        @if($normalArticle->small_description)
            <div class="post-description">
                <p>{{ $normalArticle->small_description }}</p>
            </div>
        @endif
        <div class="post-meta">
            <ul class="post-meta__list">
            {{-- <li><i class="dot">.</i>{{$normalArticle->created_at}}</li> --}}
            </ul>
        </div>
    </div>
</div>