@extends('layout.base')

@section('content')
    <section class="price-list">
        <div class="container">
            <h4>CENNÍK</h4>
            <div class="box">
                <div class="item">
                    @foreach($PriceItems as $item)
                        <div class="text">
                            <h5>{{$item['title']}}</h5>
                            <ul>
                                @foreach($item["tags"] as $tag)
                                    <li>{{ $tag }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                    <p>raňajky + 8€ / osoba</p>
                </div>
                <div class="item">
                    <h5>ALPAKY (vhodné pre rodiny s deťmi) od 15€ / hod.</h5>
                    <ul>
                        <li>starostlivosť o alpaky </li>
                        <li>prechádzka s alpakou 30 min</li>
                        <li>kŕmenie alpák</li>
                    </ul>
                    <div class="text-wrap">
                        <p>Výsledná cena je počítaná podľa počtu osôb a celkového času.</p>
                        <p>Akceptujeme platby kartou.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hotel-images">
        <div class="container">
            <div class="imagesBox">
                <div class="img img1"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
                <div class="img img2"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
                <div class="img img3"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
                <div class="img img4"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
                <div class="img img5"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
                <div class="img img6"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
                <div class="img img7"><img src="{{asset('images/index/hotel-room.jpg')}}" alt=""></div>
            </div>
        </div>
    </section>
@endsection
