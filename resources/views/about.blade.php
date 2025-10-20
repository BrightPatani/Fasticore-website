@extends('layouts.app')

@section('title', 'About Us - Fasticore Technology')

@section('content')
<div class="relative h-screen bg-[#454452] overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('images/about.png') }}" 
            alt="Fasticore Technology Background" 
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>


   <!-- Hero Content -->
    <div class="relative z-10 w-full h-full flex flex-col justify-start pt-32 sm:pt-40 px-6 sm:px-12 lg:px-20">
        <div class="w-full">
            <h1 class="text-4xl text-center sm:text-5xl lg:text-6xl font-bold text-[#FFFFFF] leading-tight mb-6 sm:mb-8">
                About Fasticore <span class="text-[#FF6701]">Technology</span>
            </h1>
            <p class="text-justify mx-auto sm:text-lg lg:text-xl text-[#FFFFFF] leading-relaxed max-w-7xl">
                We are a software development company driven by excellence and customer satisfaction. 
                Fasticore doesn’t just help businesses thrive — we build scalable AI solutions, 
                provide digital transformation services, and train top-tier talent to empower 
                business growth and create solutions in Africa and beyond.
            </p>
        </div>
    </div>

    <!-- Bottom Gradient Fade -->
    <div class="absolute bottom-0 left-0 right-0 h-96 bg-gradient-to-t from-[#FFFFFF] to-transparent z-0"></div>

</div> 

<!-- Story Section -->
<section class="relative -mt-64 sm:-mt-64 pb-16 sm:pb-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="backdrop-blur-md bg-[#454452] rounded-2xl shadow-2xl p-8 sm:p-12 lg:p-16">
                <h2 class="text-3xl text-[#ffffff] sm:text-4xl lg:text-5xl font-bold mb-8">
                    Our Story
                </h2>
                <p class="text-[#ffffff] leading-relaxed text-base sm:text-lg">
                    Fasticore Technology began in September 2021 with a vision to build meaningful
                    solutions while serving businesses and training talents. What started as a small
                    training initiative with five students quickly grew into larger partnerships,
                    including training over 150 students with ELabsafrica in 2023. Later that year, we
                    formally incorporated as Fasticore Technology Limited. By 2024, our focus shifted
                    to talent development and creating AI-powered business solutions. Now, we build
                    practical, scalable, and impactful AI solutions for Africa, supported by a talent
                    pipeline from our academy and validated through real-world client services.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- our core values --}}
<section class="py-16 sm:py-20 lg:py-24 bg-[#FFFFFF]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <h2 class="text-3xl text-left text-[#454452] sm:text-4xl lg:text-5xl font-bold text-[#454452] mb-4">
                Our Core <span class="text-[#FF6701]">Values</span>
            </h2>
            <p class="text-left sm:text-lg text-[#454452] leading-relaxed">
                We provide customer-driven and efficient services with sustainable impact.
            </p>
        </div>

        <!-- Values Carousel -->
        <div 
            x-data="{
                currentSlide: 0,
                interval: null,
                isPaused: false,
                values: [
                    {
                        title: 'Excellence',
                        description: 'We believe in striving for the best quality in every solution we deliver.',
                        icon: 'excel'
                    },
                    {
                        title: 'Innovation',
                        description: 'We embrace effective creativity when building that ensures our solutions/ products  stand out and exceed expectations.',
                        icon: 'innovation'
                    },
                    {
                        title: 'Customer Satisfaction',
                        description: 'We believe in building long-term relationships with our clients, working as trusted partners rather than just service providers.',
                        icon: 'customer'
                    },
                    {
                        title: 'Integrity',
                        description: 'Transparency and trust is how we build, teach, and serve. We always deliver as promised',
                        icon: 'Integrity'
                    },
                    {
                        title: 'Continuous Growth',
                        description: 'Our clients are at the heart of what we do — we tailor every solution to meet their unique goals.',
                        icon: 'Continuous'
                    }
                ],
                get totalSlides() {
                    return this.values.length;
                },
                get slidesToShow() {
                    if (window.innerWidth >= 1280) return 4;
                    if (window.innerWidth >= 1024) return 3;
                    if (window.innerWidth >= 640) return 2;
                    return 1;
                },
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % (this.totalSlides - this.slidesToShow + 1);
                },
                startAutoSlide() {
                    this.interval = setInterval(() => {
                        if (!this.isPaused) this.nextSlide();
                    }, 2500);
                },
                stopAutoSlide() {
                    clearInterval(this.interval);
                    this.interval = null;
                }
            }"
            x-init="startAutoSlide(); window.addEventListener('resize', () => { if (currentSlide > totalSlides - slidesToShow) currentSlide = Math.max(0, totalSlides - slidesToShow); });"
            @mouseenter="isPaused = true"
            @mouseleave="isPaused = false"
            class="relative"
        >
            <!-- Carousel Container -->
            <div class="overflow-x-auto scrollbar-hide" x-ref="carousel">
                <div 
                    class="flex transition-transform duration-500 ease-out"
                    :style="`transform: translateX(-${currentSlide * (100 / slidesToShow)}%)`"
                >
                    <!-- Value Cards -->
                    <template x-for="(value, index) in values" :key="index">
                        <div 
                            class="w-full h-80 sm:w-1/2 lg:w-1/3 xl:w-1/4 flex-shrink-0 px-8 cursor-grab active:cursor-grabbing"
                            x-data="{ hover: false }"
                            @mouseenter="hover = true"
                            @mouseleave="hover = false"
                        >
                            <div 
                                class="relative bg-[#FFFFFF] rounded-2xl shadow-md p-8 overflow-hidden h-full transition-all duration-300"
                                :class="hover ? 'transform -translate-y-2 shadow-lg' : ''"
                            >
                                <!-- Title -->
                                <h3 class="text-xl font-semibold text-gray-800 mb-3" x-text="value.title"></h3>

                                <!-- Description -->
                                <p class="text-[#454452] text-md leading-relaxed" x-text="value.description"></p>

                               <!-- Faint Icon -->
                                <img 
                                    :src="'{{ asset('images/values') }}/' + value.icon + '.png'" 
                                    :alt="value.title + ' Icon'"
                                    class="absolute bottom-4 right-4 w-16 h-16 mt-16 select-none pointer-events-none object-contain"
                                />

                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Key Strength Section -->
<section class="mx-auto py-16 sm:py-20 lg:py-24 bg-[#454452]">
    <div class="container align-center mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#FFFFFF] mb-12 sm:mb-16">
            Our Key <span class="text-[#FF6701]">Strength</span>
        </h2>

        <!-- Strength Cards Grid -->
       <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 max-w-6xl mx-auto justify-items-center">
            <!-- Card 1: Full Stack Enterprise -->
            <div class="bg-[#454452] rounded-bl p-8 sm:p-10 lg:p-12 shadow-2xl shadow-[#000000]">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <!-- Left Side: Text Content -->
                    <div class="flex-1 max-w-md">
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#FFFFFF] mb-6">
                            Full Stack Enterprise
                        </h3>
                        <p class="text-[#FFFFFF] text-base sm:text-lg leading-relaxed">
                            From frontend interfaces to backend infrastructure, our team masters the complete technology stack for comprehensive solutions.
                        </p>
                    </div>

                    <!-- Right Side: Icon -->
                    <div class="flex-shrink-0">
                        <img 
                            src="{{ asset('images/icons/fullstack.png') }}" 
                            alt="Full Stack Enterprise Icon" 
                            class="w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48"
                        >
                    </div>
                </div>
            </div>
            
            <!-- Card 2: Scalable Architecture -->
            <div class="bg-[#454452] rounded-bl-2xl rounded-tr-2xl rounded-tl-xl rounded-br-xl p-8 sm:p-10 lg:p-12 shadow-2xl shadow-[#000000]">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <!-- Left Side: Text Content -->
                    <div class="flex-1 max-w-md">
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#FFFFFF] mb-6">
                            Scalable Architecture
                        </h3>
                        <p class="text-[#FFFFFF] text-base sm:text-lg leading-relaxed">
                            We design systems that grow with your business, ensuring your technology investments remain valuable as you scale.
                        </p>
                    </div>

                    <!-- Right Side: Icon -->
                    <div class="flex-shrink-0">
                        <img 
                            src="{{ asset('images/icons/scalable.png') }}" 
                            alt="Full Stack Enterprise Icon" 
                            class="w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48"
                        >
                    </div>
                </div>
            </div>

            <!-- Card 3: cross platform development -->
            <div class="bg-[#454452] rounded-bl-2xl rounded-tr-2xl rounded-tl-xl rounded-br-xl p-8 sm:p-10 lg:p-12 shadow-2xl shadow-[#000000]">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <!-- Left Side: Text Content -->
                    <div class="flex-1 max-w-md">
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#FFFFFF] mb-6">
                            Cross Platform Development
                        </h3>
                        <p class="text-[#FFFFFF] text-base sm:text-lg leading-relaxed">
                            From frontend interfaces to backend infrastructure, our team masters the complete technology stack for comprehensive solutions.
                        </p>
                    </div>

                    <!-- Right Side: Icon -->
                    <div class="flex-shrink-0">
                        <img 
                            src="{{ asset('images/icons/cross.png') }}" 
                            alt="Full Stack Enterprise Icon" 
                            class="w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48"
                        >
                    </div>
                </div>
            </div>

            {{-- card 4: Cloud Native Solution --}}
                        <div class="bg-[#454452] rounded-bl-2xl rounded-tr-2xl rounded-tl-xl rounded-br-xl p-8 sm:p-10 lg:p-12 shadow-2xl shadow-[#000000]">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <!-- Left Side: Text Content -->
                    <div class="flex-1 max-w-md">
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#FFFFFF] mb-6">
                             Cloud Native Solution
                        </h3>
                        <p class="text-[#FFFFFF] text-base sm:text-lg leading-relaxed">
                            We leverage modern cloud technologies to build resilient, efficient, and cost-effective applications that perform at scale.
                        </p>
                    </div>

                    <!-- Right Side: image -->
                    <div class="flex-shrink-0">
                        <img 
                            src="{{ asset('images/icons/cloud.png') }}" 
                            alt="Full Stack Enterprise Icon" 
                            class="w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-16 sm:py-20 lg:py-24 bg-[#ffffff]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-20 text-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452]">
                Meet Our Leadership <span class="text-[#FF6701]">Team</span>
            </h2>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 max-w-6xl mx-auto mb-16">
            
            <!-- Team Member 1: Anih Victor -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-intersect="visible = true"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <div class="relative pt-16 pb-8">
                    <!-- Orange Background Layer -->
                    <div class="absolute inset-0 top-12 bg-[#FF6701] rounded-3xl shadow-lg transform scale-x-105 scale-y-105"></div>
                    
                    <!-- [#FFFFFF] Card Layer (Front) -->
                    <div class="relative bg-[#FFFFFF] rounded-3xl shadow-xl p-8 pt-20 hover:shadow-2xl transition-all duration-300">
                        
                        <!-- Avatar (overlapping top) -->
                        <div class="absolute -top-14 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 rounded-full border-4 border-[#FFFFFF] shadow-2xl overflow-hidden bg-gradient-to-br from-orange-200 to-orange-400">
                                <img 
                                    src="{{ asset('images/team/anih-victor.jpg') }}" 
                                    alt="Anih Victor" 
                                    class="w-full h-full object-cover"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="text-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-[#454452] mb-2">
                                Anih Victor
                            </h3>
                            <p class="text-[#FF6701] font-semibold text-lg sm:text-xl mb-6">
                                Chief Technology Officer
                            </p>
                            <p class="text-[#454452] leading-relaxed text-sm sm:text-base">
                                With 10+ years in software architecture and emerging technologies, Victor leads our technical vision and ensures cutting-edge solutions for every project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-intersect="visible = true"
                x-transition:enter="transition ease-out duration-700 delay-100"
                x-transition:enter-start="opacity-0 transform -translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <div class="relative pt-16 pb-8">

                    <div class="absolute inset-0 top-12 bg-[#FF6701] rounded-full shadow-lg transform scale-x-90 scale-y-105"></div>
                    
                    
                    <div class="relative bg-[#FFFFFF] rounded-3xl shadow-xl p-8 pt-20 shadow-lg transition-all duration-300 scale-x-100 scale-y-105">
                        
                        <!-- Avatar (overlapping top) -->
                        <div class="absolute -top-14 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 rounded-full border-4 border-[#FFFFFF] shadow-2xl overflow-hidden bg-gradient-to-br from-orange-200 to-orange-400">
                                <img 
                                    src="{{ asset('images/team/samuel-otikor.jpg') }}" 
                                    alt="Samuel Otikor" 
                                    class="w-full h-full object-cover"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="text-center">
                            <h3 class="text-2xl sm:text-3xl font-bold text-[#454452] mb-2">
                                Samuel Otikor
                            </h3>
                            <p class="text-[#FF6701] font-semibold text-lg sm:text-xl mb-6">
                                Chief Operations Officer
                            </p>
                            <p class="text-[#454452] leading-relaxed text-sm sm:text-base">
                                With 6+ years in operations management, Samuel excels in streamlining processes, operations and managing complex projects, ensuring seamless delivery.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Second Row - 3 Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16 max-w-6xl mx-auto">
            
            <!-- Team Member 3: Justin -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-intersect="visible = true"
                x-transition:enter="transition ease-out duration-700 delay-200"
                x-transition:enter-start="opacity-0 transform -translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <div class="relative pt-16 pb-8">
                    <!-- Orange Background Layer -->
                    <div class="absolute inset-0 top-12 bg-[#FF6701] rounded-full shadow-lg transform scale-x-90 scale-y-105"></div>
                    
                    <!-- [#FFFFFF] Card Layer (Front) -->
                    <div class="relative bg-[#FFFFFF] rounded-3xl shadow-xl p-8 pt-20 shadow-lg transition-all duration-300 scale-x-100 scale-y-105">
                        
                        <!-- Avatar (overlapping top) -->
                        <div class="absolute -top-14 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 rounded-full border-4 border-[#FFFFFF] shadow-2xl overflow-hidden bg-gradient-to-br from-green-200 to-green-400">
                                <img 
                                    src="{{ asset('images/team/justin.jpg') }}" 
                                    alt="Justin" 
                                    class="w-full h-full object-cover"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="text-center">
                            <h3 class="text-xl sm:text-2xl font-bold text-[#454452] mb-2">
                                Justin
                            </h3>
                            <p class="text-[#FF6701] font-semibold text-base sm:text-lg mb-4">
                                Frontend Engineer Lead
                            </p>
                            <p class="text-[#454452] leading-relaxed text-sm">
                                Justin specializes in creating responsive, accessible, and performant user interfaces using the latest frontend technologies and frameworks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 4: Bright -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-intersect="visible = true"
                x-transition:enter="transition ease-out duration-700 delay-300"
                x-transition:enter-start="opacity-0 transform -translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <div class="relative pt-16 pb-8">
                    <!-- Orange Background Layer -->
                    <div class="absolute inset-0 top-12 bg-[#FF6701] rounded-3xl shadow-lg transform scale-x-105 scale-y-105"></div>
                    
                    <!-- [#FFFFFF] Card Layer (Front) -->
                    <div class="relative bg-[#FFFFFF] rounded-3xl shadow-xl p-6 pt-20 hover:shadow-2xl transition-all duration-300">
                        
                        <!-- Avatar (overlapping top) -->
                        <div class="absolute -top-14 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 rounded-full border-4 border-[#FFFFFF] shadow-2xl overflow-hidden bg-gradient-to-br from-blue-200 to-blue-400">
                                <img 
                                    src="{{ asset('images/team/bright.jpg') }}" 
                                    alt="Bright" 
                                    class="w-full h-full object-cover"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="text-center">
                            <h3 class="text-xl sm:text-2xl font-bold text-[#454452] mb-2">
                                Bright
                            </h3>
                            <p class="text-[#FF6701] font-semibold text-base sm:text-lg mb-4">
                                Backend Engineer Lead
                            </p>
                            <p class="text-[#454452] leading-relaxed text-sm">
                                Bright builds robust, scalable server-side solutions and APIs that power our applications with reliability and high performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 5: Chigozie Otoju -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-intersect="visible = true"
                x-transition:enter="transition ease-out duration-700 delay-400"
                x-transition:enter-start="opacity-0 transform -translate-y-12"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <div class="relative pt-16 pb-8">
                    <!-- Orange Background Layer -->
                    <div class="absolute inset-0 top-12 bg-[#FF6701] rounded-3xl shadow-lg transform scale-x-105 scale-y-105"></div>
                    
                    <!-- [#FFFFFF] Card Layer (Front) -->
                    <div class="relative bg-[#FFFFFF] rounded-3xl shadow-xl p-6 pt-20 hover:shadow-2xl transition-all duration-300">
                        
                        <!-- Avatar (overlapping top) -->
                        <div class="absolute -top-14 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 rounded-full border-4 border-[#FFFFFF] shadow-2xl overflow-hidden bg-gradient-to-br from-purple-200 to-purple-400">
                                <img 
                                    src="{{ asset('images/team/chigozie-otoju.jpg') }}" 
                                    alt="Chigozie Otoju" 
                                    class="w-full h-full object-cover"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="text-center">
                            <h3 class="text-xl sm:text-2xl font-bold text-[#454452] mb-2">
                                Chigozie Otoju
                            </h3>
                            <p class="text-[#FF6701] font-semibold text-base sm:text-lg mb-4">
                                Lead Product Designer
                            </p>
                            <p class="text-[#454452] leading-relaxed text-sm">
                                Chigozie combines user research with creative design expertise to craft intuitive interfaces that delight users and drive business results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#FFFFFF]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-12">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452]">
                What Our Client Says
            </h2>
        </div>

        <!-- Testimonials Grid -->
        <div class="max-w-6xl mx-auto">
            
            <!-- First Row: 2 Testimonials -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                
                <!-- Testimonial 1: Andrew Davis -->
                <div 
                    class="group relative bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-primary"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <!-- Quote Icon -->
                    <div class="absolute top-6 right-6 text-primary opacity-10">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <!-- Testimonial Text -->
                    <p class="text-[#454452] text-base leading-relaxed mb-8 relative z-10">
                        "The mobile app Fasticore developed for us has significantly improved our customer engagement. The user interface is intuitive, and the performance is outstanding. Their post-launch support has been exceptional."
                    </p>

                    <!-- Client Info -->
                    <div class="flex items-center">
                        <!-- Avatar -->
                        <div class="w-14 h-14 rounded-full overflow-hidden bg-gradient-to-br from-blue-200 to-blue-400 flex-shrink-0 border-2 border-[#FFFFFF] shadow-md">
                            <img 
                                src="{{ asset('images/testimonials/andrew-davis.jpg') }}" 
                                alt="Andrew Davis" 
                                class="w-full h-full object-cover"
                            >
                        </div>
                        
                        <!-- Name & Title -->
                        <div class="ml-4">
                            <h4 class="text-[#454452] font-bold text-lg">
                                Andrew Davis
                            </h4>
                            <p class="text-[#454452] text-sm">
                                CTO, Retail Max
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2: Lisa Johnson -->
                <div 
                    class="group relative bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-primary"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700 delay-100"
                    x-transition:enter-start="opacity-0 transform -translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <!-- Quote Icon -->
                    <div class="absolute top-6 right-6 text-primary opacity-10">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <!-- Testimonial Text -->
                    <p class="text-[#454452] text-base leading-relaxed mb-8 relative z-10">
                        "Working with Fasticore has been a game-changer for our startup. They not only built an amazing product but also provided valuable insights that helped shape our business strategy. Highly recommended!"
                    </p>

                    <!-- Client Info -->
                    <div class="flex items-center">
                        <!-- Avatar -->
                        <div class="w-14 h-14 rounded-full overflow-hidden bg-gradient-to-br from-pink-200 to-pink-400 flex-shrink-0 border-2 border-[#FFFFFF] shadow-md">
                            <img 
                                src="{{ asset('images/testimonials/lisa-johnson.jpg') }}" 
                                alt="Lisa Johnson" 
                                class="w-full h-full object-cover"
                            >
                        </div>
                        
                        <!-- Name & Title -->
                        <div class="ml-4">
                            <h4 class="text-[#454452] font-bold text-lg">
                                Lisa Johnson
                            </h4>
                            <p class="text-[#454452] text-sm">
                                Founder, InnovativeLabs
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Second Row: 1 Centered Testimonial -->
            <div class="flex justify-center">
                <div 
                    class="w-full md:w-2/3 lg:w-1/2"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <!-- Testimonial 3: Robert Martinez -->
                    <div class="group relative bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-primary">
                        
                        <!-- Quote Icon -->
                        <div class="absolute top-6 right-6 text-primary opacity-10">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>

                        <!-- Testimonial Text -->
                        <p class="text-[#454452] text-base leading-relaxed mb-8 relative z-10">
                            "Fasticore Technology transformed our outdated legacy system into a modern, scalable platform. Their attention to detail and technical expertise exceeded our expectations. The project was delivered on time and within budget."
                        </p>

                        <!-- Client Info -->
                        <div class="flex items-center">
                            <!-- Avatar -->
                            <div class="w-14 h-14 rounded-full overflow-hidden bg-gradient-to-br from-[#454452] to-[#ffffff]0 flex-shrink-0 border-2 border-[#FFFFFF] shadow-md">
                                <img 
                                    src="{{ asset('images/testimonials/robert-martinez.jpg') }}" 
                                    alt="Robert Martinez" 
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            
                            <!-- Name & Title -->
                            <div class="ml-4">
                                <h4 class="text-[#454452] font-bold text-lg">
                                    Robert Martinez
                                </h4>
                                <p class="text-[#454452] text-sm">
                                    CEO, Tech Flows Solutions
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="py-16 sm:py-20 lg:py-24 bg-[#ffffff]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-12">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452]">
                Featured Projects
            </h2>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 h-full max-w-7xl mx-auto">
            
            <!-- Project Card 1 -->
            <article class="group bg-[#FFFFFF] rounded-2xl overflow-hidden border-2 border-primary shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden bg-[#454452]">
                    <img src="{{ asset('images/features/ecommerce.png') }}" alt="Ecommerce Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-0">
                    <div class="px-6 py-4 border-t-4 border-primary">
                        <h3 class="text-xl font-bold text-[#454452]">Next Gen Ecommerce Platform</h3>
                    </div>
                    <div class="px-6 py-6">
                        <p class="text-[#454452] text-sm leading-relaxed">A comprehensive online marketplace with advanced features including AI-powered recommendations, real-time inventory management, and seamless payment integration.</p>
                    </div>
                </div>
            </article>

            <!-- Project Card 2 -->
            <article class="group bg-[#FFFFFF] rounded-2xl overflow-hidden border-2 border-primary shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden bg-[#454452]">
                    <img src="{{ asset('images/features/healthcare.png') }}" alt="Healthcare Management" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-0">
                    <div class="px-6 py-4 border-t-4 border-primary">
                        <h3 class="text-xl font-bold text-[#454452]">Smart Healthcare Management</h3>
                    </div>
                    <div class="px-6 py-6">
                        <p class="text-[#454452] text-sm leading-relaxed">An integrated healthcare platform that streamlines patient management, appointment scheduling, and electronic medical records with enhanced security and compliance features.</p>
                    </div>
                </div>
            </article>

            <!-- Project Card 3 -->
            <article class="group bg-[#FFFFFF] rounded-2xl overflow-hidden border-2 border-primary shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden bg-[#454452]">
                    <img src="{{ asset('images/features/finance.png') }}" alt="Financial Analytics" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-0">
                    <div class="px-6 py-4 border-t-4 border-primary">
                        <h3 class="text-xl font-bold text-[#454452]">Financial Analytics Dashboard</h3>
                    </div>
                    <div class="px-6 py-6">
                        <p class="text-[#454452] text-sm leading-relaxed">A sophisticated data visualization platform that provides real-time financial insights, risk assessment, and predictive analytics for investment firms.</p>
                    </div>
                </div>
            </article>

            <!-- Project Card 4 -->
            <article class="group bg-[#FFFFFF] rounded-2xl overflow-hidden border-2 border-primary shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden bg-[#454452]">
                    <img src="{{ asset('images/features/interactive.png') }}" alt="Learning Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-0">
                    <div class="px-6 py-4 border-t-4 border-primary">
                        <h3 class="text-xl font-bold text-[#454452]">Interactive Learning Platform</h3>
                    </div>
                    <div class="px-6 py-6">
                        <p class="text-[#454452] text-sm leading-relaxed">A modern e-learning solution with interactive content, progress tracking, gamification elements, and comprehensive analytics for educators.</p>
                    </div>
                </div>
            </article>

            <!-- Project Card 5 -->
            <article class="group bg-[#FFFFFF] rounded-2xl overflow-hidden border-2 border-primary shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden bg-[#454452]">
                    <img src="{{ asset('images/features/social.png') }}" alt="Supply Chain" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-0">
                    <div class="px-6 py-4 border-t-4 border-primary">
                        <h3 class="text-xl font-bold text-[#454452]">Small Supply Chain Solution</h3>
                    </div>
                    <div class="px-6 py-6">
                        <p class="text-[#454452] text-sm leading-relaxed">An end-to-end supply chain management system with integration, real-time tracking and predictive maintenance capabilities.</p>
                    </div>
                </div>
            </article>

            <!-- Project Card 6 -->
            <article class="group bg-[#FFFFFF] rounded-2xl overflow-hidden border-2 border-primary shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden bg-[#454452]">
                    <img src="{{ asset('images/features/business.png') }}" alt="Business Intelligence" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-0">
                    <div class="px-6 py-4 border-t-4 border-primary">
                        <h3 class="text-xl font-bold text-[#454452]">Business Intelligence Suite</h3>
                    </div>
                    <div class="px-6 py-6">
                        <p class="text-[#454452] text-sm leading-relaxed">A comprehensive BI platform that transforms raw data into actionable insights with advanced data mining and machine learning capabilities.</p>
                    </div>
                </div>
            </article>

        </div>

         <!-- Call-to-Action Section -->
        <div class="flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 py-16 sm:py-20 bg-[#FFFFFF]">
            
            <!-- Content Wrapper -->
            <div class="max-w-4xl mx-auto">
                
                <!-- Heading -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1F1F1F] mb-6 leading-tight">
                    Ready to Transform Your Ideas into Reality
                </h2>

                <!-- Subtext -->
                <p class="text-base sm:text-lg text-[#454452] mb-10 max-w-3xl mx-auto leading-relaxed">
                    Let's discuss how Fasticore Technology can help accelerate your business growth through innovative software solutions.
                </p>

                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('contact') }}" 
                        class="inline-flex items-center justify-center px-10 py-4 text-base sm:text-lg font-semibold text-[#FF6701] bg-transparent border-2 border-[#FF6701] rounded-lg hover:bg-[#FF6701] hover:text-[#FFFFFF] transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
                    >
                        Get Started Today
                    </a>
                </div>

            </div>
        </div>

        @include('components.footer')

    </div>
</section>


@endsection
