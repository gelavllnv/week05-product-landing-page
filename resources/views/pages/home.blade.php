@extends('layouts.app')

@section('title', 'Monte Coffee — Crafted Coffee, Brewed with Passion')

@section('content')

<x-hero />

<!-- FEATURES -->
<!-- BESTSELLERS -->
<section id="features" class="py-24 bg-cream relative overflow-hidden">
    <div class="absolute top-0 right-0 w-72 h-72 bg-caramel/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>

    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="max-w-xl mb-14" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-[0.2em] uppercase px-4 py-1.5 rounded-full border border-caramel/30 text-caramel-dark bg-caramel/10">
                <span class="w-1.5 h-1.5 rounded-full bg-caramel"></span>
                From Our Counter
            </span>
            <h2 class="font-display font-bold text-3xl sm:text-4xl md:text-5xl mt-4 leading-tight text-espresso">
                Our Features
            </h2>
            <p class="mt-4 text-base md:text-lg text-espresso/60">
                Our six drinks and dessert you would come back for.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <x-feature-card image="{{ asset('images/red velvet latte.png') }}" badge="Drink" accent="rust"
                name="Iced Red Velvet Latte"
                description="A smooth blend of red velvet and fresh milk over ice — rich, creamy, and a little indulgent."
                data-aos="fade-up" data-aos-delay="0" />

            <x-feature-card image="{{ asset('images/blueberry cheesecake.png') }}" badge="Cheesecake" accent="espresso"
                name="Blueberry Cheesecake"
                description="Silky baked cheesecake topped with a generous layer of real blueberry compote."
                data-aos="fade-up" data-aos-delay="100" />

            <x-feature-card image="{{ asset('images/white chocolate dream latte.png') }}" badge="Drink" accent="caramel"
                name="White Chocolate Dream Latte"
                description="Espresso meets white chocolate and steamed milk for a sweet, dessert-like sip."
                data-aos="fade-up" data-aos-delay="200" />

            <x-feature-card image="{{ asset('images/dark choco latte.png') }}" badge="Drink" accent="espresso"
                name="Dark Choco Latte"
                description="Bold espresso balanced with rich dark chocolate — deep, smooth, and never too sweet."
                data-aos="fade-up" data-aos-delay="0" />

            <x-feature-card image="{{ asset('images/caramel macchiato.png') }}" badge="Drink" accent="caramel"
                name="Caramel Macchiato"
                description="Espresso layered with milk and caramel drizzle for that classic buttery-sweet finish."
                data-aos="fade-up" data-aos-delay="100" />

            <x-feature-card image="{{ asset('images/dark choco cheesecake.png') }}" badge="Cheesecake" accent="rust"
                name="Dark Choco Cheesecake"
                description="Creamy cheesecake swirled with dark chocolate for a decadent, fudgy bite."
                data-aos="fade-up" data-aos-delay="200" />
        </div>
    </div>
</section>
<x-showcase />

<x-gallery />

<!-- PRICING -->
<section id="pricing" class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading eyebrow="Coffee Club" title="Plans Made for Every Coffee Lover"
            subtitle="Simple, transparent pricing — whether you're grabbing a quick cup or stocking up for the whole office." />

        <div class="grid lg:grid-cols-3 gap-8 lg:gap-6 max-w-6xl mx-auto">
            <div data-aos="fade-up" data-aos-delay="0">
                <x-pricing-card name="Solo Sipper" price="₱99" period="cup"
                    :features="['Any regular-size hot or iced coffee', 'Choice of 3 house blends', 'Dine-in or takeout', 'No commitment needed']"
                    cta="Order Now" />
            </div>
            <div data-aos="fade-up" data-aos-delay="150">
                <x-pricing-card name="Coffee Lover" price="₱499" period="week" :highlighted="true"
                    :features="['7 drinks of your choice', '1 free pastry per week', 'Priority seating', '10% off rice meals', 'Free Wi-Fi voucher']"
                    cta="Choose Plan" />
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <x-pricing-card name="Office Bundle" price="₱2,499" period="month"
                    :features="['Up to 5 people, unlimited drinks', 'Reserved table for meetings', 'Free delivery for bulk orders', 'Dedicated account support']"
                    cta="Contact Sales" />
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="py-24 bg-espresso relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading eyebrow="Kind Words" title="Loved by Our Regulars" light
            subtitle="Don't just take our word for it — here's what the Monte Coffee community has to say." />
    </div>

    <div class="max-w-6xl mx-auto px-6" data-aos="fade-up">
        <div class="swiper testimonial-swiper pb-14">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-auto py-2">
                    <x-testimonial-card name="Angela Reyes" position="Regular Customer" rating="5"
                        review="Sobrang sarap ng Spanish Latte nila and the staff are super friendly! This is my go-to study spot every weekend." />
                </div>
                <div class="swiper-slide h-auto py-2">
                    <x-testimonial-card name="Mark Villanueva" position="Freelancer" rating="5"
                        review="Great Wi-Fi, comfy seats, and the coffee never disappoints. Monte Coffee is basically my second office now." />
                </div>
                <div class="swiper-slide h-auto py-2">
                    <x-testimonial-card name="Jasmine Cruz" position="College Student" rating="4"
                        review="Affordable and cozy! Perfect place to hang out with friends after class. Sulit na sulit ang bundle promo nila." />
                </div>
            </div>
            <div class="swiper-pagination !bottom-0"></div>
        </div>
    </div>
</section>

<x-cta />

@endsection

@push('scripts')
<script>
    new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
</script>
@endpush