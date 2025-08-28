@extends('layout.base')

@section('content')
    <section class="hero events">
        <div class="bg left"></div>
        <div class="bg top"></div>
        <div class="container">
            <div class="hero-content">
                <h1>EVENTY A RODINNÉ OSLAVY</h1>
                <p>Penzión ZAYDA je unikátny projekt v malej dedinke Výrava. Toto miesto pokoja a relaxu sa nachádza v
                    srdci Nízkych Beskydách. Kvalitné služby, ubytovanie, skvelé jedlo, naše alpaky a nádherná príroda v
                    okolí sú skvelým prostriedkom pre skutočný relax. </p>
            </div>
        </div>
    </section>
    <section class="demand-form">
        <div class="container">
            <h4>DOPYTOVÝ FORMULÁR</h4>
            <div class="text-wrap">
                <p>Penzión ZAYDA je unikátny projekt v malej dedinke Výrava. Toto miesto pokoja a relaxu sa nachádza v srdci
                    Nízkych Beskydách. Kvalitné služby, ubytovanie, skvelé jedlo, naše alpaky a nádherná príroda v okolí sú
                    skvelým prostriedkom pre skutočný relax. </p>
            </div>
            <form class="contact-form">
                <div class="input-wrap top">
                    <div class="item">
                        <div class="wrap">
                            <label for="guests">počet hostí * (max. 20) *</label>
                            <input type="number" name="guests" id="guests" placeholder="0" min="0">
                        </div>
                        <div class="wrap">
                            <label for="party-type">typ oslavy</label>
                            <input type="text" name="party-type" id="party-type">
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <label for="accommodated-guests">počet ubytovaných hostí * (max. 20)</label>
                            <input type="text" name="accommodated-guests" id="accommodated-guests" placeholder="0"
                                   min="0">
                        </div>
                    </div>
                </div>
                <div class="input-wrap top">
                    <div class="wrap">
                        <label for="dateFrom">termín od *</label>
                        <input type="date" name="dateFrom" id="dateFrom" class="custom-date"
                               min="{{date("Y-m-d")}}" required>
                    </div>
                    <div class="wrap">
                        <label for="dateTo">termín do *</label>
                        <input type="date" name="dateTo" id="dateTo" class="custom-date"
                               min="{{date("Y-m-d")}}" required>
                    </div>
                </div>
                <div class="input-wrap">
                    <label for="name">meno a priezvisko *</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-wrap top">
                    <div class="wrap">
                        <label for="email">e-mail *</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="wrap">
                        <label for="tel">tel. číslo *</label>
                        <input type="tel" name="tel" id="tel">
                    </div>
                </div>
                <div class="input-wrap">
                    <label for="contactMessage">poznámka</label>
                    <textarea name="contactMessage" id="contactMessage" cols="30" rows="10"></textarea>
                </div>
                <div class="checkbox-wrap">
                    <div class="gdpr-container">
                        <input type="checkbox" id="gdpr" class="gdpr-checkbox">
                        <label for="gdpr">súhlasím so spracovaním osobných údajov </label>
                    </div>
                </div>
                <div class="btn">
                    <a href="">odoslať</a>
                </div>
            </form>
        </div>
    </section>
@endsection
