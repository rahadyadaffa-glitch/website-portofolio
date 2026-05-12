<section id="contact" class="py-40 relative bg-transparent" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center transition-all duration-1000"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">

        <div class="w-20 h-2 bg-[var(--accent)] mx-auto mb-10"></div>
        <h2 class="text-6xl sm:text-8xl font-black text-[var(--text-main)] tracking-tighter mb-8 leading-none">Let's
            Talk.</h2>
        <p class="text-xl text-[var(--text-dim)] mb-16 max-w-xl mx-auto font-medium leading-relaxed">
            Currently looking for new opportunities in <span
                class="text-[var(--text-main)] font-bold underline decoration-[var(--accent)] decoration-2">Cybersecurity</span>.
            Whether you have a question or just want to say hi, I'll get back to you!
        </p>

        <div class="flex flex-col sm:flex-row flex-wrap items-center justify-center gap-6">
            <!-- Email -->
            <a href="mailto:rahadyadaffa@gmail.com"
                class="flex items-center gap-4 px-8 py-4 neo-shadow border-2 border-[var(--border)] bg-white text-[var(--text-main)] hover:bg-[var(--accent)] hover:text-white hover:-translate-y-1 transition-all duration-300 group font-bold text-xl uppercase tracking-widest min-w-[220px]">
                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Email
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/daffarahadya" target="_blank" rel="noopener"
                class="flex items-center gap-4 px-8 py-4 neo-shadow border-2 border-[var(--border)] bg-white text-[var(--text-main)] hover:bg-[var(--accent)] hover:text-white hover:-translate-y-1 transition-all duration-300 group font-bold text-xl uppercase tracking-widest min-w-[220px]">
                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                </svg>
                LinkedIn
            </a>

            <!-- GitHub -->
            <a href="https://github.com/rahadyadaffa-glitch" target="_blank" rel="noopener"
                class="flex items-center gap-4 px-8 py-4 neo-shadow border-2 border-[var(--border)] bg-white text-[var(--text-main)] hover:bg-[var(--accent)] hover:text-white hover:-translate-y-1 transition-all duration-300 group font-bold text-xl uppercase tracking-widest min-w-[220px]">
                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" clip-rule="evenodd" />
                </svg>
                GitHub
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/6281343139894" target="_blank" rel="noopener"
                class="flex items-center gap-4 px-8 py-4 neo-shadow border-2 border-[var(--border)] bg-white text-[var(--text-main)] hover:bg-[var(--accent)] hover:text-white hover:-translate-y-1 transition-all duration-300 group font-bold text-xl uppercase tracking-widest min-w-[220px]">
                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                WhatsApp
            </a>
        </div>

    </div>
</section>