@props(['images'])

<section class="hotel-images">
    <div class="container">
        <div class="imagesBox">
            @foreach($images as $index => $image)
                <div class="img img{{ $index + 1 }}">
                    {{-- Ak posielaš pole s kľúčom 'image', použijeme ho --}}
                    <img src="{{ asset($image['image'] ?? $image) }}" alt="Hotel image {{ $index + 1 }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
