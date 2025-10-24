<section 
    class="relative bg-[#FFFFFF] pt-20 pb-16 sm:pt-32 sm:pb-24 md:pt-36 lg:pt-40 lg:pb-32 overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/herobg.png') }}');"
>    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4 sm:gap-6 lg:gap-12 items-center">
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
                <h1 class="text-2xl sm:text-4xl lg:text-6xl font-bold leading-tight mb-3 sm:mb-4 lg:mb-6">
                    <span class="text-[#454452]">Where</span><br>
                    <span class="text-[#FF6701]">Strategy</span><br>
                    <span class="text-[#454452]">Meets</span><br>
                    <span class="text-[#454452]">Execution.</span>
                </h1>
                
                <!-- Description -->
                <p class="text-md sm:text-sm lg:text-lg text-[#454452] leading-relaxed mb-4 sm:mb-6 lg:mb-8">
                    From tailored solutions to tech empowerment, Fasticore Academy equips you with the skills, while our experts build the systems to scale your business
                </p>
                
                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('project') }}" 
                        class="inline-flex items-center justify-center px-4 sm:px-6 lg:px-8 py-2 sm:py-3 lg:py-4 text-xs sm:text-sm lg:text-base font-semibold text-[#FFFFFF] bg-[#FF6701] rounded-full shadow-lg shadow-[#FF67014A] hover:bg-[#e55d01] hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF6701]"
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
                            alt="Professional woman holding tablet" 
                            class="w-full h-auto object-cover rounded-lg"
                            loading="eager">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Gradient Fade -->
    <div class="absolute bottom-0 left-0 right-0 h-32 sm:h-64 lg:h-96 bg-gradient-to-t from-white to-transparent pointer-events-none"></div>
</section>