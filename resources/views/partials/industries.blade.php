<section class="py-20 bg-white" id="industries">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Industries We <span class="text-red-600">Serve</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Delivering specialized engineering solutions across diverse sectors with
                deep industry knowledge and technical expertise.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['title' => 'Oil & Gas', 'desc' => 'Comprehensive design services for upstream, midstream, and downstream operations including pipelines, refineries, and processing facilities.', 'img' => 'https://images.unsplash.com/photo-1680970422424-f63d2355adb3?w=600&q=80', 'icon' => 'cube'],
                ['title' => 'Pharmaceutical', 'desc' => 'Clean room design, process equipment layouts, and compliance with GMP standards for pharmaceutical manufacturing facilities.', 'img' => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=600&q=80', 'icon' => 'beaker'],
                ['title' => 'Power Generation', 'desc' => 'Electrical design for power plants, substations, and renewable energy installations including solar and wind farms.', 'img' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=600&q=80', 'icon' => 'bolt'],
                ['title' => 'Water Treatment', 'desc' => 'Design solutions for water and wastewater treatment plants, pumping stations, and distribution networks.', 'img' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&q=80', 'icon' => 'beaker'],
                ['title' => 'Healthcare', 'desc' => 'Medical facility electrical systems, emergency power, medical gas systems, and equipment installations.', 'img' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=80', 'icon' => 'heart'],
                ['title' => 'Rail Transport', 'desc' => 'Railway infrastructure design including signaling systems, power distribution, and station facilities.', 'img' => 'https://images.unsplash.com/photo-1474487548417-781cb71495f3?w=600&q=80', 'icon' => 'truck'],
                ['title' => 'Manufacturing', 'desc' => 'Production line layouts, material handling systems, and factory automation solutions for various manufacturing sectors.', 'img' => 'https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=600&q=80', 'icon' => 'cube'],
                ['title' => 'Commercial', 'desc' => 'Building services design for offices, retail spaces, and mixed-use developments including HVAC and electrical systems.', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80', 'icon' => 'building'],
            ] as $industry)
            <div class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-200 hover:border-red-300">
                <div class="relative h-48 bg-gradient-to-br from-gray-800 to-gray-900 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent z-10"></div>
                    <img src="{{ $industry['img'] }}" alt="{{ $industry['title'] }}" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-110 transition-transform duration-500" loading="lazy">
                    <div class="absolute inset-0 z-20 flex flex-col items-center justify-center text-white p-6">
                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-red-700 transition-colors shadow-lg">
                            @if($industry['icon'] === 'cube')
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            @elseif($industry['icon'] === 'beaker')
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                            @elseif($industry['icon'] === 'bolt')
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            @elseif($industry['icon'] === 'heart')
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            @elseif($industry['icon'] === 'truck')
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1h1m-1-1V6a1 1 0 011-1h2a1 1 0 011 1v10m-5 0a1 1 0 001 1h1a1 1 0 001-1m-1-1V6a1 1 0 011-1h2a1 1 0 011 1v10a1 1 0 01-1 1h-1"/></svg>
                            @else
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-center">{{ $industry['title'] }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $industry['desc'] }}</p>
                </div>
                <div class="absolute inset-0 border-2 border-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl pointer-events-none"></div>
            </div>
            @endforeach
        </div>
        <div class="mt-16 text-center bg-gray-50 rounded-2xl p-8 sm:p-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Don't See Your Industry?</h3>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                We work across many other sectors and industries. Our versatile team can adapt
                our expertise to meet your specific industry requirements and standards.
            </p>
            <a href="#contact" data-scroll="contact" class="inline-block bg-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition-all transform hover:scale-105 shadow-lg">Discuss Your Project</a>
        </div>
    </div>
</section>
