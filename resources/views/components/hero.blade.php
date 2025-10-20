<section 
    class="relative bg-[#FFFFFF] pb-16 sm:pt-30 sm:pb-24 md:pt-20 lg:pt-30 lg:pb-32 overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/herobg.png') }}');"
>    
    <div class="container w-[90%] mx-auto px-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-4 items-center">
            <!-- Left Column - Content -->
            <div 
                class="max-w-xl"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    <span class="text-[#454452]">Where</span><br>
                    <span class="text-[#FF6701]">Strategy</span><br>
                    <span class="text-[#454452]">Meets</span><br>
                    <span class="text-[#454452]">Execution</span>
                </h1>
                
                <!-- Description -->
                <p class="text-base sm:text-lg text-[#454452] leading-relaxed mb-8 max-w-lg">
                    — From tailored solutions to tech empowerment, Fasticore Technology  driven by excellence and customer satisfaction builds practical, scalable, and transformativeequips you with the skills, while our experts build the systems to scale your business
                </p>
                
                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('contact') }}" 
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-[#FFFFFF] bg-[#FF6701] rounded-full shadow-lg shadow-[#FF67014A] hover:bg-[#FF6701] hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                    >
                        Join us now
                    </a>
                </div>
            </div>
            
            <!-- Right Column - Hero Image -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700 delay-150"
                x-transition:enter-start="opacity-0 transform translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <div class="relative z-10">
                    <!-- Hero Image -->
                    <div class="relative">
                        <img 
                            src="{{ asset('images/hero-professional.png') }}" 
                            alt="hero image" 
                            class="w-full h-auto object-cover rounded-lg pr-30"
                            loading="eager">
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Gradient Fade -->
        <div class="absolute bottom-0 left-0 right-0 h-[400px] bg-gradient-to-t from-white to-transparent z-10"></div>
    </div>
    
</section>