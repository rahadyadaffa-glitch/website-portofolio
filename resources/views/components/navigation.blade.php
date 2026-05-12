<nav class="bg-[var(--bg)]/90 backdrop-blur-xl border-b border-[var(--border)] z-50 fixed top-0 w-full" 
     x-data="{ atTop: true, mobileMenuOpen: false }" 
     @scroll.window="atTop = (window.pageYOffset > 20) ? false : true">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-300" :class="atTop ? 'h-24' : 'h-16'">
        <div class="flex justify-between items-center h-full">
            
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="#" class="font-black text-3xl tracking-tighter text-black">Daffa.</a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#about" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.about') }}</a>
                <a href="#skills" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.skills') }}</a>
                <a href="#portfolio" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.portfolio') }}</a>
                <a href="#organization" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.organization') }}</a>
                <a href="#certificate" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.certificates') }}</a>
                <a href="#education" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.university') }}</a>
                <a href="#contact" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.contact') }}</a>
                <a href="/images/cv/CV_Daffa Rahadya Atmawiguna.pdf" target="_blank" class="text-xs font-black uppercase tracking-widest text-[var(--text-dim)] hover:text-[var(--accent)] transition-all">{{ __('messages.nav.cv') }}</a>
            </div>

            <!-- Mobile Menu Toggles -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-[var(--text-main)] p-2 focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            
        </div>
    </div>

    <!-- Mobile Menu Slide-down -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden bg-[var(--bg)] border-b border-[var(--border)] overflow-hidden" 
         style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-4">
            <a href="#about" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.about') }}</a>
            <a href="#skills" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.skills') }}</a>
            <a href="#portfolio" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.portfolio') }}</a>
            <a href="#organization" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.organization') }}</a>
            <a href="#certificate" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.certificates') }}</a>
            <a href="#education" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.university') }}</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3 border-b border-[var(--border)]/30">{{ __('messages.nav.contact') }}</a>
            <a href="/images/cv/CV_Daffa Rahadya Atmawiguna.pdf" target="_blank" @click="mobileMenuOpen = false" class="block text-sm font-black uppercase tracking-widest text-[var(--text-dim)] py-3">{{ __('messages.nav.cv') }}</a>
        </div>
    </div>
</nav>
