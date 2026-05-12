<!-- About Section -->
<section id="about" class="pt-48 pb-24 relative overflow-hidden" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Top Title Row -->
        <div class="mb-16 transition-all duration-1000"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <p class="text-3xl sm:text-5xl text-[var(--text-main)] font-bold mb-6 tracking-tight">
                Hi, I'm Daffa Rahadya Atmawiguna.
            </p>
            <h1 class="text-4xl sm:text-6xl md:text-7xl font-black tracking-[0.1em] leading-tight uppercase glitch">
                <span class="glitch-text text-[var(--text-main)]"
                    data-text="{{ __('messages.hero.headline') }}">{{ __('messages.hero.headline') }}</span>
            </h1>
        </div>

        <div class="flex flex-col md:flex-row items-start justify-between gap-16 transition-all duration-1000 delay-200"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

            <!-- Left: Text Box -->
            <div class="flex-1 md:pr-12">

                <div class="space-y-6 text-[var(--text-dim)] mb-16 text-xl leading-relaxed font-medium max-w-2xl">
                    <p>{{ __('messages.hero.bio1') }}</p>
                    <p>{{ __('messages.hero.bio2') }}</p>
                </div>

                <div class="flex flex-wrap gap-6">
                    <a href="#portfolio"
                        class="px-10 py-5 bg-[var(--accent)] text-white font-bold text-xl neo-shadow neo-shadow-hover neo-border-accent uppercase tracking-widest hover:brightness-110 transition-all">
                        {{ __('messages.hero.cta_portfolio') }}
                    </a>
                    <a href="/images/cv/CV_Daffa Rahadya Atmawiguna.pdf" target="_blank"
                        class="px-10 py-5 bg-white text-[var(--text-main)] font-bold text-xl neo-shadow neo-shadow-hover border-2 border-[var(--border)] uppercase tracking-widest hover:bg-gray-50 transition-all flex items-center gap-2">
                        {{ __('messages.hero.cta_view_cv') }}
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </a>
                    <a href="/images/cv/CV_Daffa Rahadya Atmawiguna.pdf" download
                        class="px-10 py-5 bg-white text-[var(--text-main)] font-bold text-xl neo-shadow neo-shadow-hover border-2 border-[var(--border)] uppercase tracking-widest hover:bg-gray-50 transition-all flex items-center gap-2">
                        {{ __('messages.hero.cta_cv') }}
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Right: Avatar (Studio Box) -->
            <div class="w-full md:w-5/12 flex shrink-0 justify-center md:justify-end">
                <div class="w-[85%] aspect-[4/5] bg-[var(--bg-alt)] relative p-4 neo-shadow neo-border">
                    <div
                        class="w-full h-full overflow-hidden grayscale contrast-110 hover:grayscale-0 transition-all duration-1000">
                        <img src="/images/about/profile.webp" alt="Daffa Rahadya Atmawiguna" class="object-cover w-full h-full">
                    </div>
                    <!-- Decorative Tan Square -->
                    <div
                        class="absolute -bottom-6 -right-6 w-12 h-12 bg-[var(--accent)] neo-border hidden sm:block shadow-lg">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Dedicated Skills Section -->
<section id="skills" class="py-32 bg-[#fafafa] border-t border-gray-100 relative" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-1000"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

        <div class="mb-12">
            <h2 class="text-4xl font-extrabold text-gray-900 tracking-tighter">Core Skills</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
                <span
                    class="text-sm font-bold text-gray-400 uppercase block mb-4">{{ __('messages.hero.skills_pentest') }}</span>
                <div class="flex flex-wrap gap-4">
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Sqlmap</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Burp
                        Suite</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Nmap</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Hashcat</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Nikto</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Ffuf</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Dirsearch</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Hydra</span>
                </div>
            </div>

            <div>
                <span
                    class="text-sm font-bold text-gray-400 uppercase block mb-4">{{ __('messages.hero.skills_soc') }}</span>
                <div class="flex flex-wrap gap-4">
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Wireshark</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Splunk</span>
                </div>
            </div>

            <div>
                <span
                    class="text-sm font-bold text-gray-400 uppercase block mb-4">{{ __('messages.hero.skills_os') }}</span>
                <div class="flex flex-wrap gap-4">
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Linux</span>
                    <span
                        class="px-6 py-3 bg-white text-gray-900 text-lg font-bold outline outline-1 outline-gray-200 shadow-sm hover:outline-black hover:bg-black hover:text-white transition-colors cursor-default">Windows</span>
                </div>
            </div>
        </div>

    </div>
</section>