<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webgang\Dfa\Models\Entry;
use Webgang\Dfa\Services\EntryNormalizer;

class MainController extends Controller
{
    public function getIndex()
    {
        $boxItems = [
            [
                'img' => 'images/index/logo-apartment.svg',
                'text' => 'APARTMÁNOVÉ UBYTOVANIE',
            ],
            [
                'img' => 'images/index/logo-brunch.svg',
                'text' => 'BRUNCH<br>10:00 - 14:00 hod.',
            ],
            [
                'img' => 'images/index/logo-menu.svg',
                'text' => 'MENU<br>15:00 - 19:00 hod.',
            ],
            [
                'img' => 'images/index/logo-drink.svg',
                'text' => 'MIEŠANÉ<br>DRINKY',
            ],
            [
                'img' => 'images/index/logo-event.svg',
                'text' => 'EVENTY<br>A RODINNÉ OSLAVY',
            ],
            [
                'img' => 'images/index/logo-alpaca.svg',
                'text' => 'NAŠE<br>ALPAKY',
            ],
        ];

        $apartmentMenu = [
            [
                'img' => 'images/index/hotel-room.jpg',
                'title' => 'APARTMÁN LIŠKOVA',
                'capacity' => 'KAPACITA - 2 až 4 osoby',
                'floor' => 'POSCHODIE - 1.',
                'night' => 'NOC - od 45€',
                'wifi' => 'WIFI - áno',
                'button' => 'rezervácia',
            ],
            [
                'img' => 'images/index/hotel-room.jpg',
                'title' => 'APARTMÁN KÝČERKA',
                'capacity' => 'KAPACITA - 2 až 4 osoby',
                'floor' => 'POSCHODIE - 1.',
                'night' => 'NOC - od 45€',
                'wifi' => 'WIFI - áno',
                'button' => 'rezervácia',
            ],
            [
                'img' => 'images/index/hotel-room.jpg',
                'title' => 'APARTMÁN HÔRKA',
                'capacity' => 'KAPACITA - 2 až 4 osoby',
                'floor' => 'POSCHODIE - 1.',
                'night' => 'NOC - od 45€',
                'wifi' => 'WIFI - áno',
                'button' => 'rezervácia',
            ],
        ];

        return view('index', compact(
            'boxItems',
            'apartmentMenu',
        ));
    }
}
