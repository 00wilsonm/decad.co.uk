<section class="py-20 bg-gray-50" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Our <span class="text-red-600">Services</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Comprehensive engineering design solutions tailored to your specific needs,
                delivered with precision and expertise.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'pencil', 'title' => 'CAD Design & Drafting', 'desc' => 'Professional 2D and 3D CAD design services using industry-leading software including AutoCAD, SolidWorks, and Inventor.', 'features' => ['2D Technical Drawings', '3D Modeling', 'Assembly Drawings', 'As-Built Documentation']],
                ['icon' => 'bolt', 'title' => 'Electrical Design', 'desc' => 'Comprehensive electrical engineering solutions from concept to installation, ensuring compliance with all relevant standards.', 'features' => ['Power Distribution', 'Control Systems', 'Lighting Design', 'Cable Schedules']],
                ['icon' => 'cpu', 'title' => 'Control Panel Design', 'desc' => 'Custom control panel layouts and schematics designed for optimal functionality and maintenance accessibility.', 'features' => ['Panel Layouts', 'Wiring Diagrams', 'Component Selection', 'CE Marking Support']],
                ['icon' => 'document', 'title' => 'Technical Documentation', 'desc' => 'Detailed technical documentation including O&M manuals, commissioning documents, and design reports.', 'features' => ['User Manuals', 'Maintenance Guides', 'Project Documentation', 'Compliance Reports']],
                ['icon' => 'check', 'title' => 'Design Verification', 'desc' => 'Thorough review and verification of existing designs to ensure accuracy, compliance, and optimization.', 'features' => ['Design Audits', 'Standards Compliance', 'Quality Assurance', 'Drawing Checks']],
                ['icon' => 'cog', 'title' => 'Project Management', 'desc' => 'End-to-end project management services ensuring timely delivery and effective communication throughout.', 'features' => ['Project Planning', 'Progress Tracking', 'Client Communication', 'Resource Management']],
            ] as $service)
            <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-red-200 group">
                <div class="w-14 h-14 bg-red-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-red-700 transition-colors">
                    @if($service['icon'] === 'pencil')
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    @elseif($service['icon'] === 'bolt')
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    @elseif($service['icon'] === 'cpu')
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                    @elseif($service['icon'] === 'document')
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    @elseif($service['icon'] === 'check')
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    @else
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    @endif
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">{{ $service['desc'] }}</p>
                <ul class="space-y-2">
                    @foreach($service['features'] as $feature)
                    <li class="flex items-start text-sm text-gray-700">
                        <svg class="w-4 h-4 text-red-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="mt-16 bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 sm:p-12 text-center text-white">
            <h3 class="text-2xl sm:text-3xl font-bold mb-4">Need a Custom Solution?</h3>
            <p class="text-lg text-red-100 mb-8 max-w-2xl mx-auto">
                Every project is unique. Let's discuss your specific requirements and
                create a tailored engineering solution that exceeds your expectations.
            </p>
            <a href="#contact" data-scroll="contact" class="inline-block bg-white text-red-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">Request a Quote</a>
        </div>
    </div>
</section>
