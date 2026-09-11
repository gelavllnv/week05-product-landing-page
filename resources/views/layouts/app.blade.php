<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Monte Coffee — Brewed with Passion | Sta. Cruz, Laguna')</title>
    <meta name="description" content="Monte Coffee — your neighborhood café in Barangay Patimbao, Santa Cruz, Laguna. Freshly roasted coffee, cozy vibes, good company.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CDN (no build step) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        espresso: { DEFAULT: '#2A1810', dark: '#1B0F08', light: '#3D2418' },
                        cream: { DEFAULT: '#FBF3E7', dark: '#F1E4D0' },
                        caramel: { DEFAULT: '#C9884A', light: '#E3B27F', dark: '#A5692F' },
                        rust: '#8B4A2B',
                    },
                    fontFamily: {
                        display: ['"Playfair Display"', 'serif'],
                        sans: ['Poppins', 'sans-serif'],
                    },
                    keyframes: {
                        blob: {
                            '0%, 100%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -40px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.95)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-14px)' },
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        steam: {
                            '0%, 100%': { transform: 'translateY(0) scaleY(1)', opacity: 0.5 },
                            '50%': { transform: 'translateY(-10px) scaleY(1.08)', opacity: 0.9 },
                        }
                    },
                    animation: {
                        blob: 'blob 9s infinite ease-in-out',
                        float: 'float 5s ease-in-out infinite',
                        marquee: 'marquee 28s linear infinite',
                        steam: 'steam 3s ease-in-out infinite',
                    }
                }
            }
        }
    </script>

    <!-- AOS (scroll animations) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Swiper (carousels / photo transitions) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; background: #FBF3E7; }
        .font-display { font-family: 'Playfair Display', serif; }
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #FBF3E7; }
        ::-webkit-scrollbar-thumb { background: #C9884A; border-radius: 999px; }
        .text-gradient {
            background: linear-gradient(90deg, #E3B27F 0%, #C9884A 50%, #8B4A2B 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .card-hover { transition: all .45s cubic-bezier(.2,.8,.2,1); }
        .card-hover:hover { transform: translateY(-10px); }
        [x-cloak] { display: none !important; }
    </style>

    @stack('styles')
</head>
<body class="antialiased text-espresso overflow-x-hidden">

    <x-navbar />

    @yield('content')

    <x-footer />

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init({ duration: 900, once: true, offset: 60, easing: 'ease-out-cubic' });

        // Graceful image fallback so nothing ever looks broken
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('img[data-fallback]').forEach(img => {
                img.addEventListener('error', () => {
                    img.onerror = null;
                    img.src = img.dataset.fallback;
                });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>