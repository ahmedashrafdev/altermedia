<div class="breadcrumbs">
    <div class="elementor-container">
        <ul>
            <li><a href="/">الرئيسية</a></li>
            @isset($path)
                @foreach($path as $item)
                    <li><a href="{{$item['link']}}">{{$item['name']}}</li>
                @endforeach
            @endisset
                <li>{{$name}}</li>
        </ul>
    </div>
</div>
<div class="page-title">
    <div class="elementor-container">
        <h1>{{$name}}</h1> 
    </div>
</div>