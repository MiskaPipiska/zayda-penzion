@props([
    "type" => "right-section",
    "title",
    "text",
    "button",
    "image",
    "capacity",
    "gap" => "",
    "col" => "",
])

<section class="{{$type}}">
    <div class="container">
        <div class="box">
            <div class="index-image">
                <img src="{{asset($image)}}" alt="img">
            </div>
            <div class="heading">
                <div class="wrap">
                    <h2 class="{{$gap}}">{!! nl2br(e($title)) !!}</h2>
                    <p><span>{{$capacity}}</span></p>
                    <p class="{{$col}}">{{$text}}</p>
                </div>
                <div class="btn">
                    <a href="{{ route('accommodation-detail') }}">{{$button}}</a>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </div>
</section>
