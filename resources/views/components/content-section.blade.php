@props([
    "type" => "right-section",
    "title",
    "span",
    "text",
    "button",
    "image",
    "capacity",
])

<section class="{{$type}}">
    <div class="container">
        <div class="box">
            <div class="index-image">
                <img src="{{asset($image)}}" alt="img">
            </div>
            <div class="heading">
                <div class="wrap">
                    <h4><span>{{$span}}</span> {{$title}}</h4>
                    <p><span>{{$capacity}}</span></p>
                    <p>{{$text}}</p>
                </div>
                <div class="btn">
                    <a href="{{ route('accommodation-detail') }}">{{$button}}</a>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </div>
</section>
