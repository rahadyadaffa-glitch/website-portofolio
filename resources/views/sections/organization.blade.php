<section id="organization" class="py-20 sm:py-24 bg-transparent" x-data="{ shown: false }"
    x-intersect.once.margin.-100px="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-24 transition-all duration-1000"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <h2 class="text-3xl sm:text-7xl font-black text-[var(--text-main)] tracking-tighter uppercase mb-2">
                {{ __('messages.section_titles.organization') }}
            </h2>
            <div class="w-32 h-2 bg-[var(--accent)]"></div>
        </div>

        <div class="space-y-48 relative">
            @php
                $orgs = [
                    [
                        'pos' => 'Secretary of Logistics Division',
                        'event' => 'Sekolah Mentoring',
                        'date' => 'Jan 2026 — Feb 2026',
                        'desc' => [
                            'Sourced and identified reliable vendors to provide high-quality materials and equipment required for the Sekolah Mentoring program.',
                            'Executed purchasing activities for all logistical needs, ensuring that all items were acquired on time and met the organization\'s standards.',
                            'Managed purchase documentation, including receipts and invoices, to ensure accurate reporting and seamless coordination with the Finance department.',
                        ],
                        'images' => [
                            '/images/organization/SM-1.webp',
                            '/images/organization/SM-2.webp',
                        ]
                    ],
                    [
                        'pos' => 'Head of Mobilization Division',
                        'event' => 'Closing ICB',
                        'date' => 'Dec 2025',
                        'desc' => [
                            'Led and managed a division of 40 committee members, overseeing the strategic mobilization of around 4,000 participants to ensure a smooth and orderly Closing ICB event.',
                            'Strategically plotted and assigned personnel to key operational zones, optimizing crowd control and ensuring all staff were effectively positioned to manage participant flow.',
                            'Orchestrated the seamless movement of participants, proactively identifying and resolving operational bottlenecks to maintain the event’s schedule and safety protocols.'
                        ],
                        'images' => [
                            '/images/organization/ClosingICB-1.webp',
                            '/images/organization/ClosingICB-2.webp'
                        ]
                    ],
                    [
                        'pos' => 'Logistics Associate',
                        'event' => 'Mentoring General ICB',
                        'date' => 'Nov 2025',
                        'desc' => [
                            'Executed procurement requests from various divisions, ensuring all necessary supplies and equipment were sourced and available on schedule to support event operations.',
                            'Maintained accountability for borrowed assets, tracking their usage throughout the event and ensuring all items were returned in proper condition.',
                            'Provided on-site operational support by assisting in the physical setup of event infrastructure, ensuring all logistical needs were met according to the team\'s requirements.'
                        ],
                        'images' => [
                            '/images/organization/MGICB-1.webp',
                        ]
                    ],
                    [
                        'pos' => 'Field Coordinator',
                        'event' => 'Opening ICB',
                        'date' => 'Oct 2025',
                        'desc' => [
                            'Directed on-site operations and led a team of 100 committee members to execute the Opening ICB event for around 4,000 participants, ensuring every segment of the program ran precisely according to the scheduled timeline.',
                            'Served as the primary point of contact for real-time troubleshooting, swiftly resolving operational challenges to ensure the event\'s continuity and success.',
                            'Facilitated seamless communication between multiple divisions to synchronize activities, maintaining high-quality execution for a large-scale audience.'
                        ],
                        'images' => [
                            '/images/organization/OpeningICB-2.webp',
                            '/images/organization/OpeningICB-1.webp'
                        ]
                    ]
                ];
            @endphp

            <!-- Whiteboard Title -->
            <div class="mb-20 pl-0 md:pl-24 transition-all duration-1000 delay-300"
                :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'">
                <div class="flex items-center gap-6 relative">
                    <img src="/images/organization/logo-badan-mentoring.webp" alt="Logo Badan Mentoring"
                        class="w-24 h-24 sm:w-32 sm:h-32 object-contain">
                    <div class="flex-1 relative min-w-0">
                        <h3
                            class="text-xl sm:text-6xl font-black text-[var(--text-main)] tracking-tight uppercase leading-none">
                            Badan Mentoring</h3>
                        <div
                            class="absolute -bottom-4 left-0 w-full h-1.5 bg-[var(--accent)] transform -rotate-1 opacity-60">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline Line -->
            <div class="hidden md:block absolute left-[2.25rem] top-32 bottom-0 w-1 bg-[var(--border)]/30"></div>

            @foreach($orgs as $index => $item)
                @php
                    $rots = ['-1deg', '1deg', '-0.5deg', '0.5deg'];
                    $rot = $rots[$index % count($rots)];
                @endphp
                <div class="relative pl-8 md:pl-24" x-data="{ spreading: false, itemShown: false }"
                    x-intersect.once.margin.-100px="itemShown = true">
                    <!-- Timeline Dot -->
                    <div class="absolute left-0 md:left-[1.95rem] top-12 w-4 h-4 bg-[var(--bg)] border-4 border-[var(--border)] rounded-full z-10 transition-all duration-700"
                        :class="itemShown ? (spreading ? 'border-[var(--accent)] scale-150 opacity-100' : 'opacity-100') : 'opacity-0 scale-50'">
                    </div>

                    <div class="flex flex-col md:flex-row justify-between items-start gap-12 lg:gap-24 relative">

                        <!-- Left: Content Paper -->
                        <div class="w-full md:w-[45rem] relative pt-8 transition-all duration-1000 ease-out"
                            :class="spreading ? 'opacity-10 blur-md -translate-x-20 scale-95 pointer-events-none' : (itemShown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20')">
                            <div class="tape-piece"></div>
                            <div class="neo-paper p-6 sm:p-12 paper-texture relative z-20"
                                style="transform: rotate({{ $rot }})">
                                <div class="mb-8 pb-6 border-b-2 border-[var(--border)]/30">
                                    <h4
                                        class="font-black text-3xl sm:text-4xl text-[var(--text-main)] mb-1 tracking-tight uppercase leading-[1.1]">
                                        {{ $item['pos'] }}
                                    </h4>
                                </div>

                                <p
                                    class="text-xs sm:text-sm text-[var(--text-main)] font-black uppercase tracking-[0.3em] mb-8">
                                    {{ $item['date'] }} • {{ $item['event'] }}
                                </p>

                                <ul class="space-y-4 text-lg leading-relaxed list-none">
                                    @foreach($item['desc'] as $desc)
                                        <li
                                            class="relative pl-8 text-[var(--text-dim)] before:absolute before:left-0 before:top-3 before:w-3 before:h-3 before:bg-[var(--accent)]/30 before:border-2 before:border-[var(--accent)]">
                                            {{ $desc }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Right: Photo Fan (Dynamic) -->
                        <div class="hidden md:block shrink-0 w-[32rem] h-[24rem] z-30 mt-16 group cursor-pointer transition-all duration-1000 ease-out delay-200"
                            :class="itemShown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                            @mouseenter="spreading = true" @mouseleave="spreading = false">
                            <div class="relative w-full h-full">
                                <!-- Overlay Label -->
                                <div class="absolute -top-16 left-0 right-0 text-center transition-all duration-500"
                                    :class="spreading ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'">
                                    <span
                                        class="text-[10px] font-black uppercase tracking-[0.6em] text-[var(--accent)]">Perspective
                                        Explorer Active</span>
                                </div>

                                @foreach($item['images'] as $imgIndex => $imgUrl)
                                    @php
                                        // Layer offsets
                                        $zIndices = ['z-30', 'z-20', 'z-10'];
                                        $rotations = ['rotate-3', '-rotate-6', 'rotate-12'];
                                        $spreadTransforms = [
                                            'scale-110 !shadow-2xl rotate-0 -translate-y-8', // Front
                                            '-translate-x-[110%] -rotate-6 scale-95 opacity-100', // Left
                                            'translate-x-[110%] rotate-6 scale-95 opacity-100'  // Right
                                        ];
                                        $idleTransforms = [
                                            'rotate-3', // Front
                                            '-rotate-6 translate-x-2 translate-y-2 opacity-40', // Left
                                            'rotate-12 -translate-x-2 -translate-y-2 opacity-40' // Right
                                        ];
                                    @endphp
                                    <div class="absolute inset-x-10 inset-y-0 bg-[var(--bg-alt)] p-3 neo-shadow neo-border transition-all duration-700 {{ $zIndices[$imgIndex] ?? 'z-0' }}"
                                        :class="spreading ? '{{ $spreadTransforms[$imgIndex] ?? '' }}' : '{{ $idleTransforms[$imgIndex] ?? '' }}'">
                                        <img src="{{ $imgUrl }}" class="w-full h-full object-cover transition-all duration-700"
                                            :class="spreading ? 'grayscale-0 brightness-100' : 'grayscale brightness-110'">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Mobile Images Section -->
                        <div class="md:hidden grid grid-cols-1 gap-6 mt-4 w-full">
                            @foreach($item['images'] as $img)
                                <img src="{{ $img }}" class="w-full aspect-video object-cover neo-border-sm">
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>