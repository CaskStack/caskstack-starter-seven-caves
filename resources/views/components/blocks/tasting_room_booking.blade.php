@php
    $b = $block ?? $data ?? [];
@endphp
<section id="tasting-room" class="py-24 px-4 sm:px-6 lg:px-8 bg-[#0C1821] relative">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <div class="lg:col-span-6 space-y-6">
            <span class="text-xs font-mono uppercase tracking-widest text-seven-copper font-bold">San Diego Distillery Visits</span>
            <h2 class="font-garamond text-3xl sm:text-5xl font-bold text-seven-sand leading-tight">
                {{ $b['headline'] ?? 'Visit the Miramar Distillation Lab & Speakeasy' }}
            </h2>
            <p class="text-sm text-seven-muted leading-relaxed">
                {{ $b['subheadline'] ?? '' }}
            </p>

            <div class="space-y-3 pt-2 text-xs font-mono text-seven-muted border-t border-seven-border">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-location-dot text-seven-copper text-sm w-4"></i>
                    <span>{{ $b['address'] ?? '8655 Production Ave, Suite C, San Diego, CA 92121' }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-phone text-seven-copper text-sm w-4"></i>
                    <span>{{ $b['phone'] ?? '(619) 300-1624' }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-clock text-seven-copper text-sm w-4"></i>
                    <span>{{ $b['hours'] ?? 'Thurs - Sat: 1:00 PM – 7:00 PM' }}</span>
                </div>
            </div>
        </div>

        <div class="lg:col-span-6 space-y-4">
            @foreach ($b['tasting_experiences'] ?? [] as $exp)
                <div class="rounded-2xl bg-seven-surface border border-seven-border p-6 space-y-4 hover:border-seven-copper transition shadow-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-garamond text-2xl font-bold text-seven-sand">{{ $exp['name'] }}</h3>
                            <span class="text-xs font-mono text-seven-muted">Duration: {{ $exp['duration'] }}</span>
                        </div>
                        <span class="font-garamond text-2xl font-bold text-seven-copper">{{ $exp['price'] }}</span>
                    </div>

                    <ul class="space-y-1.5 text-xs text-seven-muted font-mono">
                        @foreach ($exp['includes'] ?? [] as $inc)
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-seven-copper text-[10px]"></i>
                                <span>{{ $inc }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <button @click="alert('Booking reservation system for {{ addslashes($exp['name']) }}')" class="w-full py-2.5 rounded-xl bg-seven-copper hover:bg-seven-copper-hover text-zinc-950 font-mono text-xs font-bold uppercase tracking-wider transition">
                        Reserve Flight Slot
                    </button>
                </div>
            @endforeach
        </div>

    </div>
</section>
