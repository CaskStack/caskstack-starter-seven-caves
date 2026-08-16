@php
    $b = $block ?? $data ?? [];
@endphp
<section id="spirits-matrix" class="py-24 px-4 sm:px-6 lg:px-8 border-b border-seven-border bg-[#0C1821]" x-data="{ activeFilter: 'all' }">
    <div class="max-w-7xl mx-auto space-y-12">
        
        <!-- Header & Category Tabs -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-2">
                <span class="text-xs font-mono uppercase tracking-widest text-seven-copper font-bold">Core & Seasonal Roster</span>
                <h2 class="font-garamond text-3xl sm:text-5xl font-bold text-seven-sand">{{ $b['headline'] ?? 'Our Handcrafted Core Expressions' }}</h2>
                <p class="text-xs sm:text-sm text-seven-muted max-w-xl">{{ $b['subheadline'] ?? 'Each bottle is numbered by hand with batch number, barrel fill date, and bottle allocation.' }}</p>
            </div>

            <!-- Filter Pills -->
            <div class="flex flex-wrap gap-2 font-mono text-xs">
                <button @click="activeFilter = 'all'" :class="activeFilter === 'all' ? 'bg-seven-copper text-zinc-950 font-bold' : 'bg-seven-surface text-seven-muted hover:text-seven-sand border border-seven-border'" class="px-3.5 py-1.5 rounded-lg transition">
                    All Spirits
                </button>
                @foreach ($b['categories'] ?? [] as $cat)
                    <button @click="activeFilter = '{{ $cat['slug'] }}'" :class="activeFilter === '{{ $cat['slug'] }}' ? 'bg-seven-copper text-zinc-950 font-bold' : 'bg-seven-surface text-seven-muted hover:text-seven-sand border border-seven-border'" class="px-3.5 py-1.5 rounded-lg transition">
                        {{ $cat['name'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Spirits Bottle Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($b['products'] ?? [] as $prod)
                <div x-show="activeFilter === 'all' || activeFilter === '{{ $prod['category_slug'] ?? '' }}'" x-transition class="rounded-2xl bg-seven-surface border border-seven-border overflow-hidden flex flex-col justify-between hover:border-seven-copper/50 transition-all shadow-xl group">
                    <div>
                        <!-- Bottle Image Banner -->
                        <div class="aspect-4/3 w-full overflow-hidden bg-seven-dark relative border-b border-seven-border">
                            <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 left-3 text-[10px] font-mono font-bold uppercase px-2.5 py-1 rounded-md bg-seven-dark/80 backdrop-blur-xs text-seven-copper border border-seven-copper/30">
                                {{ $prod['badge'] }}
                            </span>
                        </div>

                        <!-- Card Details -->
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between text-xs font-mono">
                                <span class="text-seven-muted">{{ $prod['category'] }}</span>
                                <span class="text-seven-copper font-bold">{{ $prod['proof'] }}</span>
                            </div>

                            <h3 class="font-garamond text-2xl font-bold text-seven-sand leading-snug">{{ $prod['name'] }}</h3>

                            <p class="text-xs text-seven-muted leading-relaxed">{{ $prod['description'] }}</p>

                            <!-- Tasting Note Chips -->
                            <div class="flex flex-wrap gap-1.5 pt-2">
                                @foreach ($prod['tasting_notes'] ?? [] as $note)
                                    <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-seven-card text-seven-sand/80 border border-seven-border">
                                        ✦ {{ $note }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Footer & Price -->
                    <div class="p-6 pt-0 border-t border-seven-border/50 flex items-center justify-between gap-4 mt-4">
                        <span class="text-xl font-garamond font-bold text-seven-sand">{{ $prod['price'] }}</span>
                        <button @click="cartCount++; alert('Added {{ addslashes($prod['name']) }} to Cart (Speakeasy / Barcart Direct Connect)')" class="px-4 py-2 rounded-lg bg-seven-copper hover:bg-seven-copper-hover text-zinc-950 font-mono text-xs font-bold transition flex items-center gap-1.5">
                            <i class="fa-solid fa-cart-shopping text-[10px]"></i>
                            <span>Purchase</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
