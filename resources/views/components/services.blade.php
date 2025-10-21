<section class="py-4 w-[90%] mx-auto sm:py-20 lg:py-24 bg-[#FFFFFF]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452] mb-4">
                Our Services
            </h2>
            <p class="text-base sm:text-lg text-[#454452] leading-relaxed">
                We Provide Customer driven and efficient services with effective sustainability.
            </p>
        </div>

        <!-- Services Carousel -->
        <div 
            x-data="{
                currentSlide: 0,
                interval: null,
                isPaused: false,
                services: [
                    {
                        title: 'Trainings',
                        description: 'Our academy develops excellent talents in product design, data analysis,  frontend, backend and mobile development who design, build, and maintain Solutions/products.',
                        icon: 'training'
                    },
                    {
                        title: 'AI & Machine Learning',
                        description: 'We build using the best AI and machine learning technology to develop powerful solutions for businesses.Our Solutions enhance efficiency, simplify processes, and help with smarter decision-making.',
                        icon: 'robot'
                    },
                    {
                        title: 'Design',
                        description: 'We combine creativity with clarity through compelling branding, web design, and UI/UX to create visual impressions that resonate with your brand identity and pass your message effectively',
                        icon: 'design'
                    },
                    {
                        title: 'Product Development',
                        description: 'From concept to launch, we transform your product ideas into market-ready solutions. Our team manages design, engineering, testing, and deployment with attention to every step in the journey.',
                        icon: 'product'
                    },
                    {
                        title: 'Web Development',
                        description: 'We create custom websites and web applications that fit your business needs. Our team uses the latest technology to make your site look good and work perfectly on any device.',
                        icon: 'web'
                    },
                    {
                        title: 'Mobile Development',
                        description: 'We create custom mobile applications that fit your business needs. Our team uses the latest technology to make your app look good and work perfectly on any device.',
                        icon: 'mobile'
                    },
                    {
                        title: 'Workflow Automation',
                        description: 'Our focus is on helping your business perform at its best. We provide AI-powered solutions and strategies to boost productivity through automation, and streamlining workflow',
                        icon: 'workflow'
                    },
                ],
                get totalSlides() {
                    return this.services.length;
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
                    }, 2000); 
                },
                stopAutoSlide() {
                    clearInterval(this.interval);
                    this.interval = null;
                }
            }"
            x-init="
                startAutoSlide();
                window.addEventListener('resize', () => {
                    if (currentSlide > totalSlides - slidesToShow) {
                        currentSlide = Math.max(0, totalSlides - slidesToShow);
                    }
                });
            "
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
                    <!-- Service Cards -->
                    <template x-for="(service, index) in services" :key="index">
                        <div 
                            class="w-full pb-12 sm:w-1/2 lg:w-1/3 xl:w-1/4 flex-shrink-0 px-3 cursor-grab active:cursor-grabbing"
                            style="height: 420px;"
                            x-data="{ hover: false }"
                            @mouseenter="hover = true"
                            @mouseleave="hover = false"
                        >
                            <div 
                                class="relative bg-[#FFFFFF] rounded-2xl shadow-xl p-8 overflow-hidden h-full transition-all duration-300"
                                :class="hover ? 'transform -translate-y-2 shadow-xl' : ''"
                            >
                                <!-- Blue Background Overlay (slides in from right) -->
                                <div 
                                    class="absolute inset-0 bg-[#003686] transition-transform duration-500 ease-out z-0"
                                    :class="hover ? 'translate-x-0' : '-translate-x-full'"
                                ></div>

                                <!-- Content Wrapper (relative positioning to stay above overlay) -->
                                <div class="relative z-10 h-full flex flex-col">
                                    <!-- Title -->
                                    <h3 
                                        class="text-xl font-semibold mb-3 transition-colors duration-300"
                                        :class="hover ? 'text-[#FFFFFF]' : 'text-[#454452]'"
                                        x-text="service.title"
                                    ></h3>

                                    <!-- Description -->
                                    <p 
                                        class="text-md leading-relaxed flex-grow transition-colors duration-300"
                                        :class="hover ? 'text-[#FFFFFF]' : 'text-[#454452]'"
                                        x-text="service.description"
                                    ></p>

                                    <!-- Bottom-Right Icon -->
                                    <div class="flex justify-end mt-4">
                                        <img 
                                            :src="'{{ asset('images') }}/icons/' + service.icon + '.png'" 
                                            :alt="service.title + ' Icon'"
                                            class="w-24 h-24 select-none pointer-events-none object-contain transition-opacity duration-300"
                                            :class="hover ? 'opacity-80' : 'opacity-100'"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>