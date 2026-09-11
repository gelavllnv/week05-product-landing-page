@props([
    'eyebrow' => null,
    'title',
    'subtitle' => null,
    'light' => false,
    'align' => 'center', // center | left
])

<div class="{{ $align === 'center' ? 'text-center mx-auto' : 'text-left' }} max-w-2xl mb-14" data-aos="fade-up">
    @if($eyebrow)
        <span class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-[0.2em] uppercase px-4 py-1.5 rounded-full border {{ $light ? 'border-cream/30 text-caramel-light bg-cream/5' : 'border-caramel/30 text-caramel-dark bg-caramel/10' }}">
            <span class="w-1.5 h-1.5 rounded-full bg-caramel"></span>
            {{ $eyebrow }}
        </span>
    @endif
    <h2 class="font-display font-bold text-3xl sm:text-4xl md:text-5xl mt-4 leading-tight {{ $light ? 'text-cream' : 'text-espresso' }}">
        {{ $title }}
    </h2>
    @if($subtitle)
        <p class="mt-4 text-base md:text-lg {{ $light ? 'text-cream/70' : 'text-espresso/60' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>