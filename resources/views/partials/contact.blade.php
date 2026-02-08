<section class="py-20 bg-gray-50" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Get In <span class="text-red-600">Touch</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Ready to start your project? Contact us today to discuss your requirements
                and get a free consultation.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Contact Information</h3>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                                <a href="mailto:info@decad.co.uk" class="text-gray-600 hover:text-red-600">info@decad.co.uk</a>
                                <p class="text-sm text-gray-500 mt-1">We'll respond within 24 hours</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Visit Us</h3>
                                <p class="text-gray-600">Lincoln, United Kingdom</p>
                                <p class="text-sm text-gray-500 mt-1">By appointment only</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                                <p class="text-gray-600">Monday - Friday: 9:00 AM - 5:00 PM</p>
                                <p class="text-sm text-gray-500 mt-1">Closed on weekends and bank holidays</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-red-600 to-red-700 rounded-xl p-8 text-white">
                    <h4 class="text-lg font-bold mb-3">Why Choose DECAD?</h4>
                    <ul class="space-y-3 text-sm text-red-100">
                        <li class="flex items-start"><span class="mr-2">✓</span><span>25+ years of industry experience</span></li>
                        <li class="flex items-start"><span class="mr-2">✓</span><span>Qualified & certified engineers</span></li>
                        <li class="flex items-start"><span class="mr-2">✓</span><span>Competitive pricing</span></li>
                        <li class="flex items-start"><span class="mr-2">✓</span><span>Fast turnaround times</span></li>
                        <li class="flex items-start"><span class="mr-2">✓</span><span>100% quality guarantee</span></li>
                    </ul>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
                    <form id="contact-form" class="space-y-6" action="#" method="post">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name <span class="text-red-600">*</span></label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-600 focus:border-transparent outline-none transition-all" placeholder="John Smith">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address <span class="text-red-600">*</span></label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-600 focus:border-transparent outline-none transition-all" placeholder="john@example.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-600 focus:border-transparent outline-none transition-all" placeholder="+44 123 456 7890">
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                <input type="text" id="company" name="company" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-600 focus:border-transparent outline-none transition-all" placeholder="Your Company">
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message <span class="text-red-600">*</span></label>
                            <textarea id="message" name="message" required rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-600 focus:border-transparent outline-none transition-all resize-none" placeholder="Tell us about your project requirements..."></textarea>
                        </div>
                        <div id="contact-success" class="hidden bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                            Thank you! Your message has been sent successfully. We'll get back to you soon.
                        </div>
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition-all transform hover:scale-105 shadow-lg">
                            Send Message
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
