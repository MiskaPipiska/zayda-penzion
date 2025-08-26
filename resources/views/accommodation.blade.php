@extends('layout.base')

@section('content')
    @foreach($ContentSection as $index => $item)
        <x-content-section
            :span="$item['span']"
            :type="$item['type']"
            :title="$item['title']"
            :text="$item['text']"
            :image="$item['image']"
            :capacity="$item['capacity']"
            :button="$item['button']"
        />
    @endforeach
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
