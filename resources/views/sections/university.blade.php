<section id="education" class="py-24 sm:py-32 relative bg-transparent" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-1000"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

        <div class="mb-24">
            <h2 class="text-4xl sm:text-7xl font-black text-[var(--text-main)] tracking-tighter uppercase mb-2">
                {{ __('messages.section_titles.university') }}
            </h2>
            <div class="w-32 h-2 bg-[var(--accent)]"></div>
        </div>

        <div
            class="flex flex-col sm:flex-row sm:items-center justify-between border-y border-[var(--border)] py-12 gap-8 group hover:bg-[var(--bg-alt)] transition-all px-4 sm:px-8 -mx-4 sm:-mx-8 cursor-default neo-shadow outline-none border-t-0">

            <div class="flex items-center gap-8">
                <!-- University Logo -->
                <div
                    class="w-20 h-20 shrink-0 bg-transparent flex items-center justify-center rounded-none group-hover:scale-110 transition-all duration-500 overflow-hidden">
                    <img src="/images/university/university-logo.webp" alt="University Logo"
                        width="80" height="80" loading="lazy" decoding="async"
                        class="w-full h-full object-contain mix-blend-multiply">
                </div>

                <div>
                    <h3 class="text-3xl font-black text-[var(--text-main)] tracking-tight">
                        {{ __('messages.university.name') }}
                    </h3>
                    <p class="text-[var(--text-dim)] font-bold text-xl mt-2">
                        {{ __('messages.university.degree') }}
                    </p>
                    <!--<p class="text-[var(--text-dim)] font-bold text-xl mt-2 italic">GPA: <span class="text-[var(--text-main)] not-italic">3.85 / 4.00</span></p>-->
                </div>
            </div>

            <div class="sm:text-right">
                <span
                    class="text-[var(--text-main)] font-black text-2xl tracking-widest uppercase">{{ __('messages.university.period') }}</span>
            </div>

        </div>

    </div>
</section>