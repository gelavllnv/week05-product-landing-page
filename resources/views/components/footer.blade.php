<footer class="bg-espresso-dark text-cream/70 pt-20 pb-8">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12">
        <div class="md:col-span-1">
            <a href="{{ url('/') }}" class="flex items-center gap-3 mb-4">
                <img src="{{ asset('images/logo.png') }}" data-fallback="https://placehold.co/80x80/1B0F08/E3B27F?text=MC"
                     class="w-10 h-10 rounded-full object-cover ring-2 ring-caramel/40" alt="Monte Coffee">
                <span class="font-display font-bold text-lg text-cream">Monte Coffee</span>
            </a>
            <p class="text-sm leading-relaxed">Your neighborhood café in Patimbao — crafted coffee, brewed with passion, served with heart.</p>
            <div class="flex gap-3 mt-6">
                <a href="https://www.facebook.com/montecoffee.official" target="_blank" class="w-10 h-10 rounded-full bg-cream/5 hover:bg-caramel flex items-center justify-center transition-colors duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-cream/5 hover:bg-caramel flex items-center justify-center transition-colors duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 3.3.15 4.8 1.7 4.95 4.95.06 1.3.07 1.6.07 4.8s0 3.5-.07 4.8c-.15 3.25-1.65 4.8-4.95 4.95-1.3.06-1.6.07-4.9.07s-3.6 0-4.9-.07c-3.3-.15-4.8-1.7-4.95-4.95C2.08 15.5 2.07 15.2 2.07 12s0-3.5.07-4.8c.15-3.25 1.65-4.8 4.95-4.95C8.4 2.2 8.7 2.2 12 2.2zM12 0C8.7 0 8.3 0 7 .07c-4.4.2-6.8 2.6-7 7C0 8.3 0 8.7 0 12s0 3.7.07 5c.2 4.4 2.6 6.8 7 7C8.3 24 8.7 24 12 24s3.7 0 5-.07c4.4-.2 6.8-2.6 7-7C24 15.7 24 15.3 24 12s0-3.7-.07-5c-.2-4.4-2.6-6.8-7-7C15.7 0 15.3 0 12 0zm0 5.8A6.2 6.2 0 1018.2 12 6.2 6.2 0 0012 5.8zm0 10.2a4 4 0 114-4 4 4 0 01-4 4zm6.4-10.4a1.44 1.44 0 11-1.44-1.44 1.44 1.44 0 011.44 1.44z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-cream/5 hover:bg-caramel flex items-center justify-center transition-colors duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12c0 4.4 2.9 8.2 6.8 9.5.5.1.7-.2.7-.5v-1.7c-2.8.6-3.4-1.3-3.4-1.3-.4-1.2-1.1-1.5-1.1-1.5-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.6 2.4 1.1 3 .9.1-.7.4-1.1.6-1.4-2.3-.3-4.6-1.1-4.6-5 0-1.1.4-2 1-2.7-.1-.3-.5-1.3.1-2.7 0 0 .8-.3 2.7 1a9.4 9.4 0 015 0c1.9-1.3 2.7-1 2.7-1 .6 1.4.2 2.4.1 2.7.6.7 1 1.6 1 2.7 0 3.9-2.3 4.7-4.6 5 .4.3.7 1 .7 2v3c0 .3.2.6.7.5A10 10 0 0022 12c0-5.5-4.5-10-10-10z"/></svg>
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
                <li class="flex gap-2"><span>📞</span> 0917 000 0000</li>
                <li class="flex gap-2"><span>✉️</span> hello@montecoffee.ph</li>
            </ul>
        </div>

        <div>
            <h4 class="font-display font-bold text-cream mb-4">Opening Hours</h4>
            <ul class="space-y-2 text-sm">
                <li class="flex justify-between"><span>Mon – Fri</span><span>7AM – 9PM</span></li>
                <li class="flex justify-between"><span>Sat – Sun</span><span>7AM – 10PM</span></li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 mt-14 pt-8 border-t border-cream/10 text-center text-xs text-cream/40">
        © {{ date('Y') }} Monte Coffee. All rights reserved. Built with ☕ in Sta. Cruz, Laguna.
    </div>
</footer>