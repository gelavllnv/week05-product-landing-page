@props([])

@php
    $gallery = [
        'gallery1.jpg',
        'gallery2.jpg',
        'gallery3.jpg',
        'gallery4.jpg',
        'gallery5.jpg',
        'gallery6.jpg',
    ];
@endphp

<section class="py-24 bg-cream overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading eyebrow="Gallery" title="Moments at Monte Coffee" subtitle="A little taste of the sights, sips, and stories from our café." />
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 md:gap-2 px-2 md:px-6 max-w-7xl mx-auto">
        @foreach($gallery as $i => $img)
            <div class="relative group overflow-hidden rounded-xl aspect-square {{ $i % 5 === 0 ? 'lg:row-span-2 lg:aspect-auto' : '' }}"
                 data-aos="zoom-in" data-aos-delay="{{ $i * 80 }}">
                <img src="{{ asset('images/gallery/' . $img) }}"
                     class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-125"
                     alt="Monte Coffee moment">
                <div class="absolute inset-0 bg-espresso/0 group-hover:bg-espresso/40 transition-all duration-500 flex items-center justify-center">
                    <span class="text-cream text-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 scale-75 group-hover:scale-100">☕︎੭</span>
                </div>
            </div>
        @endforeach
    </div>
</section>