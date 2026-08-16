@php
    $b = $block ?? $data ?? [];
@endphp
<section id="exploratory" class="py-20 px-4 sm:px-6 lg:px-8 border-b border-seven-border bg-seven-dark relative overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="max-w-2xl space-y-2">
            <span class="text-xs font-mono uppercase tracking-widest text-seven-copper font-bold">Limited Allocation</span>
            <h2 class="font-garamond text-3xl sm:text-5xl font-bold text-seven-sand">{{ $b['headline'] ?? 'The Exploratory Micro-Vault' }}</h2>
            <p class="text-xs sm:text-sm text-seven-muted">{{ $b['subheadline'] ?? '' }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($b['vault_items'] ?? [] as $item)
                <div class="rounded-2xl bg-seven-surface border border-seven-border p-6 space-y-3 hover:border-seven-teal transition flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-mono px-2.5 py-0.5 rounded-full bg-seven-teal/40 text-seven-sand border border-seven-teal">{{ $item['badge'] }}</span>
                            <span class="font-garamond text-lg font-bold text-seven-copper">{{ $item['price'] }}</span>
                        </div>
                        <h3 class="font-garamond text-xl font-bold text-seven-sand">{{ $item['title'] }}</h3>
                        <p class="text-xs text-seven-muted leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                    <button class="w-full mt-4 py-2 rounded-lg bg-seven-card hover:bg-seven-surface border border-seven-border text-seven-sand font-mono text-xs transition">
                        View Vault Details →
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
