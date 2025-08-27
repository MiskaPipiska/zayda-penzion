@extends('layout.base')

@section('content')
    <section class="reservation-form">
        <div class="container">
            <h4>REZERVAČNÝ FORMULÁR</h4>
            <form class="contact-form">
                <div class="input-wrap top">
                    <div class="item">
                        <div class="wrap">
                            <label for="adults">dospelí *</label>
                            <input type="number" name="adults" id="adults" placeholder="0" min="0">
                        </div>
                        <div class="wrap">
                            <label for="children">deti *</label>
                            <input type="number" name="children" id="children" placeholder="0" min="0">
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap">
                            <label for="apartment">apartmán *</label>
                            <select id="apartment-select" name="pavilion" required>
                                <option value="" disabled selected hidden>Lyškova</option>
                                <option value="a">Lyškova</option>
                                <option value="b">Kýčerka</option>
                                <option value="c">Hôrka</option>
                                <option value="d">Tabla</option>
                                <option value="e">Grúnik</option>
                            </select>
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
