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
    <x-images-box
        :images="$imagesBox"
    />
@endsection
