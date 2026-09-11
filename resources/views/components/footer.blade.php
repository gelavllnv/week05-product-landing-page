<footer class="bg-espresso-dark text-cream/70 pt-20 pb-8">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">
        <div class="md:col-span-1">
            <a href="{{ url('/') }}" class="flex items-center gap-3 mb-4">
                <img src="{{ asset('images/logo.png') }}" data-fallback="https://placehold.co/80x80/1B0F08/E3B27F?text=MC"
                     class="w-10 h-10 rounded-full object-cover ring-2 ring-caramel/40" alt="Monte Coffee">
                <span class="font-display font-bold text-lg text-cream">Monte Coffee</span>
            </a>
            <p class="text-sm leading-relaxed">Your neighborhood café in Santa Cruz, Laguna — crafted coffee, brewed with passion, served with heart.</p>
            <div class="flex gap-3 mt-6">
                <a href="https://www.facebook.com/montecoffee.official" target="_blank" class="w-10 h-10 rounded-full bg-cream/5 hover:bg-caramel flex items-center justify-center transition-colors duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg>
                </a>
            </div>
        </div>

        <div>
            <h4 class="font-display font-bold text-cream mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#home" class="hover:text-caramel-light transition-colors">Home</a></li>
                <li><a href="#features" class="hover:text-caramel-light transition-colors">Features</a></li>
                <li><a href="#showcase" class="hover:text-caramel-light transition-colors">Menu</a></li>
                <li><a href="#pricing" class="hover:text-caramel-light transition-colors">Pricing</a></li>
                <li><a href="#testimonials" class="hover:text-caramel-light transition-colors">Testimonials</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-display font-bold text-cream mb-4">Contact</h4>
            <ul class="space-y-3 text-sm">
                <li class="flex gap-2"><span>📍</span> Sitio 6, Brgy. Patimbao, National Highway, Sta. Cruz, Laguna</li>
                <li class="flex gap-2"><span>📞</span> 0951 311 2260</li>
            </ul>
        </div>

        <div>
            <h4 class="font-display font-bold text-cream mb-4">Opening Hours</h4>
            <ul class="space-y-2 text-sm">
                <li class="flex justify-between"><span>Mon – Fri</span><span>7 AM – 12 AM</span></li>
                <li class="flex justify-between"><span>Sat – Sun</span><span>7 AM – 10 PM</span></li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mt-14 pt-8 border-t border-cream/10 text-center text-xs text-cream/40">
        © {{ date('Y') }} Monte Coffee. All rights reserved.
    </div>
</footer>