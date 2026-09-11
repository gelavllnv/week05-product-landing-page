@props(['name', 'position', 'review', 'photo' => null, 'rating' => 5])

<div class="bg-white rounded-3xl p-8 shadow-md border border-espresso/5 h-full flex flex-col">
    <svg class="w-9 h-9 text-caramel/30 mb-4" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6.5C6.9 11.5 9 10 12 10V8h-2zm14 0c-3.3 0-6 2.7-6 6v10h10V14h-7.5c.4-2.5 2.5-4 5.5-4V8h-2z"/></svg>

    <div class="flex gap-1 mb-3">
        @for($i = 0; $i < 5; $i++)
            <svg class="w-4 h-4 {{ $i < $rating ? 'text-caramel' : 'text-espresso/10' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        @endfor
    </div>

    <p class="text-espresso/70 text-sm leading-relaxed flex-1">"{{ $review }}"</p>

    <div class="flex items-center gap-3 mt-6 pt-6 border-t border-espresso/5">
        <img src="{{ $photo ?? 'https://ui-avatars.com/api/?name='.urlencode($name).'&background=C9884A&color=fff&bold=true' }}"
             class="w-11 h-11 rounded-full object-cover ring-2 ring-caramel/20" alt="{{ $name }}">
        <div class="leading-tight">
            <p class="font-bold text-sm text-espresso">{{ $name }}</p>
            <p class="text-xs text-espresso/50">{{ $position }}</p>
        </div>
    </div>
</div>