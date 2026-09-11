@props(['name', 'price', 'period' => '', 'features' => [], 'highlighted' => false, 'cta' => 'Choose Plan'])

<div {{ $attributes->merge([
    'class' => 'card-hover relative rounded-3xl p-8 flex flex-col ' .
        ($highlighted
            ? 'bg-espresso text-cream shadow-2xl shadow-espresso/30 lg:scale-105 border-2 border-caramel'
            : 'bg-white text-espresso shadow-md border border-espresso/5')
]) }}>
    @if($highlighted)
        <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-caramel text-white text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full shadow-lg">Most Popular</span>
    @endif

    <h3 class="font-display font-bold text-2xl">{{ $name }}</h3>
    <div class="mt-4 flex items-baseline gap-1">
        <span class="text-4xl font-extrabold {{ $highlighted ? 'text-caramel-light' : 'text-caramel-dark' }}">{{ $price }}</span>
        @if($period)<span class="text-sm {{ $highlighted ? 'text-cream/50' : 'text-espresso/50' }}">/{{ $period }}</span>@endif
    </div>

    <ul class="mt-8 space-y-4 flex-1">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm {{ $highlighted ? 'text-cream/80' : 'text-espresso/70' }}">
                <svg class="w-5 h-5 flex-shrink-0 {{ $highlighted ? 'text-caramel-light' : 'text-caramel' }}" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                {{ $feature }}
            </li>
        @endforeach
    </ul>

    <x-button href="#contact" :variant="$highlighted ? 'primary' : 'secondary'" class="w-full justify-center mt-8">
        {{ $cta }}
    </x-button>
</div>