@extends('layout.base')

@section('content')
    <section class="hero">
        <div class="hero-img">
            <div class="bg left"></div>
            <div class="bg top"></div>
            <img src="{{asset('images/index/penzion.jpg')}}" alt="hero-img">
        </div>
        <div class="container">
            <div class="title">
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
            <div class="item">
                <div class="logo">
                    <img src="{{asset('images/index/logo-apartment.svg')}}" alt="logo">
                </div>
            </div>
        </div>
    </section>
@endsection
