<section 
    class="relative bg-gradient-to-b from-[#F6F6FC] to-[#FFFFFF] pt-8 pb-4 sm:pt-40 sm:pb-10 md:pt-40 lg:pt-2 lg:pb-10 overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/herobg.png') }}');"
>    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-2 sm:gap-6 lg:gap-12 items-start lg:items-center min-h-[85vh] sm:min-h-0">
            <!-- Left Column - Content -->
            <div 
                class="max-w-xl flex flex-col ml-44 pt-10 justify-center z-10"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <!-- Main Heading -->
                <h1 class="text-xl sm:text-4xl lg:text-6xl font-bold leading-tight mb-2 sm:mb-4 lg:mb-6">
                    <span class="text-[#454452]">Where</span><br>
                    <span class="text-[#FF6701]">Strategy</span><br>
                    <span class="text-[#454452]">Meets</span><br>
                    <span class="text-[#454452]">Execution.</span>
                </h1>
                
                <!-- Description -->
                <p class="text-md sm:text-sm lg:text-lg text-[#454452] leading-relaxed mb-3 sm:mb-6 lg:mb-8">
                    — From tailored solutions to tech empowerment, Fasticore Technology  driven by excellence and customer satisfaction builds practical, scalable, and transformativeequips you with the skills, while our experts build the systems to scale your business
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
                class="relative h-[80vh] sm:h-auto flex items-end sm:items-center"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-transition:enter="transition ease-out duration-700 delay-150"
                x-transition:enter-start="opacity-0 transform translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <div class="relative mr-44 z-0 w-full h-full sm:h-auto">
                    <!-- Hero Image -->
                    <img 
                        src="{{ asset('images/hero-professional.png') }}" 
                        alt="Professional Woman"
                        class="w-full h-full sm:h-auto object-cover sm:object-contain object-bottom sm:rounded-lg z-10"
                        loading="eager">
                </div>
                 <!-- Bottom Gradient Fade -->
            </div>
           <div class="absolute bottom-0 left-0 right-0 h-24 sm:h-64 lg:h-96 bg-gradient-to-t from-[#FFFFFF] to-transparent pointer-events-none"></div>
        </div>
    </div>
</section>