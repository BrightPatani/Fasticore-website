<section class="py-16 sm:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- left Column - Illustration -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700 delay-150"
                x-transition:enter-start="opacity-0 transform translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <div class="relative">
                    <!-- Replace this image src with your actual illustration -->
                    <img 
                        src="{{ asset('images/solution.png') }}" 
                        alt="Build with Fasticore - Development illustration" 
                        class="w-full h-auto"
                        loading="lazy"
                    >
                </div>
            </div>
            
            <!-- Left Column - Content -->
            <div 
                class="max-w-xl"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <!-- Main Heading -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452] mb-6">
                    Fasticore Solution
                </h2>
                
                <!-- Subheading -->
                <h3 class="text-lg sm:text-xl font-semibold text-[#FF6701] mb-6">
                    Smart Business Solutions for Africa and Beyond
                </h3>
                
                <!-- Description -->
                <p class="text-base text-[#454452] leading-relaxed mb-8">
                    We build in-house, transformative software like V-Porta  and FastiInvoice, designed to automate operations, unlock growth, and simplify business management across Africa.
                </p>

                <p class="text-base text-dark-600 leading-relaxed mb-8">
                    Fasticore delivers innovative, scalable products built to empower African businesses while staying competitive globally, helping companies grow faster and operate with confidence.
                </p>
                
                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('contact') }}" 
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-[#FF6701] rounded-full shadow-lg shadow-[#FF67014A] hover:bg-primary-600 hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                    >
                        Contact Us
                    </a>
                </div>
            </div>         
        </div>
    </div>
</section>