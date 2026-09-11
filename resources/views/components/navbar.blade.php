<header x-data="{ open: false, scrolled: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500"
    :class="scrolled ? 'bg-espresso/95 backdrop-blur-md shadow-lg shadow-black/20 py-2' : 'bg-transparent py-5'">

    <nav class="max-w-7xl mx-auto px-6 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('images/logo.png') }}" alt="Monte Coffee Logo"
                 data-fallback="https://placehold.co/80x80/1B0F08/E3B27F?text=MC"
                 class="w-11 h-11 rounded-full object-cover ring-2 ring-caramel/40 group-hover:ring-caramel transition-all duration-300">
            <div class="leading-none">
                <span class="block font-display font-bold text-xl text-cream tracking-wide">Monte Coffee</span>
                <span class="block text-[10px] uppercase tracking-[0.3em] text-caramel-light">Sta. Cruz, Laguna</span>
            </div>
        </a>

        <!-- Desktop Links -->
        <div class="hidden lg:flex items-center gap-10 text-sm font-medium text-cream/80">
            <a href="#home" class="hover:text-caramel-light transition-colors duration-300">Home</a>
            <a href="#features" class="hover:text-caramel-light transition-colors duration-300">Features</a>
            <a href="#pricing" class="hover:text-caramel-light transition-colors duration-300">Pricing</a>
            <a href="#testimonials" class="hover:text-caramel-light transition-colors duration-300">Testimonials</a>
            <a href="#contact" class="hover:text-caramel-light transition-colors duration-300">Contact</a>
        </div>

        <!-- CTA -->
        <div class="hidden lg:flex items-center gap-3">
            <a href="#contact" class="text-sm font-semibold text-cream/80 hover:text-cream transition-colors px-4 py-2">Sign In</a>
            <x-button href="#pricing" variant="primary" class="!px-6 !py-2.5 text-sm">Get Started</x-button>
        </div>

        <!-- Mobile toggle -->
        <button @click="open = !open" class="lg:hidden text-cream p-2">
            <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open" x-cloak class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </nav>

    <!-- Mobile menu -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0" @click.outside="open = false"
         class="lg:hidden bg-espresso-dark/98 backdrop-blur-md mt-2 mx-4 rounded-2xl shadow-2xl overflow-hidden">
        <div class="flex flex-col p-6 gap-4 text-cream/90 font-medium">
            <a href="#home" @click="open=false" class="hover:text-caramel-light">Home</a>
            <a href="#features" @click="open=false" class="hover:text-caramel-light">Features</a>
            <a href="#pricing" @click="open=false" class="hover:text-caramel-light">Pricing</a>
            <a href="#testimonials" @click="open=false" class="hover:text-caramel-light">Testimonials</a>
            <a href="#contact" @click="open=false" class="hover:text-caramel-light">Contact</a>
            <hr class="border-cream/10">
            <a href="#contact" @click="open=false" class="text-center py-2 text-cream/80">Sign In</a>
            <x-button href="#pricing" variant="primary" class="w-full justify-center">Get Started</x-button>
        </div>
    </div>
</header>