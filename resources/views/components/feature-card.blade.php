@props(['image', 'badge', 'name', 'description', 'accent' => 'caramel'])

@php
$accents = [
    'caramel' => 'bg-caramel text-white',
    'rust'    => 'bg-rust text-white',
    'espresso'=> 'bg-espresso text-cream',
];
$badgeClass = $accents[$accent] ?? $accents['caramel'];
@endphp

<div class="group relative bg-white rounded-[2rem] p-6 pt-0 shadow-md shadow-espresso/5 border border-espresso/5 hover:shadow-2xl hover:shadow-caramel/15 hover:-translate-y-2 transition-all duration-500 ease-out h-full flex flex-col">

    <!-- Image on soft gradient blob -->
    <div class="relative -mt-2 mb-4 h-48 flex items-center justify-center overflow-visible">
        <div class="absolute inset-x-6 inset-y-2 rounded-[2.5rem] bg-gradient-to-br from-caramel/15 via-cream to-caramel/5 group-hover:from-caramel/25 transition-colors duration-500"></div>

        <span class="absolute top-2 left-2 z-10 text-[10px] font-bold tracking-widest uppercase px-3 py-1.5 rounded-full shadow-md {{ $badgeClass }}">
            {{ $badge }}
        </span>

        <img src="{{ $image }}"
             data-fallback="https://placehold.co/400x400/FBF3E7/2A1810?text={{ urlencode($name) }}"
             alt="{{ $name }}"
             class="relative z-[5] max-h-48 w-auto object-contain drop-shadow-xl group-hover:scale-110 group-hover:-rotate-2 transition-transform duration-500 ease-out">
    </div>

    <!-- Info -->
    <div class="flex-1 flex flex-col pt-4 border-t border-dashed border-espresso/10">
        <h3 class="font-display font-bold text-lg text-espresso leading-snug">{{ $name }}</h3>
        <p class="text-espresso/60 text-sm mt-2 leading-relaxed">{{ $description }}</p>
    </div>
</div>