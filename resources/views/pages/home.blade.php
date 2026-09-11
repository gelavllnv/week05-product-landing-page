@extends('layouts.app')

@section('title', 'Monte Coffee — Crafted Coffee, Brewed with Passion')

@section('content')

<x-hero />

<!-- FEATURES -->
<section id="features" class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading eyebrow="Why Monte Coffee" title="More Than Just a Cup of Coffee"
            subtitle="Every visit is designed around great coffee, good company, and a space that feels like home." />

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-feature-card icon="🌱" title="Freshly Roasted Beans" description="Small-batch roasted weekly for the freshest, most flavorful cup every single time." data-aos="fade-up" data-aos-delay="0" />
            <x-feature-card icon="🥛" title="Signature Milk-Based Drinks" description="From Spanish Latte to Caramel Macchiato — crafted by baristas who care about every pour." data-aos="fade-up" data-aos-delay="100" />
            <x-feature-card icon="🛋️" title="Cozy Hangout Space" description="A warm, relaxed interior perfect for catching up, studying, or working solo." data-aos="fade-up" data-aos-delay="200" />
            <x-feature-card icon="📶" title="Free Wi-Fi & Study Area" description="Fast, reliable internet and comfy seating for students, freelancers, and remote work." data-aos="fade-up" data-aos-delay="0" />
            <x-feature-card icon="🍝" title="Affordable Meals & Snacks" description="Rice meals, pasta, and pastries that pair perfectly with your favorite brew." data-aos="fade-up" data-aos-delay="100" />
            <x-feature-card icon="😊" title="Friendly, Fast Service" description="A local team that knows your order and treats every customer like family." data-aos="fade-up" data-aos-delay="200" />
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