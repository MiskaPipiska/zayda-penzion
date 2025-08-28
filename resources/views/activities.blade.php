@extends('layout.base')

@section('content')
    <section class="hero activities">
        <div class="bg left"></div>
        <div class="bg top"></div>
        <div class="container">
            <div class="hero-content">
                <h1>AKTIVITY V NAŠOM OKOLÍ</h1>
                <p>Penzión ZAYDA je unikátny projekt v malej dedinke Výrava. Toto miesto pokoja a relaxu sa nachádza v
                    srdci Nízkych Beskydách. Kvalitné služby, ubytovanie, skvelé jedlo, naše alpaky a nádherná príroda v
                    okolí sú skvelým prostriedkom pre skutočný relax. </p>
            </div>
        </div>
    </section>
    <section class="activity">
        <div class="container">
            <div class="box">
                @foreach($activityBox as $item)
                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <img src="{{asset($item['img'])}}" alt="img">
                            </div>
                            <h4>{{$item['title']}}</h4>
                        </div>
                        <div class="wrap">
                            <p>{{$item['text']}}</p>
                            <div class="btn">
                                <a href="">{{$item['button']}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="links">
                <p>Zdroje</p>
                <p>www.kamnavylet.sk</p>
                <p>www.hornyzemplin.sk</p>
            </div>
        </div>
    </section>
@endsection
