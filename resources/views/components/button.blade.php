@props([
    'variant' => 'primary', // primary | secondary | outline | ghost
    'href' => null,
    'type' => 'button',
])

@php
$base = 'inline-flex items-center justify-center gap-2 font-semibold rounded-full px-7 py-3.5 text-sm md:text-base transition-all duration-300 ease-out';

$variants = [
    'primary'   => 'bg-caramel text-white shadow-lg shadow-caramel/30 hover:bg-caramel-dark hover:shadow-xl hover:shadow-caramel/40 hover:-translate-y-0.5',
    'secondary' => 'bg-espresso text-cream hover:bg-espresso-light hover:-translate-y-0.5 shadow-lg shadow-espresso/20',
    'outline'   => 'border-2 border-cream text-cream hover:bg-cream hover:text-espresso',
    'ghost'     => 'text-espresso hover:text-caramel',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif