<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-espresso">

    <!-- Background photo carousel -->
    <div class="swiper hero-swiper absolute inset-0 w-full h-full">
        <div class="swiper-wrapper">
            @php
                $heroImages = [
                    'montehero.jpg',
                    'montehero2.jpg',
                    'montehero3.jpg',
                ];
            @endphp
            @foreach($heroImages as $img)
                <div class="swiper-slide">
                    <img src="{{ asset('image/' . $img) }}"
                    class="w-full h-full object-cover"
                    alt="Monte Coffee ambiance">
                </div>
            @endforeach
        </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-espresso-dark/30 via-espresso/20 to-espresso/70"></div>

    <!-- Decorative blobs -->
    <div class="absolute top-20 -left-20 w-72 h-72 bg-caramel/20 rounded-full blur-3xl animate-blob"></div>
    <div class="absolute bottom-10 right-0 w-96 h-96 bg-rust/20 rounded-full blur-3xl animate-blob" style="animation-delay:2s"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 pt-32 pb-20 grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left: copy -->
        <div>
            <span data-aos="fade-down" class="inline-flex items-center gap-2 bg-cream/10 border border-cream/20 text-caramel-light text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full backdrop-blur-sm">
                ⚲ Sitio 6, Brgy. Patimbao, Santa Cruz, Laguna
            </span>

            <h1 data-aos="fade-up" data-aos-delay="100" class="font-display font-extrabold text-4xl sm:text-5xl md:text-6xl leading-[1.1] text-cream mt-6">
                Crafted Coffee, <br>
                <span class="text-gradient">Brewed with Passion.</span>
            </h1>

            <p data-aos="fade-up" data-aos-delay="200" class="text-cream/70 text-base md:text-lg mt-6 max-w-lg">
                Monte Coffee is your neighborhood café — freshly roasted beans, handcrafted drinks, and a cozy corner in Patimbao to slow down, work, or catch up with friends.
            </p>

            <div data-aos="fade-up" data-aos-delay="300" class="flex flex-wrap gap-4 mt-8">
                <x-button href="#pricing" variant="primary">
                    Order Now
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </x-button>
                <x-button href="#showcase" variant="outline">View Menu</x-button>
            </div>

            <!-- Stats -->
            <div data-aos="fade-up" data-aos-delay="400" class="flex flex-wrap gap-8 mt-12 pt-8 border-t border-cream/10">
                <div>
                    <p class="font-display font-bold text-3xl text-caramel-light">150+</p>
                    <p class="text-cream/50 text-xs uppercase tracking-wider mt-1">Cups Served Daily</p>
                </div>
                <div>
                    <p class="font-display font-bold text-3xl text-caramel-light">4.0<span class="text-lg">★</span></p>
                    <p class="text-cream/50 text-xs uppercase tracking-wider mt-1">Customer Rating</p>
                </div>
                <div>
                    <p class="font-display font-bold text-3xl text-caramel-light">100%</p>
                    <p class="text-cream/50 text-xs uppercase tracking-wider mt-1">Locally Loved</p>
                </div>
            </div>
        </div>

        <!-- Right: floating cup visual -->
        <div class="relative hidden lg:flex justify-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="relative animate-float">
                <img src="{{ asset('image/floating visual.jpg') }}"
                    class="w-[420px] h-[420px] object-cover rounded-[3rem] shadow-2xl ring-8 ring-cream/5"
                    alt="Monte Coffee">
                <div class="absolute -bottom-6 -left-8 bg-cream text-espresso px-5 py-4 rounded-2xl shadow-xl flex items-center gap-3">
                    <span class="text-2xl">☕︎੭</span>
                    <div class="leading-tight">
                        <p class="font-bold text-sm">Freshly Brewed</p>
                        <p class="text-xs text-espresso/60">Every single cup</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll cue -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 animate-bounce text-cream/40 z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>
</section>

@push('scripts')
<script>
    new Swiper('.hero-swiper', {
        effect: 'fade',
        fadeEffect: { crossFade: true },
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        speed: 1500,
    });
</script>
@endpush