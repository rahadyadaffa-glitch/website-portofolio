<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth scroll-pt-20 sm:scroll-pt-28 bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daffa Rahadya Atmawiguna - Portfolio</title>
    <meta name="description" content="{{ __('messages.hero.tagline') }}">
    <meta name="theme-color" content="#F9F8F6">
    <meta name="robots" content="index, follow">

    <!-- Hide Alpine.js version from scanners (Information Leakage Mitigation) -->
    <script>
        (function () {
            let _alpine;
            Object.defineProperty(window, 'Alpine', {
                get() { return _alpine; },
                set(val) {
                    _alpine = val;
                    if (_alpine) {
                        try {
                            Object.defineProperty(_alpine, 'version', {
                                get: () => undefined,
                                configurable: true
                            });
                        } catch (e) { }
                    }
                },
                configurable: true
            });
        })();
    </script>

    <!-- Alpine.js Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts: preload for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@300;500;700&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@300;500;700&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@300;500;700&display=swap"
            rel="stylesheet">
    </noscript>

    <style>
        :root {
            --bg: #F9F8F6;
            --bg-alt: #EFE9E3;
            --accent: #C9B59C;
            --accent-glow: rgba(201, 181, 156, 0.3);
            --border: #D9CFC7;
            --text-main: #1A1A1A;
            /* Pure professional black */
            --text-dim: #4B4B4B;
            /* Dark charcoal */
            --lux-ease: cubic-bezier(0.65, 0, 0.35, 1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            /* Designer Grid Pattern (Stone) */
            background-image: radial-gradient(var(--border) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        h1,
        h2,
        h3,
        .font-display {
            font-family: 'Space Grotesk', sans-serif;
        }

        .grain {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.04;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        .neo-shadow {
            box-shadow: 8px 8px 0px 0px var(--border);
            transition: all 0.3s var(--lux-ease);
        }

        .neo-shadow-hover:hover {
            box-shadow: 12px 12px 0px 0px var(--accent);
            transform: translate(-4px, -4px);
        }

        .neo-border {
            border: 3px solid var(--border);
        }

        .neo-border-sm {
            border: 1px solid var(--border);
        }

        .neo-border-md {
            border: 2px solid var(--border);
        }

        .neo-border-accent {
            border: 3px solid var(--accent);
        }

        .neo-border-black {
            border: 3px solid var(--text-main);
        }

        /* --- Paper & Tape Concept --- */
        .tape-piece {
            position: absolute;
            top: -16px;
            left: 50%;
            transform: translateX(-50%) rotate(-2deg);
            width: 140px;
            height: 38px;
            background-color: rgba(217, 207, 199, 0.45);
            /* Muted Stone/Wash color */
            backdrop-filter: blur(2px);
            z-index: 40;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .tape-piece::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.1'/%3E%3C/svg%3E");
        }

        .paper-texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.6' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
        }

        .neo-paper {
            background-color: var(--bg-alt);
            border: 1px solid var(--border);
            box-shadow: 4px 4px 0px 0px var(--border);
            transition: all 0.5s var(--lux-ease);
        }

        .neo-paper:hover {
            box-shadow: 8px 8px 0px 0px var(--accent);
            transform: translate(-2px, -2px) rotate(0deg) !important;
        }

        .glitch {
            position: relative;
            display: inline-block;
        }

        .glitch-text::before,
        .glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.8;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }

        .glitch:hover .glitch-text::before {
            animation: glitch-anim 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
            color: #ff00ff;
            z-index: -1;
            transform: translate(-2px, 2px);
        }

        .glitch:hover .glitch-text::after {
            animation: glitch-anim 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
            color: #00ffff;
            z-index: -2;
            transform: translate(2px, -2px);
        }

        @keyframes glitch-anim {
            0% {
                transform: translate(0);
            }

            20% {
                transform: translate(-2px, 2px);
            }

            40% {
                transform: translate(-2px, -2px);
            }

            60% {
                transform: translate(2px, 2px);
            }

            80% {
                transform: translate(2px, -2px);
            }

            100% {
                transform: translate(0);
            }
        }

        .text-outline {
            -webkit-text-stroke: 1.5px black;
            color: transparent;
            transition: all 0.7s var(--lux-ease);
        }

        .glitch:hover .text-outline {
            -webkit-text-stroke: 1.5px transparent;
            color: black;
        }

        /* High-end utilities */
        .transition-lux {
            transition: all 0.7s var(--lux-ease);
        }

        /* Navbar offset — push main content below fixed nav */
        main {
            padding-top: 7.5rem; /* 120px = navbar(64) + ~56px gap (~1.5cm) on mobile */
        }

        @media (min-width: 640px) {
            main {
                padding-top: 6rem; /* 96px = h-24 desktop nav at top */
            }
        }
    </style>

    <!-- Vite / Tailwind -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#111111',
                            accent: '#2563eb' // subtle blue accent for links
                        }
                    }
                }
            }
        </script>
    @endif
</head>

<body class="bg-white text-gray-900 antialiased" x-data="{ expandedCert: null, expandedAchievement: null }">
    <!-- Skip to content link (keyboard accessibility) -->
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[9999] focus:px-4 focus:py-2 focus:bg-[var(--accent)] focus:text-white focus:font-bold focus:text-sm">
        Skip to main content
    </a>

    <div class="grain"></div>

    <x-navigation />

    <main id="main-content" class="overflow-x-clip">
        {{ $slot }}
    </main>

    <footer class="bg-white text-gray-600 py-12 text-center border-t border-gray-200 mt-20 transition-all duration-1000 delay-200" x-data="{ shown: false }"
        x-intersect.once.margin.-100px="shown = true"
        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
        <p class="text-sm">&copy; {{ date('Y') }} Daffa Rahadya Atmawiguna. All rights reserved.</p>
    </footer>

</body>

</html>