@props([])

<section id="showcase" class="py-24 bg-espresso relative overflow-hidden">
    <div class="absolute top-1/2 left-0 w-96 h-96 bg-caramel/10 rounded-full blur-3xl -translate-y-1/2"></div>

    <div class="max-w-7xl mx-auto px-6 relative" x-data="{ tab: 'menu' }">
        <x-section-heading eyebrow="Inside Monte Coffee" title="A Peek Behind the Counter" light
            subtitle="From our bestselling drinks to a cozy corner made for lingering — here's what to expect when you visit." />

        <!-- Tabs -->
        <div class="flex justify-center gap-2 mb-12 flex-wrap" data-aos="fade-up">
            <button @click="tab='menu'" :class="tab==='menu' ? 'bg-caramel text-white' : 'bg-cream/10 text-cream/60'" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">Our Specialties</button>
            <button @click="tab='ambiance'" :class="tab==='ambiance' ? 'bg-caramel text-white' : 'bg-cream/10 text-cream/60'" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">The Space</button>
            <button @click="tab='mobile'" :class="tab==='mobile' ? 'bg-caramel text-white' : 'bg-cream/10 text-cream/60'" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">Mobile Preview</button>
        </div>

        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <!-- Visual side -->
            <div class="relative min-h-[420px]" data-aos="fade-right">
                <div x-show="tab==='menu'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                    <img src="{{ asset('images/our product.jpg') }}"
                         data-fallback="https://placehold.co/900x700/2A1810/E3B27F?text=Our+Menu"
                         class="rounded-3xl shadow-2xl w-full h-[420px] object-cover" alt="Monte Coffee menu bestsellers">
                </div>
                <div x-show="tab==='ambiance'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                    <img src="{{ asset('images/montehero3.jpg') }}"
                         data-fallback="https://placehold.co/900x700/2A1810/E3B27F?text=The+Space"
                         class="rounded-3xl shadow-2xl w-full h-[420px] object-cover" alt="Monte Coffee interior ambiance">
                </div>
                <div x-show="tab==='mobile'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="flex justify-center">
                    <!-- CSS phone mockup -->
                    <div class="w-[240px] h-[420px] bg-espresso-dark rounded-[2.5rem] border-4 border-cream/10 shadow-2xl p-3 relative">
                        <div class="w-20 h-4 bg-espresso-dark rounded-full absolute top-3 left-1/2 -translate-x-1/2 z-10"></div>
                        <img src="{{ asset('images/our mobile.png') }}"
                             data-fallback="https://placehold.co/500x800/1B0F08/E3B27F?text=Order+App"
                             class="w-full h-full object-cover rounded-[1.8rem]" alt="Order preview">
                    </div>
                </div>
            </div>

            <!-- Key highlights -->
            <div data-aos="fade-left">
                <h3 class="font-display font-bold text-2xl md:text-3xl text-cream mb-6">Key Highlights</h3>
                <ul class="space-y-5">
                    @foreach([
                        'Single-origin beans roasted in small batches every week',
                        'Signature Caramel Macchiato and Cheesecakes',
                        'Free Wi-Fi — perfect for study or work sessions',
                        'Affordable rice meals & pasta for merienda or lunch',
                    ] as $point)
                        <li class="flex items-start gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-caramel/20 text-caramel-light flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span class="text-cream/70 pt-1">{{ $point }}</span>
                        </li>
                    @endforeach
                </ul>
                <x-button href="#pricing" variant="primary" class="mt-8">See Full Menu & Prices</x-button>
            </div>
        </div>
    </div>
</section>