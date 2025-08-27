@extends('layout.base')

@section('content')
    <section class="hero">
        <div class="bg left"></div>
        <div class="bg top"></div>
        <div class="container">
            <div class="hero-content">
                <h1>PENZIÓN ZAYDA</h1>
                <p>Penzión ZAYDA je unikátny projekt v malej dedinke Výrava. Toto miesto pokoja a relaxu sa nachádza v
                    srdci Nízkych Beskydách. Kvalitné služby, ubytovanie, skvelé jedlo, naše alpaky a nádherná príroda v
                    okolí sú skvelým prostriedkom pre skutočný relax. </p>
                <div class="btn">
                    <a href="{{ route('reservation-form') }}">rezervácia</a>
                </div>
            </div>
        </div>
    </section>
    <section class="menu-boxes">
        <div class="container">
            <div class="box">
                @foreach($boxItems as $item)
                    <div class="item">
                        <div class="icon">
                            <img src="{{asset($item['img'])}}" alt="img">
                        </div>
                        <h6>{!! $item['text'] !!}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @foreach($IndexContent as $index => $item)
        <x-index-content
            :type="$item['type']"
            :title="$item['title']"
            :text="$item['text']"
            :image="$item['image']"
            :button="$item['button']"
        />
    @endforeach
    <section class="apartments">
        <div class="container">
            <div class="box">
                @foreach($apartmentMenu as $item)
                    <div class="item">
                        <div class="hotel">
                            <img src="{{asset($item['img'])}}" alt="img">
                        </div>
                        <h3>{{$item['title']}}</h3>
                        <ul>
                            <li>{{$item['capacity']}}</li>
                            <li>{{$item['floor']}}</li>
                            <li>{{$item['night']}}</li>
                            <li>{{$item['wifi']}}</li>
                        </ul>
                        <div class="btn">
                            <a href="">{{$item['button']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="image-slider">
                @foreach($sliderImages as $item)
                    <div class="img-wrap">
                        <img src="{{asset($item['img'])}}" alt="img">
                    </div>
                @endforeach
            </div>
            <div class="slider-arrow arrow-left">
                <img src="{{asset('images/index/arrow-left.svg')}}" alt="arrow">
            </div>
            <div class="slider-arrow arrow-right">
                <img src="{{asset('images/index/arrow-right.svg')}}" alt="arrow">
            </div>
            <div class="shadow left"></div>
            <div class="shadow right"></div>
        </div>
    </section>
@endsection
