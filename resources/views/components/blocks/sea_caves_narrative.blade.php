@php
    $b = $block ?? $data ?? [];
@endphp
<section id="about" class="py-24 px-4 sm:px-6 lg:px-8 border-b border-seven-border bg-seven-dark relative">
    <div class="max-w-7xl mx-auto space-y-16">
        
        <!-- Section Header -->
        <div class="max-w-3xl space-y-4">
            <span class="text-xs font-mono uppercase tracking-widest text-seven-copper font-bold">
                {{ $b['eyebrow'] ?? 'The Legend of the 7 Caves' }}
            </span>
            <h2 class="font-garamond text-3xl sm:text-5xl font-bold text-seven-sand leading-tight">
                {{ $b['headline'] ?? 'Forged by the Pacific Ocean. Inspired by La Jolla's 7 Sea Caves.' }}
            </h2>
            <div class="space-y-4 text-seven-muted text-base leading-relaxed pt-2">
                <p>{{ $b['story_p1'] ?? '' }}</p>
                <p>{{ $b['story_p2'] ?? '' }}</p>
            </div>
        </div>

        <!-- 4 Pillars Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($b['pillars'] ?? [] as $pillar)
                <div class="rounded-2xl bg-seven-surface border border-seven-border p-6 space-y-3 hover:border-seven-copper/50 transition shadow-lg">
                    <div class="w-12 h-12 rounded-xl bg-seven-teal/30 border border-seven-teal text-seven-copper flex items-center justify-center text-xl">
                        <i class="{{ $pillar['icon'] ?? 'fa-solid fa-award' }}"></i>
                    </div>
                    <h3 class="font-garamond text-xl font-bold text-seven-sand">{{ $pillar['title'] }}</h3>
                    <p class="text-xs text-seven-muted leading-relaxed">{{ $pillar['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
