Product Requirements Document (PRD)
Web Portofolio Static - Cybersecurity Profile
Version: 1.0
Date: April 2026
Product Manager: Senior PM
Tech Stack: Laravel 11 (Static Site Generator) + Tailwind CSS
Status: Draft for Development

1. Executive Summary
1.1 Project Overview
Website portofolio single-page static yang menampilkan profil profesional sebagai mahasiswa Informatika & Cybersecurity enthusiast. Website dirancang dengan pendekatan mobile-first, performa tinggi (<1s load time), 
1.2 Core Value Proposition
    • Instant Portfolio: Showcase kemampuan cybersecurity (Pentest & SOC) tanpa kompleksitas backend
    • Performance First: Static site generation memastikan loading kilat dan SEO optimal
    • Professional Presence: Layout terstruktur mirip LinkedIn untuk kredibilitas profesional
1.3 Success Metrics
    • Lighthouse Performance Score: >95
    • First Contentful Paint (FCP): <0.8s
    • Time to Interactive (TTI): <1s
    • SEO Score: >95
    • Accessibility Score: >95

2. Functional Requirements
2.1 Navigation System (Sticky Header)
FR-NAV-01: Sticky Navigation Bar
    • Position: Fixed top, z-index 50
    • Behavior:
        ◦ Transparent pada posisi top (0-50px scroll)
        ◦ Background blur + shadow muncul setelah scroll >50px
        ◦ Transition smooth 300ms
    • Elements:
        ◦ Logo/Name (kiri)
        ◦ Navigation Links (kanan): About, Portfolio, Organization, Certificate, University
        ◦ Language Switcher (ID/EN toggle)
        ◦ Mobile: Hamburger menu dengan slide-in drawer
FR-NAV-02: Smooth Scroll Navigation
    • Anchor links dengan offset 80px (menghindari overlap sticky header)
    • Active state indicator pada menu item sesuai section yang terlihat
    • URL hash update saat scroll (untuk shareable links)
FR-NAV-03: Language Switcher
    • Toggle switch atau dropdown di navbar
    • Flag icons (🇮🇩/🇬🇧) dengan label "ID"/"EN"
    • Persist language preference di localStorage
    • Instant switch tanpa reload (content sudah preload)

2.2 Section: Hero/About
FR-ABT-01: Content Structure
    • Profile Image: Circular avatar, 120px-150px, border-4 border-primary
    • Headline:
        ◦ ID: "Mahasiswa Informatika & Cybersecurity Enthusiast"
        ◦ EN: "Informatics Student & Cybersecurity Enthusiast"
    • Tagline: Short hook (1 line) tentang passion di cybersecurity
    • Bio: 2-3 paragraf singkat (max 150 words per language)
    • CTA Buttons: "View Portfolio" (scroll ke section Portfolio), "Download CV" (link eksternal)
FR-ABT-02: Skills Showcase
Layout: Horizontal scrollable tags (mobile) atau flex wrap (desktop) Categories:
    • Penetration Testing: sqlmap, Burp Suite, Nmap, hashcat, Nikto, Gobuster, ffuf 
    • Security Operations:  Wireshark,Wazuh
Visual:
    • Icon + text untuk setiap skill
    • Hover effect: scale 1.05 + shadow
    • Grouped by category dengan label kecil

2.3 Section: Portfolio 
FR-PORT-01: Tab System (Simplified)
Layout: Two-tab interface dengan visual minimalis
    • Tab Aktif: Background solid + text white (atau primary color)
    • Tab Inaktif: Background transparent + border
Behavior:
    • Tidak ada konten detail di halaman
    • Area konten hanya menampilkan Icon/Ilustrasi besar + Label "Pentest" atau "SOC"
    • Seluruh area/card clickable mengarah ke GitHub repository masing-masing
FR-PORT-02: Pentest Tab Display
Visual Design:
    • Centered Layout: Icon/Ilustrasi security besar (Shield with bug/terminal icon)
    • Label: Text besar "Pentest" atau "Penetration Testing"
    • Sub-label (Opsional): "View Write-ups on GitHub" atau "Lihat Write-up di GitHub"
    • CTA: Tombol/outline "Browse on GitHub" atau icon GitHub besar
Interaction:
    • Click anywhere pada area tab → redirect ke https://github.com/username/pentest-writeups (atau repo spesifik)
    • Hover effect: Scale up icon + glow effect
    • Cursor: pointer


2.4 Section: Organization
FR-ORG-01: LinkedIn-Style Layout
Structure: Vertical timeline/list dengan card per item
Card Components:
    1. Logo/Organization Image: Square 60x60px atau 80x80px, rounded-lg, object-cover
    2. Position Title: Bold, text-lg (e.g., "Cybersecurity Research Assistant")
    3. Organization Name: text-base, text-gray-700 (e.g., "Universitas XYZ")
    4. Date Range: text-sm, text-gray-500 (e.g., "Jan 2024 - Present · 1 year 4 months")
    5. Description: 2-4 bullet points atau paragraf singkat tentang responsibilities & achievements
    6. Location: Optional (Remote/On-site/City)
    7. Photo Interaction: Foto diletakkan di sebelah kanan teks.
    • Initial State: Jika kursor tidak mengarah ke foto, beberapa foto (lebih dari satu) akan tampil berhimpit/bertumpuk (stacked) secara normal.
    • Hover State: Saat kursor diarahkan (hover) ke area foto, foto-foto tersebut akan membesar dan memencar (fan-out/scatter) secara dinamis agar setiap foto terlihat jelas.

FR-ORG-02: Visual Design
    • Left border: Timeline visual (garis vertikal dengan dot) atau clean card separation
    • Spacing: py-6 per item dengan border-bottom (kecuali item terakhir)
    • Image placement: Absolute left, content padding-left 100px (desktop)
    • Mobile: Image di atas text (stacked)
FR-ORG-03: Content Examples
    • Cybersecurity communities (e.g., "Member, Himpunan Mahasiswa IT Security")
    • Freelance/Part-time positions
    • University organizations
    • CTF Competition participations (sebagai experience)

2.5 Section: Certificate & Achievements
FR-CERT-01: Grid Layout
    • Desktop: 3 columns grid | Tablet: 2 columns | Mobile: 1 column (stacked).
    • Interactivity: Seluruh kartu (card) bersifat clickable untuk memicu modal detail.
FR-CERT-02: Card Components (Preview Mode)
    • Certificate Image: Ratio 16:9 atau 4:3 dengan subtle overlay saat hover (ikon "expand" atau teks "View Details").
    • Title: Nama sertifikasi/kompetisi (e.g., "Jagoan Siber CTF").
    • Issuer: Nama organisasi (e.g., "Kominfo / Cyber Academy").
    • Short Badge: Tag kategori kecil (e.g., "Competition", "Professional").
FR-CERT-03: Detail Modal (Pop-up) Saat kartu ditekan, muncul modal dengan konten yang lebih kaya:
    • Header: Title sertifikat dan Issuer.
    • Media Gallery:
        ◦ Main Certificate Image (Lightbox enabled).
        ◦ Leaderboard Screenshot: Opsional, gambar tambahan yang menunjukkan peringkat atau skor.
    • Dynamic Information:
        ◦ Achievement/Leaderboard Status: Teks atau badge khusus (e.g., "Rank #5 out of 500 participants" atau "Top 1% on TryHackMe").
        ◦ Activity Description: Paragraf singkat yang menjelaskan apa yang kamu lakukan (e.g., "Berhasil mengeksploitasi 5 mesin Linux dengan kerentanan Buffer Overflow dan Privilege Escalation").
        ◦ Earned Date: Bulan & Tahun.
    • Action Buttons:
        ◦ Verify Link: Link eksternal ke Credly/Sertifikat digital.
        ◦ Close Button.
FR-CERT-04: Technical Handling
    • Technical Handling:
    • Modal content bersifat static-generated (pre-rendered).
    • Gambar di dalam modal wajib menggunakan Lazy Loading (loading="lazy") agar tidak membebani First Contentful Paint (FCP) saat halaman pertama kali dibuka.
    • Image Format: Optimized WebP.
    • Modal Animation: Smooth fade-in atau scale-up.
2.6 Section: University
FR-UNI-01: Education Detail Card
Layout: Centered card atau left-aligned dengan icon
Content:
    • University Name: Bold, text-xl (e.g., "Universitas Indonesia")
    • Degree: (e.g., "Sarjana Informatika / Bachelor of Informatics")
    • Period: 2022 - 2026 (Expected)
    • Current GPA/IPK: X.XX/4.00 (prominent display)
    • Relevant Coursework:
        ◦ Network Security
        ◦ Ethical Hacking
        ◦ Digital Forensics
        ◦ Cryptography
    • Activities: Bullet points (e.g., "Ketua Lab Cybersecurity", "Peserta CTF National 2024")
FR-UNI-02: Visual Elements
    • University logo (jika ada)
    • Progress bar "Semester X of 8" atau "Year Y"
    • Achievement badges (Dean's List, scholarships)

3. Technical Requirements
3.1 Architecture
TR-ARCH-01: Static Site Generation (SSG)
    • Framework: Laravel 11 dengan laravel-export atau spatie/laravel-export
    • Output: Pure HTML/CSS/JS di folder dist/ atau public/build/
    • No Database: Semua content di-handle via:
        ◦ PHP Arrays/Config files untuk konten
        ◦ JSON files untuk data struktur
        ◦ Markdown untuk long-form content (opsional)
TR-ARCH-02: Internationalization (i18n)
    • Implementation: Laravel Localization (lang/ directory)
    • Structure:
      plain 
      Copy
      lang/
      ├── en/
      │   ├── about.php
      │   ├── portfolio.php
      │   ├── organization.php
      │   ├── certificate.php
      │   └── university.php
      └── 
    • Language Switcher: JavaScript-based toggle yang mengganti content tanpa reload (pre-rendered dual language atau AJAX fetch)
    • URL Strategy:
        ◦ 
        ◦ English: /?lang=en atau subdomain en. (dipilih: query parameter untuk simplicity static site)
TR-ARCH-03: Asset Optimization
    • Images:
        ◦ Format: WebP dengan fallback JPG/PNG
        ◦ Resolusi: Multiple sizes (srcset) untuk responsive
        ◦ Compression: TinyPNG atau similar
        ◦ Lazy loading: Native loading="lazy"
    • CSS:
        ◦ Tailwind CSS dengan purge/BT4 (Build-time optimization)
        ◦ Critical CSS inline untuk above-the-fold
        ◦ Minified output
    • JS:
        ◦ Vanilla JavaScript (no heavy frameworks)
        ◦ Minified dan defer/async loading
        ◦ Intersection Observer untuk scroll animations
TR-ARCH-04: Data Handling
    • Semua konten statis (About, Org, Certs) dikelola via PHP Arrays di folder config/ agar mudah di-update tanpa menyentuh struktur HTML.

3.2 Performance Requirements
TR-PERF-01: Load Time < 1 Second
Target Metrics:
    • FCP (First Contentful Paint): <0.8s
    • LCP (Largest Contentful Paint): <1.2s
    • CLS (Cumulative Layout Shift): <0.1
Implementation:
    • Preconnect ke domain eksternal (GitHub, CDN)
    • Inline critical CSS
    • Async loading untuk non-critical CSS/JS
    • Font-display: swap untuk custom fonts
    • Minimize HTTP requests (bundle assets)
TR-PERF-02: Caching Strategy
    • Service Worker: Optional untuk offline viewing (PWA features)
    • Cache Headers: Long-term caching untuk static assets (versioned filenames)
    • CDN Ready: Struktur folder mendukung deploy ke Vercel/Netlify/Cloudflare Pages
3.3 Responsive Design
TR-RSP-01: Breakpoints
    • Mobile: < 640px (default)
    • Tablet: 640px - 1024px
    • Desktop: > 1024px
    • Large Desktop: > 1280px
TR-RSP-02: Mobile-First Approach
    • Base styling untuk mobile
    • Progressive enhancement untuk desktop
    • Touch targets minimal 44x44px
    • Font size minimal 16px (prevent zoom on iOS)
    • Navigation: Hamburger menu dengan smooth drawer
    • Portfolio tabs: Full width touch-friendly
TR-RSP-03: Accessibility (a11y)
    • WCAG 2.1 Level AA compliance
    • Semantic HTML5 structure
    • ARIA labels untuk navigation dan interactive elements
    • Keyboard navigation support (Tab, Enter, Escape)
    • Focus indicators yang jelas
    • Alt text untuk semua images
    • Color contrast ratio minimal 4.5:1
    • Reduced motion support (prefers-reduced-motion)

Data Structure (Simplified):
php 
Copy
'portfolio' => [
    'pentest' => [
        'github_url' => 'https://github.com/username/pentest-writeups',
        'icon' => 'shield-bug', // atau path ke svg/icon
        'label' => ['id' => 'Pentest', 'en' => 'Pentest']
    ],
    'soc' => [
        'github_url' => 'https://github.com/username/soc-analysis',
        'icon' => 'monitoring', // atau path ke svg/icon  
        'label' => ['id' => 'SOC', 'en' => 'SOC']
    ]
]
FR-PORT-03: SOC Tab Display
Visual Design:
    • Centered Layout: Icon/Ilustrasi monitoring/dashboard (Chart/Shield dengan grafik)
    • Label: Text besar "SOC" atau "Security Operations Center"
    • Sub-label: "View Analysis on GitHub" / "Lihat Analisis di GitHub"
    • CTA: Icon GitHub besar atau text link "Browse on GitHub"
Interaction:
    • Click anywhere → redirect ke https://github.com/username/soc-analysis
    • Sama seperti Pentest: hover scale + pointer cursor
FR-PORT-04: Visual Implementation Alternatives
Opsi A: Big Icon Cards (Rekomendasi)
plain 
Copy
[ Tab: Pentest | Tab: SOC ]

[                    ]
[   [ICON BESAR]     ]
[                    ]
[      PENTEST       ]
[   (subtle text)    ]
[                    ]
[   [GitHub Icon]    ]
[                    ]
Opsi B: Split Screen (Desktop) / Stack (Mobile)
    • Tidak pakai tab, langsung tampil 2 kolom besar side-by-side
    • Kiri: Pentest (icon + label)
    • Kanan: SOC (icon + label)
    • Masing-masing clickable ke GitHub
Opsi C: Minimal List
    • List vertikal dengan icon kecil di kiri
    • Hanya text "Pentest" dan "SOC"
    • Arrow icon kanan menunjukkan external link
FR-PORT-05: GitHub Redirect Behavior
    • Target: _blank (new tab)
    • Rel: noopener noreferrer
    • Confirmation: Tidak perlu confirm dialog, langsung redirect
    • Visual Cue: Icon external link atau icon GitHub untuk indikasi akan pindah platform
FR-PORT-06: Responsive Behavior
    • Mobile: Icon size 80-100px, text 2xl, full width clickable area minimal 120px height
    • Tablet/Desktop: Icon size 120-150px, text 3xl/4xl, dengan hover animation (scale 1.05)
    • Loading: Instant, tidak perlu fetch data (hardcoded links)

Update Data Structure (config/portfolio.php)
php 
Copy
<?php

return [
    'pentest' => [
        'github_url' => 'https://github.com/username/pentest-portfolio',
        'icon' => 'icons/shield-bug.svg', // SVG path atau nama icon library
        'labels' => [
            'id' => 'Pentest',
            'en' => 'Pentest'
        ],
        'sublabels' => [
            'id' => 'Lihat Write-up di GitHub',
            'en' => 'View Write-ups on GitHub'
        ]
    ],
    
    'soc' => [
        'github_url' => 'https://github.com/username/soc-portfolio', 
        'icon' => 'icons/chart-shield.svg',
        'labels' => [
            'id' => 'SOC',
            'en' => 'SOC'
        ],
        'sublabels' => [
            'id' => 'Lihat Analisis di GitHub',
            'en' => 'View Analysis on GitHub'
        ]
    ]
];

Update Technical Notes
Alasan Perubahan:
    • Performance: Tidak perlu load thumbnail images untuk portfolio (lebih cepat <1s)
    • Maintenance: Update hanya perlu ganti link GitHub di config, tidak perlu update konten web
    • UX: User langsung diarahkan ke GitHub untuk detail lengkap, tidak ada duplikasi konten
    • Focus: Visitor fokus pada skill category (Pentest vs SOC) lalu langsung cek kualitas technical di GitHub
Visual Impact:
    • Section akan terlihat sangat clean dan modern
    • White space lebih banyak (breathing room)
    • Highlight pada icon/illustrasi sebagai visual anchor
    • Professional impression: "Show don't tell" - langsung arahkan ke GitHub untuk bukti technical

5. UI/UX Specifications
5.1 Design System
Color Palette
    • Primary: Deep Blue atau Dark Purple (#1e3a8a atau #581c87) - professional trust
    • Secondary: Cyan atau Teal (#06b6d4) - tech/cybersecurity feel
    • Accent: Orange atau Red (#f97316 atau #dc2626) - untuk severity badges
    • Background: White (#ffffff) dan Light Gray (#f3f4f6)
    • Text: Dark Gray (#1f2937) untuk headings, Medium Gray (#4b5563) untuk body
Typography
    • Font Family: Inter atau Geist (sans-serif, modern, tech feel)
    • Headings: 600-700 weight
    • Body: 400 weight, 1.6 line-height
    • Code/Mono: JetBrains Mono atau Fira Code (untuk technical terms)
Spacing & Layout
    • Container: max-width 1200px, centered
    • Section Padding: py-20 (80px vertical) untuk desktop, py-12 untuk mobile
    • Grid Gap: 24px-32px
    • Card Padding: 24px
5.2 Animations & Interactions
Scroll Animations
    • Fade Up: Elements fade in dan translateY(20px → 0) saat enter viewport
    • Stagger: List items muncul sequential dengan delay 100ms
    • Trigger: Intersection Observer dengan threshold 0.1
    • Duration: 600ms dengan easing cubic-bezier(0.4, 0, 0.2, 1)
Hover Effects
    • Cards: translateY(-4px) + box-shadow increase
    • Buttons: Background color darken + scale(1.02)
    • Links: Underline animation (width 0 → 100%)
    • Images: Scale 1.05 dengan overflow hidden (zoom effect)
Micro-interactions
    • Tab Switch: Content fade out → fade in (crossfade 300ms)
    • Language Switch: Instant content replace dengan subtle fade
    • Loading: Skeleton screens (jika ada dynamic content) atau instant render

6. Implementation Roadmap
Phase 1: Foundation (Week 1)
    • [ ] Setup Laravel 11 project dengan Tailwind CSS
    • [ ] Konfigurasi i18n structure (ID/EN)
    • [ ] Setup static site export configuration
    • [ ] Implement base layout dan navigation system
    • [ ] Responsive navigation (mobile hamburger)
Phase 2: Core Sections (Week 2)
    • [ ] Hero/About section dengan skills tags
    • [ ] Portfolio section dengan tab system (Pentest & SOC)
    • [ ] Organization section (LinkedIn-style timeline)
    • [ ] Language switching functionality
Phase 3: Content & Polish (Week 3)
    • [ ] Certificate grid dengan lightbox
    • [ ] University section
    • [ ] Populate content (semua section)
    • [ ] Image optimization dan lazy loading
    • [ ] Scroll animations
Phase 4: Optimization & Launch (Week 4)
    • [ ] Performance optimization (Lighthouse audit)
    • [ ] Accessibility audit dan fixes
    • [ ] SEO meta tags, Open Graph, Schema.org
    • [ ] Cross-browser testing
    • [ ] Deploy ke hosting (Vercel/Netlify/GitHub Pages)

7. Non-Functional Requirements
7.1 SEO & Meta
    • Meta Tags: Dynamic title dan description per language
    • Open Graph: Image, title, description untuk social sharing
    • Schema.org: Person schema dengan sameAs links (GitHub, LinkedIn)
    • Sitemap: XML sitemap generation
    • Robots.txt: Allow all, sitemap reference
7.2 Security
    • Static Site: Inherently secure (no server-side vulnerabilities)
    • Dependencies: Regular audit dengan npm audit / composer audit
    • Content Security Policy: Header untuk prevent XSS
    • HTTPS: Enforced (via hosting provider)
7.3 Maintenance
    • Content Updates: Edit PHP/JSON files → Rebuild → Redeploy
    • Version Control: Git repository dengan semantic versioning
    • Backup: GitHub sebagai source of truth

8. Open Questions & Decisions
    1. Image Hosting: Gunakan local assets atau CDN (Cloudinary/Imgur) untuk certificates?
    2. Dark Mode: Apakah perlu support dark mode toggle?
    3. Contact Form: Hanya display email/social links atau perlu contact form (bisa pakai Formspree/netlify forms)?
    4. Blog: Future consideration untuk section blog (meski saat ini write-up di GitHub)?

9. Appendix
A. Tools & Icons
    • Icons: Lucide Icons atau Heroicons (SVG, lightweight)
    • Font: Google Fonts (Inter) atau self-hosted
    • Build: Vite (Laravel default)
B. External Links
    • GitHub Profile: https://github.com/username
    • LinkedIn: https://linkedin.com/in/username
    • TryHackMe/HackTheBox: Profile links (jika relevan)
C. Image Specifications
    • Avatar: 400x400px, 1:1 ratio
    • Organization Logos: 200x200px, 1:1 ratio
    • Certificate Thumbnails: 800x600px, 4:3 ratio
    • Portfolio Thumbnails: 1200x630px, 1.91:1 ratio (Open Graph optimized)

Document Control:
    • Author: Senior PM
    • Reviewers: Tech Lead, UI/UX Designer
    • Approval: [Pending]
    • Next Review: Post-MVP

B. User Flow (Frontend Navigation)
graph TD
A[Landing Page<br/>Hero/About Section] -->|Scroll atau<br/>Click Nav| B[About Section]
A -->|Click Nav<br/>About| B
A -->|Click Nav<br/>Portfolio| C[Portfolio Section]
A -->|Click Nav<br/>Organization| D[Organization Section]
A -->|Click Nav<br/>Certificate| E[Certificate Section]
A -->|Click Nav<br/>University| F[University Section]
B -->|Scroll Down| C
B -->|Click Nav<br/>Portfolio| C
B -->|Click Nav<br/>Organization| D
B -->|Click Nav<br/>Certificate| E
B -->|Click Nav<br/>University| F
C -->|Click Tab<br/>Pentest| C1[Pentest View<br/>Icon + Label]
C -->|Click Tab<br/>SOC| C2[SOC View<br/>Icon + Label]
C1 -->|Click Area<br/>Pentest| G[GitHub Pentest Repo<br/>_blank]
C2 -->|Click Area<br/>SOC| H[GitHub SOC Repo<br/>_blank]
C1 -->|Click Nav<br/>Organization| D
C2 -->|Click Nav<br/>Organization| D
D -->|Scroll Down| E
D -->|Click Nav<br/>Certificate| E
D -->|Click Nav<br/>University| F
D -->|Click Logo<br/>Organization| I[External Link<br/>Org Website]
E -->|Scroll Down| F
E -->|Click Nav<br/>University| F
E -->|Click Certificate| J[Lightbox Modal<br/>Full Size Image]
E -->|Click Verify| K[External Verify<br/>Credly/Certificate URL]
F -->|Click Nav<br/>Back to Top| A
L[Sticky Navigation<br/>Fixed Top] -.->|Active State<br/>Indicator| A
L -.->|Active State<br/>Indicator| B
L -.->|Active State<br/>Indicator| C
L -.->|Active State<br/>Indicator| D
L -.->|Active State<br/>Indicator| E
L -.->|Active State<br/>Indicator| F

style A fill:#1e3a8a,stroke:#1e3a8a,color:#fff
style C1 fill:#06b6d4,stroke:#06b6d4,color:#fff
style C2 fill:#06b6d4,stroke:#06b6d4,color:#fff
style G fill:#f97316,stroke:#f97316,color:#fff
style H fill:#f97316,stroke:#f97316,color:#fff
style L fill:#581c87,stroke:#581c87,color:#fff
style M fill:#10b981,stroke:#10b981,color:#fff


C. System Flow
sequenceDiagram
participant Dev as Developer
participant LV as Laravel Engine
participant Config as PHP Config/Lang Files
participant SSG as spatie/laravel-export
participant Hosting as Vercel/Netlify

Dev->>Config: Update data di config/portfolio.php atau lang/
Dev->>LV: Jalankan php artisan export
LV->>Config: Load data array & localization [cite: 122, 154]
LV->>SSG: Crawl semua route (ID & EN) [cite: 139]
SSG->>LV: Generate file .html, .css, .js [cite: 120]
Dev->>Hosting: Push folder dist/ ke Production [cite: 167]
