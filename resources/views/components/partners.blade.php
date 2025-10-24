<section class="py-16 sm:py-20 lg:py-24 bg-[#ffffff]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Section: Globe & CTA -->
        <div class="text-center mb-8">
            
            <div 
                class="relative max-w-4xl mx-auto mb-12"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
            >
                                       
                    <!-- 3D Globe SVG -->
                    <div class="w-full flex justify-center px-4">
                        <img 
                            src="{{ asset('images/globe.png') }}" 
                            alt="3D Globe Illustration" 
                            class="w-full h-auto max-w-lg sm:max-w-md md:max-w-lg lg:max-w-2xl object-contain"
                            loading="lazy"
                        />
                    </div>

                    <!-- Main Heading -->
                    <h2 
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-2xl sm:text-3xl lg:text-4xl font-bold text-[#454452] mb-4 text-center w-full px-4 z-20"
                        x-data="{ visible: false }"
                        x-init="setTimeout(() => visible = true, 300)"
                        x-show="visible"
                        x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                    >
                        Make Fasticore your technology partner today!
                    </h2>
                </div>
            </div>
            
            <!-- Subheading -->
            <p 
                class="text-center text-[#454452] max-w-2xl mx-auto mb-8"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 500)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                We take the burden of innovation and scalability off your shoulders while you focus on your business and we also provide solutions that make it easy to run your business anywhere in the world.
            </p>
            
            <!-- Features List -->
            <div 
                class="flex flex-wrap items-center justify-center gap-4 mt-16 text-xl text-[#454452]"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 700)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <span class="flex items-center">
                    <span class="w-2 h-2 bg-[#454452]  rounded-full mr-2"></span>
                    Technology Advice
                </span>
                <span class="flex items-center">
                    <span class="w-2 h-2 bg-[#454452] rounded-full mr-2"></span>
                    Innovation
                </span>
                <span class="flex items-center">
                    <span class="w-2 h-2 bg-[#454452] rounded-full mr-2"></span>
                    Right Solution
                </span>
                <span class="flex items-center">
                    <span class="w-2 h-2 bg-[#454452] rounded-full mr-2"></span>
                    Client's Support
                </span>
            </div>
        </div>
        
        <!-- Bottom Section: Trusted Partners -->
        <div 
            class="text-center"
            x-data="{ visible: false }"
            x-init="setTimeout(() => visible = true, 900)"
            x-show="visible"
            x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 transform translate-y-8"
            x-transition:enter-end="opacity-100 transform translate-y-0"
        >
            <h3 class="text-xl font-semibold text-[#454452] mt-16">
                We're trusted by
            </h3>
            
            <!-- Partner Logos -->
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 lg:gap-16">
                <!-- Pecstech Africa -->
                <div class="grayscale hover:grayscale-0 transition-all duration-300 opacity-60 hover:opacity-100">
                    <img 
                        src="{{ asset('images/partners/pecstech.png') }}" 
                        alt="Pecstech Africa" 
                        class="h-12 sm:h-16 w-auto"
                    >
                </div>
                
                <!-- ZellaSoft IT -->
                <div class="grayscale hover:grayscale-0 transition-all duration-300 opacity-60 hover:opacity-100">
                    <img 
                        src="{{ asset('images/partners/zellasoft.png') }}" 
                        alt="ZellaSoft IT" 
                        class="h-12 sm:h-16 w-auto"
                    >
                </div>
                
                <!-- Elabsafrica -->
                <div class="grayscale hover:grayscale-0 transition-all duration-300 opacity-60 hover:opacity-100">
                    <img 
                        src="{{ asset('images/partners/elabsafrica.png') }}" 
                        alt="Elabsafrica" 
                        class="h-12 sm:h-16 w-auto"
                    >
                </div>
                
                <!-- j -->
                <div class="grayscale hover:grayscale-0 transition-all duration-300 opacity-60 hover:opacity-100">
                    <img 
                        src="{{ asset('images/partners/j.png') }}" 
                        alt="j" 
                        class="h-12 sm:h-16 w-auto"
                    >
                </div>
            </div>
        </div>
        
    </div>
</section>