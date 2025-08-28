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
                'text' => 'APARTMÁNOVÉ<br>UBYTOVANIE',
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

        $sliderImages = [
            [
                'img' => 'images/index/food.jpg',
            ],
            [
                'img' => 'images/index/zayda.jpg',
            ],
            [
                'img' => 'images/index/outside.jpg',
            ],
            [
                'img' => 'images/index/food.jpg',
            ],
            [
                'img' => 'images/index/zayda.jpg',
            ],
            [
                'img' => 'images/index/outside.jpg',
            ],
        ];

        $IndexContent = [
            [
                "type" => "left-section",
                "title" => "UBYTOVANIE",
                "text" => "V našom penzióne máte k dispozícii ubytovanie v piatich apartmánoch s celkovou kapacitou ....... osôb. Apartmány sú priestranné vybavené ........... a wifi. Názvy našich apartmánov sú pomenované podľa okolitých kopcov: Liškova, Kýčerka, Hôrka, Grúnik a Tabla. Tešíme sa na Vašu návštevu. ",
                "image" => "images/index/hotel-room.jpg",
                "button" => "viac info"
            ],
            [
                "type" => "right-section",
                "title" => "KUCHYŇA",
                "text" => "V našom penzióne máte k dispozícii ubytovanie v piatich apartmánoch s celkovou kapacitou ....... osôb. Apartmány sú priestranné vybavené ........... a wifi. Názvy našich apartmánov sú pomenované podľa okolitých kopcov: Liškova, Kýčerka, Hôrka, Grúnik a Tabla. Tešíme sa na Vašu návštevu. ",
                "image" => "images/index/kitchen.jpg",
                "button" => "menu"
            ],
            [
                "type" => "left-section",
                "title" => "EVENTY",
                "text" => "V našom penzióne máte k dispozícii ubytovanie v piatich apartmánoch s celkovou kapacitou ....... osôb. Apartmány sú priestranné vybavené ........... a wifi. Názvy našich apartmánov sú pomenované podľa okolitých kopcov: Liškova, Kýčerka, Hôrka, Grúnik a Tabla. Tešíme sa na Vašu návštevu. ",
                "image" => "images/index/hotel-room.jpg",
                "button" => "viac info"
            ],
            [
                "type" => "right-section",
                "title" => "ALPAKY",
                "text" => "V našom penzióne máte k dispozícii ubytovanie v piatich apartmánoch s celkovou kapacitou ....... osôb. Apartmány sú priestranné vybavené ........... a wifi. Názvy našich apartmánov sú pomenované podľa okolitých kopcov: Liškova, Kýčerka, Hôrka, Grúnik a Tabla. Tešíme sa na Vašu návštevu. ",
                "image" => "images/index/alpacas.jpg",
                "button" => "viac info"
            ],
        ];

        return view('index', compact(
            'boxItems',
            'apartmentMenu',
            'sliderImages',
            'IndexContent',
        ));
    }

    public function getAccommodation()
    {
        $sliderImages = [
            [
                'img' => 'images/index/food.jpg',
            ],
            [
                'img' => 'images/index/zayda.jpg',
            ],
            [
                'img' => 'images/index/outside.jpg',
            ],
            [
                'img' => 'images/index/food.jpg',
            ],
            [
                'img' => 'images/index/zayda.jpg',
            ],
            [
                'img' => 'images/index/outside.jpg',
            ],
        ];

        $ContentSection = [
            [
                "type" => "left-section",
                "image" => "images/index/hotel-room.jpg",
                "span" => "APARTMÁN",
                "title" => "LIŠKOVA",
                "capacity" => "KAPACITA: 4 OSOBY l  MANŽELSKÁ POSTEĽ  l  PRÍSTELKA 2",
                "text" => "Táto izba je ideálna pre páry, ktoré hľadajú útulné a cenovo dostupné ubytovanie. S manželskou posteľou poskytuje komfortný a pohodlný spánok. Izba je vybavená televízorom a bezplatným Wi-Fi pripojením, aby ste mohli zostať v kontakte so svetom. ",
                "button" => "viac info",
            ],
            [
                "type" => "right-section",
                "image" => "images/index/hotel-room.jpg",
                "span" => "APARTMÁN",
                "title" => "KÝČERKA",
                "capacity" => "KAPACITA: 4 OSOBY l  MANŽELSKÁ POSTEĽ  l  PRÍSTELKA 2",
                "text" => "Táto izba je ideálna pre páry, ktoré hľadajú útulné a cenovo dostupné ubytovanie. S manželskou posteľou poskytuje komfortný a pohodlný spánok. Izba je vybavená televízorom a bezplatným Wi-Fi pripojením, aby ste mohli zostať v kontakte so svetom. ",
                "button" => "viac info",
            ],
            [
                "type" => "left-section",
                "image" => "images/index/hotel-room.jpg",
                "span" => "APARTMÁN",
                "title" => "HÔRKA",
                "capacity" => "KAPACITA: 4 OSOBY l  MANŽELSKÁ POSTEĽ  l  PRÍSTELKA 2",
                "text" => "Táto izba je ideálna pre páry, ktoré hľadajú útulné a cenovo dostupné ubytovanie. S manželskou posteľou poskytuje komfortný a pohodlný spánok. Izba je vybavená televízorom a bezplatným Wi-Fi pripojením, aby ste mohli zostať v kontakte so svetom. ",
                "button" => "viac info",
            ],
            [
                "type" => "right-section",
                "image" => "images/index/hotel-room.jpg",
                "span" => "APARTMÁN",
                "title" => "TABLA",
                "capacity" => "KAPACITA: 4 OSOBY l  MANŽELSKÁ POSTEĽ  l  PRÍSTELKA 2",
                "text" => "Táto izba je ideálna pre páry, ktoré hľadajú útulné a cenovo dostupné ubytovanie. S manželskou posteľou poskytuje komfortný a pohodlný spánok. Izba je vybavená televízorom a bezplatným Wi-Fi pripojením, aby ste mohli zostať v kontakte so svetom. ",
                "button" => "viac info",
            ],
            [
                "type" => "left-section",
                "image" => "images/index/hotel-room.jpg",
                "span" => "APARTMÁN",
                "title" => "GRÚNIK",
                "capacity" => "KAPACITA: 4 OSOBY l  MANŽELSKÁ POSTEĽ  l  PRÍSTELKA 2",
                "text" => "Táto izba je ideálna pre páry, ktoré hľadajú útulné a cenovo dostupné ubytovanie. S manželskou posteľou poskytuje komfortný a pohodlný spánok. Izba je vybavená televízorom a bezplatným Wi-Fi pripojením, aby ste mohli zostať v kontakte so svetom. ",
                "button" => "viac info",
            ],
        ];

        return view('accommodation', compact(
            'sliderImages',
            'ContentSection',
        ));
    }

    public function getAccommodationDetail()
    {
        $imagesBox = [
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
        ];

        return view('accommodation-detail', compact(
            'imagesBox'
        ));
    }

    public function getPriceList()
    {
        $PriceItems = [
            [
                "title" => "APARTMÁN LIŠKOVA",
                "tags" => [
                    "celoročne 35 € / 1 noc / 1 osoba",
                    "celoročne 20 € / viac nocí / 1 osoba"
                ],
            ],
            [
                "title" => "APARTMÁN KÝČERKA",
                "tags" => [
                    "celoročne 40 € / 1 noc / 1 osoba",
                    "celoročne 25 € / viac nocí / 1 osoba"
                ],
            ],
            [
                "title" => "APARTMÁN HÔRKA",
                "tags" => [
                    "celoročne 40 € / 1 noc / 1 osoba",
                    "celoročne 25 € / viac nocí / 1 osoba"
                ],
            ],
            [
                "title" => "APARTMÁN TABLA",
                "tags" => [
                    "celoročne 40 € / 1 noc / 1 osoba",
                    "celoročne 25 € / viac nocí / 1 osoba"
                ],
            ],
            [
                "title" => "APARTMÁN GRÚNIK",
                "tags" => [
                    "celoročne 40 € / 1 noc / 1 osoba",
                    "celoročne 25 € / viac nocí / 1 osoba"
                ],
            ],
        ];

        $imagesBox = [
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
            [
                'image' => 'images/index/hotel-room.jpg',
            ],
        ];

        return view('price-list', compact(
            'PriceItems',
            'imagesBox',
        ));
    }

    public function getReservationForm()
    {
        return view('reservation-form');
    }

    public function getAlapcas()
    {
        $sliderImages = [
            [
                'img' => 'images/index/food.jpg',
            ],
            [
                'img' => 'images/index/zayda.jpg',
            ],
            [
                'img' => 'images/index/outside.jpg',
            ],
            [
                'img' => 'images/index/food.jpg',
            ],
            [
                'img' => 'images/index/zayda.jpg',
            ],
            [
                'img' => 'images/index/outside.jpg',
            ],
        ];

        $imagesBox = [
            [
                'image' => 'images/alpacas/alpacas1.jpg',
            ],
            [
                'image' => 'images/alpacas/alpacas2.jpg',
            ],
            [
                'image' => 'images/alpacas/alpacas3.jpg',
            ],
            [
                'image' => 'images/alpacas/alpacas4.jpg',
            ],
            [
                'image' => 'images/alpacas/alpacas5.jpg',
            ],
            [
                'image' => 'images/alpacas/alpacas6.jpg',
            ],
            [
                'image' => 'images/alpacas/alpacas7.jpg',
            ],
        ];

        return view('alpacas', compact(
            'sliderImages',
            'imagesBox',
        ));
    }

    public function getEvents()
    {
        return view('events');
    }
}
