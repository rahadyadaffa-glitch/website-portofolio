<section id="portfolio" class="py-24 sm:py-32 relative bg-transparent" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-1000"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

        <div class="mb-24">
            <h2 class="text-4xl sm:text-7xl font-black text-[var(--text-main)] tracking-tighter uppercase mb-2">
                {{ __('messages.section_titles.portfolio') }}
            </h2>
            <div class="w-32 h-2 bg-[var(--accent)]"></div>
        </div>

        @php
            $portfolio = config('portfolio');
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 lg:gap-24 mt-20">

            @foreach($portfolio as $key => $item)
                @php
                    // Random-ish rotation for the paper feel
                    $rotations = ['-1deg', '1deg', '-0.5deg', '0.5deg'];
                    $rot = $rotations[$loop->index % count($rotations)];
                @endphp
                <div class="relative pt-8">
                    <!-- Tape Piece -->
                    <div class="tape-piece"></div>

                    <a href="{{ $item['github_url'] }}" target="_blank" rel="noopener noreferrer"
                        class="group relative block neo-paper p-10 sm:p-14 overflow-hidden paper-texture"
                        style="transform: rotate({{ $rot }});">

                        <div class="relative z-10 flex flex-col h-full items-start">

                            <div
                                class="w-20 h-20 mb-10 text-[var(--accent)] group-hover:scale-125 group-hover:rotate-6 transition-all duration-500">
                                {!! str_replace('currentColor', 'currentColor', $item['icon']) !!}
                            </div>

                            <h3
                                class="text-4xl font-black text-[var(--text-main)] tracking-tighter pb-3 group-hover:underline decoration-[var(--accent)] decoration-4 transition-all duration-500 leading-none uppercase">
                                {{ $item['label'] }}
                            </h3>

                            <p
                                class="mt-6 text-lg text-[var(--text-dim)] group-hover:text-[var(--text-main)] transition-colors duration-500 font-medium leading-relaxed">
                                {{ $item['sublabel'] }}
                            </p>

                            <!-- GitHub CTA Pill -->
                            <div
                                class="mt-12 inline-flex items-center gap-3 font-black text-[var(--text-main)] border-b-4 border-[var(--accent)] pb-2 transition-all group-hover:border-[var(--text-main)] uppercase tracking-[0.2em] text-sm">
                                Browse on GitHub
                                <svg aria-hidden="true" class="w-6 h-6 transition-transform group-hover:translate-x-3" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>