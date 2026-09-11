@props(['name', 'class' => 'w-5 h-5'])

@php
$paths = [
    'map-pin' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1115 0z"/>',
    'phone' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 002.25-2.25v-1.372a1.5 1.5 0 00-1.147-1.457l-3.75-.938a1.5 1.5 0 00-1.588.494l-.83 1.036a11.25 11.25 0 01-6.198-6.198l1.036-.83a1.5 1.5 0 00.494-1.588l-.938-3.75A1.5 1.5 0 006.622 4.5H5.25A2.25 2.25 0 003 6.75z"/>',
    'mail' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75l9.75 6.75 9.75-6.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15A2.25 2.25 0 002.25 6.75v10.5A2.25 2.25 0 004.5 19.5z"/>',
    'wifi' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856a9.75 9.75 0 0113.788 0M1.924 8.674a14.25 14.25 0 0120.152 0M12 18.75h.008v.008H12v-.008z"/>',
    'leaf' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5c8-1 12-5.5 13.5-13.5-8 .5-13 5-13.5 13.5z"/><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5c3-3.5 6-6.5 9-9.5"/>',
    'cup' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 9h12v6a4.5 4.5 0 01-4.5 4.5H9A4.5 4.5 0 014.5 15V9z"/><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5H18a2.25 2.25 0 010 4.5h-1.5M8 5c-.5-1 .5-1.5 0-3M12 5c-.5-1 .5-1.5 0-3"/>',
    'couch' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75V9a2.25 2.25 0 012.25-2.25h10.5A2.25 2.25 0 0119.5 9v3.75M4.5 12.75a1.5 1.5 0 00-1.5 1.5v3a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-3a1.5 1.5 0 00-1.5-1.5M4.5 12.75h15M6 18.75v1.5M18 18.75v1.5"/>',
    'utensils' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3v7.5m0 0V21m0-10.5a2.25 2.25 0 01-2.25-2.25V3m2.25 7.5a2.25 2.25 0 002.25-2.25V3M16.5 3v18m3-18a3 3 0 00-3 3v6a3 3 0 003 3"/>',
    'heart' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c-4-2.5-9-6.3-9-11A5.25 5.25 0 0112 5.25 5.25 5.25 0 0121 9.25c0 4.7-5 8.5-9 11z"/>',
    'zoom' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75L21 21M10.5 6.75v7.5M6.75 10.5h7.5M17.25 10.5a6.75 6.75 0 11-13.5 0 6.75 6.75 0 0113.5 0z"/>',
    'arrow-right' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>',
];
@endphp

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" {{ $attributes->merge(['class' => $class]) }}>
    {!! $paths[$name] ?? '' !!}
</svg>