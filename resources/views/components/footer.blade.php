<footer class="bg-white pt-16 pb-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header - Mobile Only -->
        <div class="lg:hidden mb-8">
            <h2 class="text-2xl font-bold text-[#454452]">Contact us</h2>
        </div>

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mb-12">
            
            <!-- Column 1: Contact Form -->
            <div class="lg:col-span-4">
                <!-- Desktop Heading -->
                <h3 class="hidden lg:block text-2xl font-bold text-[#454452] mb-6">
                    Contact us
                </h3>
                
                <!-- Contact Form Card -->
                <div class="bg-white p-6 sm:p-8 shadow-lg rounded-2xl border border-gray-100">
                    <form 
                        action="{{ route('contact.submit') }}" 
                        method="POST"
                        class="space-y-4"
                        x-data="{ 
                            loading: false,
                            submitForm(e) {
                                this.loading = true;
                            }
                        }"
                        @submit.prevent="submitForm"
                    >
                        @csrf
                        
                        <!-- Name Input -->
                        <div>
                            <input 
                                type="text" 
                                name="name" 
                                placeholder="Your Name"
                                required
                                class="w-full px-4 py-3 bg-[#F9FAFB] border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#003686] focus:border-transparent transition-all"
                            >
                        </div>
                        
                        <!-- Email Input -->
                        <div>
                            <input 
                                type="email" 
                                name="email" 
                                placeholder="Your Email"
                                required
                                class="w-full px-4 py-3 bg-[#F9FAFB] border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#003686] focus:border-transparent transition-all"
                            >
                        </div>
                        
                        <!-- Message Textarea -->
                        <div>
                            <textarea 
                                name="message" 
                                placeholder="Your Message"
                                rows="4"
                                required
                                class="w-full px-4 py-3 bg-[#F9FAFB] border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#003686] focus:border-transparent transition-all resize-none"
                            ></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div>
                            <button 
                                type="submit"
                                :disabled="loading"
                                class="w-full px-8 py-3 bg-[#003686] text-white font-semibold rounded-full hover:bg-[#002a6b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#003686] transition-all disabled:opacity-50 disabled:cursor-not-allowed"
                            >
                                <span x-show="!loading">Send</span>
                                <span x-show="loading" x-cloak>Sending...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Column 2 & 3: Contact Info & Pages (Mobile: Side by Side, Desktop: Separate) -->
            
            <!-- Mobile Layout: Two Columns -->
            <div class="lg:hidden grid grid-cols-2 gap-8">
                
                <!-- Contact Information Column -->
                <div class="flex flex-col items-center space-y-8">
                    <!-- Location -->
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <p class="text-[#454452] text-sm font-medium">Remote</p>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <a href="tel:+17039661249" class="text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            (703) 966-1249
                        </a>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <a href="mailto:fasticore@gmail.com" class="text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            fasticore@gmail.com
                        </a>
                    </div>
                </div>

                <!-- Pages Menu Column -->
                <div class="flex flex-col">
                    <h4 class="text-lg font-bold text-[#454452] mb-4">
                        Pages
                    </h4>
                    
                    <nav class="space-y-3">
                        <a href="{{ route('home') }}" class="block text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="block text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            Services
                        </a>
                        <a href="{{ route('solutions') }}" class="block text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            Solutions
                        </a>
                        <a href="{{ route('about') }}" class="block text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            About us
                        </a>
                        <a href="{{ route('contact') }}" class="block text-[#454452] text-sm hover:text-[#003686] transition-colors">
                            Contact
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Desktop: Contact Information (Column 2) -->
            <div class="hidden lg:flex lg:col-span-4 flex-col justify-center items-center text-center space-y-8">
                <!-- Location -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-8 h-8 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="text-[#454452] font-medium">Remote</p>
                </div>
                
                <!-- Phone -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-8 h-8 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <a href="tel:+17039661249" class="text-[#454452] hover:text-[#003686] transition-colors">
                        (703) 966-1249
                    </a>
                </div>
                
                <!-- Email -->
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-8 h-8 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <a href="mailto:fasticore@gmail.com" class="text-[#454452] hover:text-[#003686] transition-colors">
                        fasticore@gmail.com
                    </a>
                </div>
            </div>
            
            <!-- Desktop: Pages Menu (Column 3) -->
            <div class="hidden lg:flex lg:col-span-4 flex-col justify-center">
                <div>
                    <h4 class="text-xl font-bold text-[#454452] mb-6">
                        Pages
                    </h4>
                    
                    <nav class="space-y-3">
                        <a href="{{ route('home') }}" class="block text-[#454452] hover:text-[#003686] transition-colors">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="block text-[#454452] hover:text-[#003686] transition-colors">
                            Services
                        </a>
                        <a href="{{ route('solutions') }}" class="block text-[#454452] hover:text-[#003686] transition-colors">
                            Solutions
                        </a>
                        <a href="{{ route('about') }}" class="block text-[#454452] hover:text-[#003686] transition-colors">
                            About us
                        </a>
                        <a href="{{ route('contact') }}" class="block text-[#454452] hover:text-[#003686] transition-colors">
                            Contact
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- Bottom Footer Bar -->
     <div class="pt-8 pb-2 border-b border-gray-200">
    <!-- Three Column Layout: Social Icons | Trademark | Legal Links -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 items-center">
            
            <!-- Left: Social Media Icons -->
            <div class="flex items-center justify-center lg:justify-start space-x-4">
                <!-- Facebook -->
                <a 
                    href="https://facebook.com/fasticore" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-10 h-10 rounded-full flex items-center justify-center hover:opacity-80 transition-opacity duration-200"
                    aria-label="Visit Fasticore on Facebook"
                >
                   <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                </a>
                
                <!-- Twitter -->
                <a 
                    href="https://twitter.com/fasticore" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-10 h-10 rounded-full flex items-center justify-center hover:opacity-80 transition-opacity duration-200"
                    aria-label="Visit Fasticore on Twitter"
                >
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="w-6 h-6">
                </a>
                
                <!-- YouTube -->
                <a 
                    href="https://youtube.com/@fasticore" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-10 h-10 rounded-full flex items-center justify-center hover:opacity-80 transition-opacity duration-200"
                    aria-label="Visit Fasticore on YouTube"
                >
                     <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="w-5 h-5">
                </a>
            </div>

            <!-- Center: Trademark -->
            <div class="text-center">
                <p class="text-[#454452] text-xs sm:text-sm leading-relaxed">
                    Fasticore Platform are trademarks from Fasticore Technology
                </p>
            </div>

            <!-- Right: Legal Links -->
            <div class="flex items-center justify-center lg:justify-end space-x-4 sm:space-x-6">
                <a 
                    href="{{ route('terms') }}" 
                    class="text-[#454452] text-xs font-bold sm:text-sm hover:text-[#003686] transition-colors duration-200 underline-offset-4 hover:underline"
                >
                    Terms of use
                </a>
                <span class="text-gray-300">|</span>
                <a 
                    href="{{ route('privacy') }}" 
                    class="text-[#454452] text-xs font-bold sm:text-sm hover:text-[#003686] transition-colors duration-200 underline-offset-4 hover:underline"
                >
                    Privacy policy
                </a>
            </div>
        </div>    
    </div>
             <div class="text-center">
                <p class="text-[#454452] pt-2 text-xs sm:text-sm leading-relaxed">
                   © Copyright by Fasticore Technology – All right reserved.
                </p>
        </div>
</footer>

<style>
    [x-cloak] { 
        display: none !important; 
    }
</style>