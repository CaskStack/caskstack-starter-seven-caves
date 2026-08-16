@php
    $b = $block ?? $data ?? [];
@endphp
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden py-20 px-4 sm:px-6 lg:px-8 border-b border-seven-border">
    <!-- Ambient Ocean & Copper Glow -->
    <div class="absolute inset-0 pointer-events-none opacity-30">
        <div class="absolute top-1/4 left-1/3 w-[600px] h-[600px] rounded-full blur-[140px] bg-radial from-seven-teal via-seven-copper/20 to-transparent"></div>
    </div>

    <div class="relative max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left 7 Cols: Distiller Manifesto & Headlines -->
        <div class="lg:col-span-7 space-y-6 text-left">
            <div class="flex flex-wrap items-center gap-3">
                <span class="px-3.5 py-1 rounded-full text-xs font-mono font-bold tracking-widest uppercase bg-seven-copper/15 text-seven-copper border border-seven-copper/30">
                    ★ {{ $b['badge'] ?? '100% Scratch Pot Distilled' }}
                </span>
                <span class="px-3 py-1 rounded-full text-xs font-mono text-seven-sand bg-seven-surface border border-seven-border">
                    {{ $b['badge_callout'] ?? '120 Bottles / Run' }}
                </span>
            </div>

            <h1 class="font-garamond text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight text-seven-sand leading-[1.08]">
                {{ $b['headline'] ?? 'Ludicrously Small Batch Craft Spirits' }}
            </h1>

            <p class="text-base sm:text-lg text-seven-muted max-w-2xl leading-relaxed">
                {{ $b['subheadline'] ?? 'We do not buy mass quantities of cheap bulk liquor from huge plants, slap our name on it and call it good. Every single drop is distilled by hand from pure whole ingredients in San Diego, California.' }}
            </p>

            <!-- Metrics Matrix Strip -->
            <div class="grid grid-cols-3 gap-4 pt-4 border-t border-seven-border">
                <div class="space-y-1">
                    <span class="text-2xl font-bold font-garamond text-seven-copper">120</span>
                    <span class="block text-[10px] font-mono uppercase text-seven-muted">Bottles / Batch</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl font-bold font-garamond text-seven-sand">100%</span>
                    <span class="block text-[10px] font-mono uppercase text-seven-muted">Copper Pot Distilled</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl font-bold font-garamond text-seven-copper">0%</span>
                    <span class="block text-[10px] font-mono uppercase text-seven-muted">Sourced NGS Bulk</span>
                </div>
            </div>

            <!-- CTAs -->
            <div class="flex flex-wrap items-center gap-4 pt-4">
                <a href="{{ $b['cta_primary_url'] ?? '#spirits-matrix' }}" class="px-6 py-3.5 rounded-xl bg-seven-copper hover:bg-seven-copper-hover text-zinc-950 font-mono text-xs font-extrabold uppercase tracking-wider transition shadow-xl flex items-center gap-2">
                    <span>{{ $b['cta_primary'] ?? 'Explore Spirits' }}</span>
                    <i class="fa-solid fa-arrow-down text-[10px]"></i>
                </a>
                <a href="{{ $b['cta_secondary_url'] ?? '#tasting-room' }}" class="px-6 py-3.5 rounded-xl bg-seven-surface hover:bg-seven-card text-seven-sand border border-seven-border font-mono text-xs font-bold uppercase tracking-wider transition flex items-center gap-2">
                    <span>{{ $b['cta_secondary'] ?? 'Book Tasting' }}</span>
                </a>
            </div>
        </div>

        <!-- Right 5 Cols: Showcase Image & Distiller Quote -->
        <div class="lg:col-span-5 relative">
            <div class="rounded-3xl overflow-hidden border border-seven-border bg-seven-surface shadow-2xl relative aspect-4/5 group">
                <img src="{{ $b['hero_image'] ?? 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=1600&q=80' }}" alt="Pot Still Distillation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-seven-dark via-transparent to-transparent flex flex-col justify-end p-8">
                    <span class="text-xs font-mono uppercase text-seven-copper tracking-widest">Master Distiller</span>
                    <h3 class="font-garamond text-xl font-bold text-seven-sand">Geoff Longenecker</h3>
                    <p class="text-xs text-seven-muted pt-1">"If it's in our bottle, we fermented it, we distilled it, and we barreled it."</p>
                </div>
            </div>
        </div>

    </div>
</section>
