@props([])

@php
    $gallery = [
        '1447933601403-0c6688de566e',
        '1509042239860-f550ce710b93',
        '1461023058943-07fcbe16d735',
        '1509440159596-0249088772ff',
        '1541167760496-1628856ab772',
        '1517959105821-eaf2591984ca',
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
                <img src="https://images.unsplash.com/photo-{{ $img }}?auto=format&fit=crop&w=600&q=80"
                     data-fallback="https://placehold.co/600x600/2A1810/E3B27F?text=Monte+Coffee"
                     class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-125" alt="Monte Coffee moment">
                <div class="absolute inset-0 bg-espresso/0 group-hover:bg-espresso/40 transition-all duration-500 flex items-center justify-center">
                    <span class="text-cream text-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 scale-75 group-hover:scale-100">☕</span>
                </div>
            </div>
        @endforeach
    </div>
</section>