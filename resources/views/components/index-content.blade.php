@props([
    "type" => "right-section",
    "title",
    "text",
    "button",
    "image",
])

<section class="{{$type}}">
    <div class="container">
        <div class="box">
            <div class="index-image">
                <img src="{{ asset($image) }}" alt="img">
            </div>
            <div class="heading">
                <div class="wrap">
                    <h2>{{ $title }}</h2>
                    @if($title === 'KUCHYŇA')
                        <div class="text-wrap">
                            <div class="text">
                                <h5>RAŇAJKY (neubytovaní hostia)</h5>
                                <p>Raňajky podávame každý deň v čase 10:00 - 14:00 hod.</p>
                            </div>
                            <div class="text">
                                <h5>MENU (neubytovaní hostia)</h5>
                                <p>Štandardné menu podávame každý deň v čase 15:00 - 19:00 hod.</p>
                            </div>
                        </div>
                    @else
                        <p>{{ $text }}</p>
                    @endif
                </div>
                @if($button)
                    <div class="btn">
                        <a href="{{ route('accommodation') }}">{{ $button }}</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="line"></div>
    </div>
</section>
