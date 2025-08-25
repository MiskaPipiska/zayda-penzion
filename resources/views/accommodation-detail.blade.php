@extends('layout.base')

@section('content')
    <section class="hero">
        <div class="bg left"></div>
        <div class="bg top"></div>
        <div class="container">
            <div class="hero-content">
                <h1>APARTMÁN LIŠKOVA</h1>
                <ul>
                    <li>KAPACITA: 4 OSOBY</li>
                    <li>MANŽELSKÁ POSTEĽ: 1</li>
                    <li>PRÍSTELKA: 2</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="reservation">
        <div class="container">
            <div class="box">
                <div class="item">
                    <h5>REZERVÁCIA</h5>
                    <p>Pre rezerváciu izby prosím kontaktujte našu recepciu telefonicky, e-mailom alebo prostredníctvom
                        formulára na našej webovej stránke</p>
                    <h5>INFORMÁCIE</h5>
                    <p>Príplatok za raňajky je 8€ / osoba. Raňajky sa podávajú v čase 7:00 - 09:00 hod. </p>
                    <div class="price">
                        <span>45€</span>
                        <small>cena za noc (osoba) l 18€/osoba (2 a viac nocí)</small>
                        <div class="btn">
                            <a href="">rezervovať</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="index-image">
                        <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hotel-images">
        <div class="container">
            <div class="box">
                <div class="item">
                    <div class="index-image">
                        <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                    </div>
                    <div class="index-image">
                        <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                    </div>
                </div>
                <div class="item">
                    <div class="index-image">
                        <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                    </div>
                </div>
                <div class="item">
                    <div class="index-image">
                        <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                    </div>
                    <div class="index-image">
                        <img src="{{asset('images/index/hotel-room.jpg')}}" alt="room">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
