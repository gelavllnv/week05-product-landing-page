@props(['icon', 'title', 'description'])

<div {{ $attributes->merge(['class' => 'card-hover group bg-white rounded-3xl p-8 shadow-md shadow-espresso/5 border border-espresso/5 hover:shadow-2xl hover:shadow-caramel/10 hover:border-caramel/30']) }}>
    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-caramel to-rust flex items-center justify-center text-2xl shadow-lg shadow-caramel/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500">
        {{ $icon }}
    </div>
    <h3 class="font-display font-bold text-xl mt-6 text-espresso">{{ $title }}</h3>
    <p class="text-espresso/60 text-sm mt-3 leading-relaxed">{{ $description }}</p>
</div>