<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#0C1821] text-[#F7F4EE] antialiased selection:bg-[#C27835] selection:text-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Seven Caves Distillery — Ludicrously Small Batch Craft Spirits' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Authentic cane-to-glass rums, coastal botanical gins, and single-cask whiskeys pot distilled in San Diego, CA.' }}">

    <!-- Google Fonts: EB Garamond, Karla, Space Grotesk -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Karla:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Styles & Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        garamond: ['"EB Garamond"', 'serif'],
                        heading: ['"EB Garamond"', 'serif'],
                        serif: ['"EB Garamond"', 'serif'],
                        karla: ['Karla', 'sans-serif'],
                        sans: ['Karla', 'sans-serif'],
                        mono: ['"Space Grotesk"', 'monospace'],
                    },
                    colors: {
                        seven: {
                            navy: '#0C1821',
                            dark: '#081017',
                            surface: '#14222D',
                            card: '#1A2C3A',
                            border: '#243B4D',
                            teal: '#1B4965',
                            'teal-hover': '#235D80',
                            copper: '#C27835',
                            'copper-hover': '#D98943',
                            sand: '#F7F4EE',
                            muted: '#9CB0C1',
                        }
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Zero-Config Native SEO & Meta Architecture -->
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA">
    <meta name="audience" content="21+ only, Adults">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Seven Caves Distillery">
    <meta property="og:title" content="{{ $title ?? "Seven Caves Distillery — Ludicrously Small Batch Craft Spirits" }}">
    <meta property="og:description" content="{{ $meta_description ?? "Seven Caves Spirits crafts the finest cane-to-glass rums, coastal botanical gins, and grain-to-glass whiskeys in 120-bottle micro-batches in San Diego, CA." }}">
    <meta property="og:image" content="{{ $hero_image ?? "https://caskstack.com/images/og-default.jpg" }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? "Seven Caves Distillery — Ludicrously Small Batch Craft Spirits" }}">
    <meta name="twitter:description" content="{{ $meta_description ?? "Seven Caves Spirits crafts the finest cane-to-glass rums, coastal botanical gins, and grain-to-glass whiskeys in 120-bottle micro-batches in San Diego, CA." }}">

    <!-- Compliance-First Data Moat Signals -->
    <meta name="caskstack:compliance" content="TTB-21-Plus-Direct-Connect">
    <meta name="caskstack:architecture" content="Flat-File-Worker-Runtime">

    <!-- Structured Data (JSON-LD) Schema.org Graph -->
    <script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@graph": [
        {
            "@@type": "Organization",
            "@@id": "#organization",
            "name": "Seven Caves Distillery",
            "description": "Seven Caves Spirits crafts the finest cane-to-glass rums, coastal botanical gins, and grain-to-glass whiskeys in 120-bottle micro-batches in San Diego, CA.",
            "foundingDate": "2016",
            "knowsAbout": [
                "Artisanal Fermentation",
                "Small Batch Distillation",
                "Direct-to-Consumer Alcohol Compliance"
            ]
        },
        {
            "@@type": "Distillery",
            "@@id": "#facility",
            "name": "Seven Caves Distillery",
            "description": "Seven Caves Spirits crafts the finest cane-to-glass rums, coastal botanical gins, and grain-to-glass whiskeys in 120-bottle micro-batches in San Diego, CA.",
            "isFamilyFriendly": false,
            "typicalAgeRange": "21+",
            "priceRange": "$$$",
            "paymentAccepted": "Cash, Credit Card, Apple Pay, Google Pay",
            "currenciesAccepted": "USD",
            "address": {
                "@@type": "PostalAddress",
                "streetAddress": "8655 Production Ave, Suite C, San Diego, CA 92121",
                "addressCountry": "US"
            },
            "telephone": "(619) 300-1624",
            "openingHours": "Thursday - Saturday: 1:00 PM \u2013 7:00 PM (Tours by Appointment)"
        }
    ]
}
    </script>
</head>
<body class="flex min-h-full flex-col font-karla bg-[#0C1821] text-[#F7F4EE] antialiased" x-data="{ mobileMenuOpen: false, cartOpen: false, cartCount: 0 }">

    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-seven-surface via-seven-teal/40 to-seven-surface border-b border-seven-border px-4 py-2 text-center text-xs font-mono tracking-wider flex items-center justify-center gap-3">
        <span class="inline-block w-2 h-2 rounded-full bg-seven-copper animate-pulse"></span>
        <span>LUDICROUSLY SMALL BATCHES (120 BOTTLES) • ZERO SOURCED BULK SPIRITS • SAN DIEGO, CA</span>
        <span class="text-seven-copper font-bold hidden sm:inline">✦ GRAIN & CANE TO GLASS</span>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-40 w-full border-b border-seven-border bg-[#0C1821]/95 backdrop-blur-md transition-all">
        <div class="max-w-7xl mx-auto flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
            
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-seven-copper to-amber-700 flex items-center justify-center text-zinc-950 font-bold text-lg shadow-lg">
                    7C
                </div>
                <div class="flex flex-col">
                    <span class="font-garamond text-2xl font-bold tracking-tight text-seven-sand group-hover:text-seven-copper transition">
                        {{ $brand_name ?? 'Seven Caves' }}
                    </span>
                    <span class="text-[9px] font-mono tracking-widest text-seven-muted uppercase -mt-1">
                        Craft Distillery • San Diego
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8 text-xs font-mono uppercase tracking-widest text-seven-muted">
                <a href="#about" class="hover:text-seven-copper transition">The 7 Caves</a>
                <a href="#spirits-matrix" class="hover:text-seven-copper transition">Spirits</a>
                <a href="#spirits-matrix" class="hover:text-seven-copper transition">Rums & Gins</a>
                <a href="#exploratory" class="hover:text-seven-copper transition">Micro-Vault</a>
                <a href="#tasting-room" class="hover:text-seven-copper transition">Tasting Room</a>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4">
                <a href="#tasting-room" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-seven-copper hover:bg-seven-copper-hover text-zinc-950 font-mono text-xs font-bold transition shadow-md">
                    <i class="fa-solid fa-calendar-check text-[11px]"></i>
                    <span>Book Tasting</span>
                </a>

                <button @click="cartOpen = true" type="button" class="relative p-2 text-seven-sand hover:text-seven-copper transition" aria-label="View Cart">
                    <i class="fa-solid fa-whiskey-glass text-lg"></i>
                    <span x-show="cartCount > 0" x-text="cartCount" class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-seven-copper text-zinc-950 font-mono text-[9px] font-extrabold flex items-center justify-center">0</span>
                </button>

                <!-- Mobile Menu Trigger -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="md:hidden p-2 text-seven-sand hover:text-seven-copper">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t border-seven-border bg-seven-surface px-6 py-4 space-y-3 font-mono text-xs uppercase tracking-wider">
            <a href="#about" @click="mobileMenuOpen = false" class="block py-1 hover:text-seven-copper">The 7 Caves</a>
            <a href="#spirits-matrix" @click="mobileMenuOpen = false" class="block py-1 hover:text-seven-copper">Spirits</a>
            <a href="#exploratory" @click="mobileMenuOpen = false" class="block py-1 hover:text-seven-copper">Micro-Vault</a>
            <a href="#tasting-room" @click="mobileMenuOpen = false" class="block py-1 text-seven-copper font-bold">Book Tasting Flight</a>
        </div>
    </header>

    <!-- Main Content Injection -->
    <main class="flex-1">
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <!-- Global Footer -->
    <footer class="border-t border-seven-border bg-seven-dark pt-16 pb-12 text-seven-muted text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-seven-copper flex items-center justify-center text-zinc-950 font-bold">7C</div>
                    <span class="font-garamond text-xl font-bold text-seven-sand">Seven Caves Distillery</span>
                </div>
                <p class="text-xs leading-relaxed">
                    {{ $tagline ?? 'Ludicrously Small Batch Craft Spirits. Pure grain-to-glass and cane-to-glass distillation in San Diego, CA.' }}
                </p>
                <div class="flex items-center gap-4 text-sm text-seven-sand">
                    <a href="https://instagram.com/sevencaves" target="_blank" rel="noopener" class="hover:text-seven-copper transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://facebook.com/7Caves" target="_blank" rel="noopener" class="hover:text-seven-copper transition"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>

            <div class="space-y-2 font-mono">
                <h4 class="font-bold text-seven-sand uppercase tracking-wider text-xs">Navigation</h4>
                <ul class="space-y-1.5 text-xs">
                    <li><a href="#about" class="hover:text-seven-copper transition">La Jolla Sea Caves</a></li>
                    <li><a href="#spirits-matrix" class="hover:text-seven-copper transition">Artisanal Rums</a></li>
                    <li><a href="#spirits-matrix" class="hover:text-seven-copper transition">Botanical Gins</a></li>
                    <li><a href="#exploratory" class="hover:text-seven-copper transition">Exploratory Vault</a></li>
                    <li><a href="#tasting-room" class="hover:text-seven-copper transition">Tasting Room Flights</a></li>
                </ul>
            </div>

            <div class="space-y-2 font-mono">
                <h4 class="font-bold text-seven-sand uppercase tracking-wider text-xs">Distillery Lab</h4>
                <p class="text-seven-sand font-bold">Seven Caves Spirits</p>
                <p>8655 Production Ave, Suite C</p>
                <p>San Diego, CA 92121</p>
                <p class="pt-2 text-seven-copper font-bold">(619) 300-1624</p>
                <p>geoff@the7caves.com</p>
            </div>

            <div class="space-y-3">
                <h4 class="font-bold text-seven-sand uppercase tracking-wider font-mono text-xs">21+ Compliance</h4>
                <p class="text-[11px] leading-relaxed">
                    Government Warning: (1) According to the Surgeon General, women should not drink alcoholic beverages during pregnancy because of the risk of birth defects. (2) Consumption of alcoholic beverages impairs your ability to drive a car or operate machinery.
                </p>
                <div class="pt-2 text-[10px] font-mono text-seven-copper">
                    ✦ PROUDLY INDEPENDENT SAN DIEGO DISTILLERY
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 mt-8 border-t border-seven-border/50 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] font-mono">
            <p>© {{ date('Y') }} Seven Caves Distillery. All rights reserved. Powered by CaskStack.</p>
            <p>100% Authentic Pot Distillation • Zero Bulk Liquor</p>
        </div>
    </footer>

</body>
</html>
