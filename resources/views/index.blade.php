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
                    <a href="">rezervácia</a>
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
    <section class="accommodation">
        <div class="container">
            <div class="box">
                <div class="index-image">
                    <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                </div>
                <div class="heading">
                    <div class="wrap">
                        <h2>UBYTOVANIE</h2>
                        <p>
                            V našom penzióne máte k dispozícii ubytovanie v piatich apartmánoch s celkovou kapacitou
                            .......
                            osôb. Apartmány sú priestranné vybavené ........... a wifi. Názvy našich apartmánov sú
                            pomenované podľa okolitých kopcov: Liškova, Kýčerka, Hôrka, Grúnik a Tabla. Tešíme sa na
                            Vašu
                            návštevu.
                        </p>
                    </div>
                    <div class="btn">
                        <a href="">viac info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <section class="kitchen">
        <div class="container">
            <div class="box">
                <div class="heading">
                    <div class="wrap">
                        <h2>KUCHYŇA</h2>
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
                    </div>
                    <div class="btn">
                        <a href="">menu</a>
                    </div>
                </div>
                <div class="index-image">
                    <img src="{{asset('images/index/kitchen.jpg')}}" alt="food">
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>
    <section class="events">
        <div class="container">
            <div class="box">
                <div class="index-image">
                    <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                </div>
                <div class="heading">
                    <div class="wrap">
                        <h2>EVENTY</h2>
                        <p>
                            V našom penzióne máte k dispozícii ubytovanie v piatich apartmánoch s celkovou kapacitou
                            ....... osôb. Apartmány sú priestranné vybavené ........... a wifi. Názvy našich apartmánov
                            sú pomenované podľa okolitých kopcov: Liškova, Kýčerka, Hôrka, Grúnik a Tabla. Tešíme sa na
                            Vašu návštevu.
                        </p>
                    </div>
                    <div class="btn">
                        <a href="">viac info</a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>
    <section class="alpacas">
        <div class="container">
            <div class="box">
                <div class="heading">
                    <div class="wrap">
                        <h2>ALPAKY</h2>
                        <p>
                            V areály nášho penziónu chováme aj alpaky. Hana a Andy sú súčasťou našej rodiny. Deti
                            naše alpaky milujú a tak ako ubytovaní hostia, tak aj neubytovaní hostia majú možnosť
                            rezervácie programu s našimi alpakami. Či je to kŕmenie, starostlivosť o alpaky alebo
                            vychádzka do prírody, tak sme pripravení. Hana a Andy sa tešia na Vás.
                        </p>
                    </div>
                    <div class="btn">
                        <a href="">viac info</a>
                    </div>
                </div>
                <div class="index-image">
                    <img src="{{asset('images/index/alpacas.jpg')}}" alt="alpacas">
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>
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
