<section id="certificate" class="py-24 sm:py-32 relative bg-transparent" x-data="{ shown: false, expandedImage: null }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-1000"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

        <div class="mb-24">
            <h2 class="text-4xl sm:text-7xl font-black text-[var(--text-main)] tracking-tighter uppercase mb-2">
                {{ __('messages.section_titles.certificate') }}
            </h2>
            <div class="w-32 h-2 bg-[var(--accent)]"></div>
        </div>

        @php
            $certs = [
                [
                    'id' => 1,
                    'title' => 'SOC for Beginner ',
                    'platform' => 'Jagoan Siber',
                    'desc' => 'Ranked 3rd in a Jeopardy-style CTF competition as a Final Project. I successfully tackled complex challenges across all core categories: scenario reading, SIEM analysis, network forensics, memory forensics, threat hunting, threat intelligence, alert triaging, and incident reporting.',
                    'has_leaderboard' => true,
                    'img_cert' => '/images/certification/Sertifikat-SOC.webp',
                    'img_leaderboard' => '/images/certification/Leaderboard-SOC-Analyst.webp'
                ],
                [
                    'id' => 2,
                    'title' => 'Ethical Hacking for Beginner',
                    'platform' => 'Jagoan Siber',
                    'desc' => 'Secured 3rd place in a comprehensive Ethical Hacking assessment by identifying 26 vulnerabilities across two dedicated laboratory environments. Vulnerability that I found including Remote Code Execution (RCE), Cross-Site Scripting (XSS), Information Disclosure, and Broken Access Control.',
                    'has_leaderboard' => true,
                    'img_cert' => '/images/certification/Sertifikat-Ethical-Hacking.webp',
                    'img_leaderboard' => '/images/certification/Leaderboard-Ethical-Hacking.webp'
                ]
            ];
        @endphp

        <!-- Square Grid -->
        <div class="flex flex-col sm:flex-row gap-8 max-w-5xl mx-auto">
            @foreach($certs as $cert)
                <div class="group flex-1 min-h-[280px] bg-[var(--bg-alt)] flex flex-col justify-between p-10 neo-border neo-shadow cursor-pointer hover:border-[var(--accent)] transition-all font-display"
                    @click="expandedCert = {{ json_encode($cert) }}">

                    <div class="flex flex-col items-center">
                        <div
                            class="mb-6 px-5 py-2 bg-[var(--bg-alt)] border-2 border-[var(--border)] text-xs font-black uppercase tracking-widest text-[var(--text-main)] shadow-sm">
                            {{ $cert['platform'] }}
                        </div>
                        <h3
                            class="text-3xl sm:text-4xl font-black text-[var(--text-main)] text-center leading-none tracking-tighter group-hover:text-[var(--accent)] transition-colors">
                            {{ $cert['title'] }}
                        </h3>
                    </div>

                    <div class="flex flex-col items-center">
                        <p
                            class="text-xs font-black text-[var(--text-dim)] group-hover:text-[var(--text-main)] transition-colors tracking-[0.3em] uppercase flex items-center gap-3">
                            View Certificate
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Alpine.js Modal Lightbox -->
        <template x-teleport="body">
            <div x-show="expandedCert" style="display: none;" class="fixed inset-0 z-[100] overflow-y-auto"
                aria-labelledby="modal-title" role="dialog" aria-modal="true"
                x-effect="expandedCert ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden')">
                <!-- Backdrop -->
                <div x-show="expandedCert" x-transition.opacity class="fixed inset-0 bg-white/95 backdrop-blur-sm"
                    @click="expandedCert = null"></div>

                <div class="flex min-h-full items-center justify-center p-4 sm:p-6 lg:p-8 relative z-10">

                    <!-- Close button -->
                    <button @click="expandedCert = null"
                        class="fixed top-4 right-4 z-[110] sm:top-8 sm:right-8 p-3 rounded-full bg-gray-100 hover:bg-gray-200 text-black transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Modal Panel -->
                    <div x-show="expandedCert" x-transition:enter="ease-out duration-500"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="relative w-full max-w-7xl z-10 flex flex-col lg:flex-row gap-0 bg-[var(--bg)] neo-shadow neo-border overflow-hidden">

                        <!-- LEFT PANEL (50%): Main Certificate -->
                        <div class="w-full lg:w-1/2 bg-white p-6 sm:p-12 flex items-center justify-center border-b lg:border-b-0 lg:border-r border-[var(--border)] cursor-zoom-in group/img"
                            @click="expandedImage = expandedCert?.img_cert">
                            <div
                                class="w-full h-full flex flex-col items-center justify-center min-h-[250px] lg:min-h-[400px]">
                                <img :src="expandedCert?.img_cert" :alt="expandedCert?.title"
                                    class="w-full object-contain max-h-[80vh] shadow-2xl transition-transform duration-500 group-hover/img:scale-[1.02]">
                                <span
                                    class="mt-4 text-[10px] font-black uppercase tracking-widest text-zinc-400 group-hover/img:text-[var(--accent)] transition-colors">Click
                                    to Expand</span>
                            </div>
                        </div>

                        <!-- RIGHT PANEL (50%): Leaderboard + Description -->
                        <div class="w-full lg:w-1/2 flex flex-col bg-[var(--bg-alt)]">

                            <!-- Top: Leaderboard Image (Compact) -->
                            <div x-show="expandedCert?.has_leaderboard"
                                class="w-full p-6 border-b border-[var(--border)] bg-white/50 cursor-zoom-in group/img"
                                @click="expandedImage = expandedCert?.img_leaderboard">
                                <p
                                    class="text-[0.55rem] font-black uppercase tracking-[0.4em] text-[var(--accent)] mb-3 italic">
                                    Achievement Verification</p>
                                <div
                                    class="w-full min-h-[180px] flex items-center justify-center overflow-hidden neo-border bg-white shadow-inner">
                                    <img :src="expandedCert?.img_leaderboard"
                                        class="w-full h-auto max-h-[30vh] object-contain transition-transform duration-500 group-hover/img:scale-[1.05]"
                                        alt="Leaderboard details">
                                </div>
                                <p
                                    class="mt-2 text-center text-[9px] font-black uppercase tracking-widest text-zinc-400 group-hover/img:text-[var(--accent)] transition-colors">
                                    Click to Expand Achievement</p>
                            </div>

                            <!-- Bottom: Text Details -->
                            <div class="flex-1 p-6 sm:p-10 flex flex-col justify-center">
                                <div class="w-10 h-1 bg-[var(--accent)] mb-6"></div>
                                <h3 class="text-3xl sm:text-4xl font-black text-[var(--text-main)] mb-4 tracking-tighter uppercase leading-none"
                                    x-text="expandedCert?.title"></h3>
                                <p class="text-[var(--text-dim)] text-base leading-relaxed italic"
                                    x-text="expandedCert?.desc"></p>

                                <div class="mt-12 pt-8 border-t border-[var(--border)]/50">
                                    <button @click="expandedCert = null"
                                        class="text-sm font-black uppercase tracking-widest text-[var(--text-main)] hover:text-[var(--accent)] transition-colors flex items-center gap-3">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                        </svg>
                                        Back to Gallery
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </template>

        <!-- Full-Screen Image Lightbox (Second Level) -->
        <template x-teleport="body">
            <div x-show="expandedImage" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;"
                class="fixed inset-0 z-[200] flex items-center justify-center p-4 bg-black/95 backdrop-blur-md">

                <button @click="expandedImage = null"
                    class="absolute top-8 right-8 p-4 rounded-full bg-white/10 hover:bg-white/20 text-white transition-all">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="w-full h-full flex items-center justify-center p-8" @click="expandedImage = null">
                    <img :src="expandedImage" class="max-w-full max-h-full object-contain shadow-2xl" @click.stop>
                </div>
            </div>
        </template>

    </div>
</section>