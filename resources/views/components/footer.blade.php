<footer class="bg-[#ffffff] pt-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 mb-12 ">
            
            <!-- Column 1: Contact Form -->
            <div class="p-6 shadow-lg rounded-lg border-2 border-[#f5f5f5]">
                <h3 class="text-2xl font-bold text-[#454452] mb-6">
                    Contact us
                </h3>
                
                <!-- Contact Form -->
                <form 
                    action="{{ route('contact.submit') }}" 
                    method="POST"
                    class="space-y-6"
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
                            class="w-full px-4 py-3 bg-[#F5F5F5] border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                        >
                    </div>
                    
                    <!-- Email Input -->
                    <div>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Your Email"
                            required
                            class="w-full px-4 py-3 bg-[#F5F5F5] border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                        >
                    </div>
                    
                    <!-- Message Textarea -->
                    <div>
                        <textarea 
                            name="message" 
                            placeholder="Your Message"
                            rows="4"
                            required
                            class="w-full px-4 py-3 bg-[#F5F5F5] border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit"
                            :disabled="loading"
                            class="w-full px-8 py-3 bg-[#003686] text-white font-semibold rounded-lg hover:bg-[#003686] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#003686] transition-all disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            <span x-show="!loading">Send</span>
                            <span x-show="loading" x-cloak>Sending...</span>
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Column 2: Contact Information -->
            <div class="flex flex-col justify-center items-center text-center space-y-4">
                
                <!-- Location -->
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="text-[#454452] text-sm">Remote</p>
                </div>
                
                <!-- Phone -->
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <a href="tel:+17039661249" class="text-[#454452] text-sm hover:text-primary transition-colors">
                        (703) 966-1249
                    </a>
                </div>
                
                <!-- Email -->
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-[#454452]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <a href="mailto:fasticore@gmail.com" class="text-[#454452] text-sm hover:text-primary transition-colors">
                        fasticore@gmail.com
                    </a>
                </div>
            </div>
            
            <!-- Column 3: Pages Menu -->
            <div class="flex flex-col justify-center lg:items-end">
                <div>
                    <h4 class="text-xl font-bold text-[#454452] mb-6">
                        Pages
                    </h4>
                    
                    <nav class="space-y-3">
                        <a href="{{ route('home') }}" class="block text-[#454452] hover:text-primary transition-colors">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="block text-[#454452] hover:text-primary transition-colors">
                            Services
                        </a>
                        <a href="{{ route('solutions') }}" class="block text-[#454452] hover:text-primary transition-colors">
                            Solutions
                        </a>
                        <a href="{{ route('about') }}" class="block text-[#454452] hover:text-primary transition-colors">
                            About us
                        </a>
                        <a href="{{ route('contact') }}" class="block text-[#454452] hover:text-primary transition-colors">
                            Contact
                        </a>
                    </nav>
                </div>
            </div>
            
        </div>
        

        
        <!-- Bottom Footer Bar -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-sm text-[#454452]">
            
            <!-- Social Media Icons -->
            <div class="flex items-center space-x-4">
                <!-- Facebook -->
                <a 
                    href="https://facebook.com/fasticore" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-10 h-10 bg-[#003686] rounded-full flex items-center justify-center hover:bg-[#003686] transition-colors"
                >
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                
                <!-- Twitter -->
                <a 
                    href="https://twitter.com/fasticore" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-10 h-10 bg-sky-500 rounded-full flex items-center justify-center hover:bg-sky-600 transition-colors"
                >
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
                
                <!-- YouTube -->
                <a 
                    href="https://youtube.com/@fasticore" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors"
                >
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
            </div>
            <div class="text-center md:text-left">
                <p class="mb-1">
                    Fasticore Platform are trademarks from Fasticore Technology
                </p>
            </div>

            
            <!-- Legal Links -->
            <div class="flex items-center space-x-6">
                <a href="{{ route('terms') }}" class="hover:text-primary transition-colors">
                    Terms of use
                </a>
                <a href="{{ route('privacy') }}" class="hover:text-primary transition-colors">
                    Privacy policy
                </a>
            </div>
        </div>
            <!-- Divider -->
            <div class="border-t border-[#454552] my-8"></div>
            <!-- Copyright & Company Info -->
            <div class="text-center">
                <p>
                    © Copyright by Fasticore Technology – All right reserved
                </p>
            </div>
    </div>
</footer>