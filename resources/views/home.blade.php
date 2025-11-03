@extends('layouts.app')

@section('title', 'Fasticore Technologies')

@section('meta_description', 'Fasticore Technologies delivers AI-powered enterprise solutions. Transform challenges into measurable outcomes with cutting-edge strategy and seamless execution.')

@section('content')
    
<section 
    class="relative bg-gradient-to-b overflow-hidden bg-cover bg-center bg-no-repeat z-0"
    style="background-image: url('{{ asset('images/herobg.png') }}');"
>    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Mobile Layout -->
        <div class="sm:hidden relative min-h-screen flex items-center">
            <!-- Background Image for Mobile - Full height, positioned on the right -->
            <div 
                class="absolute right-0 top-0 bottom-0 w-full bg-no-repeat bg-cover bg-left-top"
                style="background-image: url('{{ asset('images/hero-professional.png') }}'); background-position: left center;"
            ></div>
            
            <!-- Content positioned on left overlapping the image -->
            <div 
                class="relative z-10 w-full pr-4"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <!-- Main Heading -->
                <h1 class="text-2xl font-bold leading-tight mb-3">
                    <span class="text-[#454452]">Where</span><br>
                    <span class="text-[#FF6701]">Strategy</span><br>
                    <span class="text-[#454452]">Meets</span><br>
                    <span class="text-[#454452]">Execution.</span>
                </h1>
                
                <!-- Description -->
                <p class="text-xs text-[#454452] leading-relaxed mb-4 max-w-[200px]">
                    From tailored solutions to tech empowerment, Fasticore Academy equips you with the skills, while our experts build the systems to scale your business
                </p>
                
                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('project') }}" 
                        class="inline-flex items-center justify-center px-5 py-2.5 text-xs font-semibold text-[#FFFFFF] bg-[#FF6701] rounded-full shadow-lg shadow-[#FF67014A] hover:bg-[#e55d01] hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF6701]"
                    >
                        Join us now
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Desktop/Tablet Layout -->
        <div class="hidden sm:grid grid-cols-2 gap-6 lg:gap-12 items-center py-20 lg:py-32">
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
                <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-4 lg:mb-6">
                    <span class="text-[#454452]">Where</span><br>
                    <span class="text-[#FF6701]">Strategy</span><br>
                    <span class="text-[#454452]">Meets</span><br>
                    <span class="text-[#454452]">Execution.</span>
                </h1>
                
                <!-- Description -->
                <p class="text-sm lg:text-lg text-[#454452] leading-relaxed mb-6 lg:mb-8">
                    From tailored solutions to tech empowerment, Fasticore Technology driven by excellence and customer satisfaction builds practical, scalable, and transformative solutions. We equip you with the skills, while our experts build the systems to scale your business
                </p>
                
                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('project') }}" 
                        class="inline-flex items-center justify-center px-6 lg:px-8 py-3 lg:py-4 text-sm lg:text-base font-semibold text-[#FFFFFF] bg-[#FF6701] rounded-full shadow-lg shadow-[#FF67014A] hover:bg-[#e55d01] hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF6701]"
                    >
                        Join us now
                    </a>
                </div>
            </div>
            
            <!-- Right Column - Image -->
            <div 
                class="relative"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700 delay-150"
                x-transition:enter-start="opacity-0 transform translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <div class="relative w-full">
                    <!-- Hero Image -->
                    <img 
                        src="{{ asset('images/hero-professional.png') }}" 
                        alt="Professional Woman"
                        class="w-full h-auto object-contain"
                        loading="eager">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Gradient Fade -->
    <div class="absolute bottom-0 left-0 right-0 h-24 sm:h-64 lg:h-96 bg-gradient-to-t from-[#FFFFFF] to-transparent pointer-events-none"></div>
</section>
    

    {{-- services section --}}

    <section class="py-4 w-[90%] mx-auto sm:py-20 lg:py-20 bg-[#FFFFFF]">
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
                    :style="`transform: translateX(-${currentSlide * (100 / slidesToShow)}%)`">
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
                                <!-- Blue Background Overlay -->
                                <div 
                                    class="absolute inset-0 bg-[#003686] transition-transform duration-500 ease-out z-0"
                                    :class="hover ? 'translate-x-0' : '-translate-x-full'"
                                ></div>

                                <!-- Content Wrapper -->
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
                                    <div class="flex justify-end mt-2">
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

    {{-- build section --}}
    <section class="py-16 sm:py-20 lg:py-24 bg-[#FFFFFF]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column - Content -->
            <div 
                class="max-w-xl mx-auto text-center lg:text-left"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <!-- Main Heading -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452] mb-6">
                    Build with Fasticore
                </h2>
                
                <!-- Subheading -->
                <h3 class="text-lg sm:text-xl font-semibold text-[#FF6701] mb-6">
                    Transform your ideas into reality and problems into solutions
                </h3>
                
                <!-- Description -->
                <p class="text-base text-[#454452] leading-relaxed mb-8">
                    Hire our integrated development agency to build the custom software you need—from products, AI-powered software, and mobile apps to full digital transformation services. Our team works closely with you at every stage of the journey to deliver practical, scalable, and impactful results.
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

            <!-- Right Column -->
            <div 
                class="relative hidden lg:block"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700 delay-150"
                x-transition:enter-start="opacity-0 transform translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <div class="relative">
                    <img 
                        src="{{ asset('images/build.png') }}" 
                        alt="Build with Fasticore - Development illustration" 
                        class="w-full h-auto"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
</section>


{{-- solution section --}}

<section class="py-16 mx-auto sm:py-20 lg:py-24 bg-[#FFFFFF]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        
            <!-- Left Column -->
            <div 
                class="relative hidden lg:block"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700 delay-150"
                x-transition:enter-start="opacity-0 transform translate-x-12"
                x-transition:enter-end="opacity-100 transform translate-x-0"
            >
                <div class="relative">
                    <img 
                        src="{{ asset('images/solution.png') }}" 
                        alt="Fasticore Solution - Illustration" 
                        class="w-full h-auto"
                        loading="lazy"
                    >
                </div>
            </div>
            
            <!-- Right Column - Content -->
            <div 
                class="max-w-xl mx-auto text-center lg:text-left"
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
                    We build in-house, transformative software like V-Porta and FastiInvoice, designed to automate operations, unlock growth, and simplify business management across Africa.
                </p>

                <p class="text-base text-[#454452] leading-relaxed mb-8">
                    Fasticore delivers innovative, scalable products built to empower African businesses while staying competitive globally, helping companies grow faster and operate with confidence.
                </p>
                
                <!-- CTA Button -->
                <div>
                    <a 
                        href="{{ route('contact') }}" 
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-[#FFFFFF] bg-[#FF6701] rounded-full shadow-lg shadow-[#FF67014A] hover:bg-primary-600 hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                    >
                        Contact Us
                    </a>
                </div>
            </div>         
        </div>
    </div>
</section>

    {{-- about section --}}
<section class="py-16 w-[90%] mx-auto sm:py-20 lg:py-24 bg-[#FFFFFF]">

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
    
    <!-- Flexbox Layout: Image Left, Text Right -->
    <div class="flex flex-col justify-center sm:flex-row items-center sm:items-start gap-8 sm:gap-12 lg:gap-16">
      
      <!-- Left: Logo/Image (Hidden on Mobile) -->
      <div class="flex-shrink-0 hidden sm:block">
        <img 
          src="{{ asset('images/fast.png') }}" 
          alt="About Fasticore Logo"
          class="w-32 sm:w-40 lg:w-48 object-contain"
        >
      </div>

      <!-- Right: Text Content -->
      <div class="text-center sm:text-left max-w-2xl mx-auto">
        <h2 class="text-2xl text-left sm:text-2xl font-bold text-[#FF6701] mb-3">
          About Us
        </h2>
        <p class="text-[#454452] text-base sm:text-lg leading-relaxed">
          Fasticore Technology Limited is a software development company driven by excellence and customer satisfaction, 
          helping businesses thrive in the AI-driven digital era through building practical AI-powered solutions, 
          offering digital transformation services, and training excellent talents within the software development ecosystem. 
          We are dedicated to building solutions that empower businesses in Africa and beyond.
        </p>
      </div>
    </div>

  </div>

  <!-- Bottom Section: Vision & Mission Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 mx-auto max-w-7xl mt-16 px-4 sm:px-6 lg:px-8">
      
      <!-- Vision Card -->
      <div 
          x-data="{ visible: false, hover: false }"
          x-init="setTimeout(() => visible = true, 400)"
          x-show="visible"
          x-transition:enter="transition ease-out duration-700"
          x-transition:enter-start="opacity-0 transform translate-y-12"
          x-transition:enter-end="opacity-100 transform translate-y-0"
          @mouseenter="hover = true"
          @mouseleave="hover = false"
          class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden"
          :class="hover ? 'transform -translate-y-2' : ''"
      >
          <div class="p-6 text-center md:text-left">
              <h3 class="text-2xl text-left sm:text-2xl font-bold text-[#FF6701] mb-4">
                  Vision
              </h3>
              
              <p class="text-[#454452] leading-relaxed mb-6">
                  To establish Fasticore Technology as a leading brand in building 
                  AI-powered software solutions and business transformation across Africa and beyond.
              </p>
        
              <div class="bg-gradient-to-br rounded-xl p-6 flex items-center justify-center">
                  <img 
                      src="{{ asset('images/vision.png') }}" 
                      alt="Vision"
                      class="w-48 h-48 object-contain opacity-90"
                  >
              </div>
          </div>
      </div>

      <!-- Mission Card -->
      <div 
          x-data="{ visible: false, hover: false }"
          x-init="setTimeout(() => visible = true, 500)"
          x-show="visible"
          x-transition:enter="transition ease-out duration-700"
          x-transition:enter-start="opacity-0 transform translate-y-12"
          x-transition:enter-end="opacity-100 transform translate-y-0"
          @mouseenter="hover = true"
          @mouseleave="hover = false"
          class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden"
          :class="hover ? 'transform -translate-y-2' : ''"
      >
          <div class="p-6 text-center md:text-left">
              <h3 class="text-2xl text-left sm:text-2xl font-bold text-[#FF6701] mb-4">
                  Mission
              </h3>
              
              <p class="text-[#454452] leading-relaxed mb-6">
                  To build AI-powered enterprise systems that are practical, scalable, and transformative for 
                  African businesses while empowering individuals and organizations with the technology and talent needed to thrive in the modern digital economy.
              </p>
              
              <div class="bg-gradient-to-br rounded-xl p-6 flex items-center justify-center">
                  <img 
                      src="{{ asset('images/mission.png') }}" 
                      alt="Mission Illustration"
                      class="w-48 h-48 object-contain opacity-90"
                  >
              </div>
          </div>
      </div>
  </div>
</section>

    {{-- journey section --}}
<section class="py-16 sm:py-20 lg:py-24 mt-10 bg-gradient-to-b bg-[#454452]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-12 sm:mb-16 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#ffffff]">
                Our Client Journey
            </h2>
        </div>

        <!-- Timeline Container -->
        <div class="relative max-w-5xl mx-auto">
            
            <!-- Vertical Timeline Line (hidden on mobile, center on desktop) -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-0.5 bg-[#4B5563]"></div>

            <!-- Journey Steps -->
            <div class="space-y-0">

                <!-- Step 1: Consulting -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 200)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative max-h-80 pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/consulting.png') }}" alt="Consulting" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Consulting</h3>
                                        <p class="text-[#FFFFFF] text-sm leading-relaxed">
                                            This is the first stage where we listen to your business needs, understand it and analyze it in order to help position you in the right track.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg h-[250px] p-6 inline-block">
                                <div class="flex items-start justify-end">
                                    <img src="{{ asset('images/icons/consulting.png') }}" alt="Consulting" class="w-16 h-16 mr-2 mt-4 flex-shrink-0">
                                    <div class="text-left ml-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Consulting</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We listen to your business needs, understand it and analyze it to help position you on the right track.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Project Discussion -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 400)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative h-80 pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/project.png') }}" alt="Project Discussion" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Discussion</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We create documents to break down the entire project scope to ensure absolute understanding for all parties involved.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div></div>
                            <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="pl-12">
                            <div class="bg-[#5A5A6B] shadow-lg h-[250px] rounded-lg p-6">
                                <div class="flex items-start">
                                    <img src="{{ asset('images/icons/project.png') }}" alt="Project Discussion" class="w-16 h-16 mr-4 mt-4 flex-shrink-0">
                                    <div>
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Discussion</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We create documents to break down the entire project scope to ensure absolute understanding for all parties involved.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Project Planning -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 600)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative h-80 pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg  rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/planning.png') }}" alt="Project Planning" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Planning</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We collaborate with clients to define clear goals, set timelines, and create a structured roadmap to ensure timely execution with excellence
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg h-[250px] rounded-lg p-6 inline-block">
                                <div class="flex items-start justify-end">
                                <img src="{{ asset('images/icons/planning.png') }}" alt="Project Planning" class="w-16 h-16 mr-2 mt-4 flex-shrink-0">
                                    <div class="text-left ml-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Planning</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We collaborate with clients to define clear goals, set timelines, and create a structured roadmap to ensure timely execution with excellence
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>

                <!-- Step 4: Project Development -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 800)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative h-80 pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/development.png') }}" alt="Project Development" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Development</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We build and communicate actively at this stage. Development is broken down into milestones
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div></div>
                            <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="pl-12">
                            <div class="bg-[#5A5A6B] shadow-lg h-[250px] rounded-lg p-6">
                                <div class="flex items-start">
                                    <img src="{{ asset('images/icons/development.png') }}" alt="Project Development" class="w-16 h-16 mr-4 flex-shrink-0">
                                    <div>
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Development</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We build and communicate actively at this stage. Development is broken down into milestones
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5: Project Testing -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 1000)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative h-80 pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg  rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="Project Testing" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Testing</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            Here our client gets to test and scrutinize the final outcome of the project to attain customer satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg h-[250px] rounded-lg p-6 inline-block">
                            <div class="flex items-start justify-end">
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="Project Testing" class="w-16 h-16 mt-4 mr-4 flex-shrink-0">
                                    <div class="text-left ml-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Testing</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            Here our client gets to test and scrutinize the final outcome of the project to attain customer satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>

                <!-- Step 6: Deployment and Handover -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 1200)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative h-80 pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg md:h-[360px] rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/deployment.png') }}" alt="Deployment and Handover" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Deployment and Handover</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We deliver the final solution seamlessly, provide training and documentation, and hand over full control.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div></div>
                            <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="pl-12">
                            <div class="bg-[#5A5A6B] shadow-lg h-[250px] rounded-lg p-6">
                                <div class="flex items-start">
                                    <img src="{{ asset('images/icons/deployment.png') }}" alt="Deployment and Handover" class="w-17 h-17 flex-shrink-0">
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Deployment and Handover</h3>
                                        <p class="text-[#FFFFFF] text-md leading-relaxed">
                                            We deliver the final solution seamlessly, provide training and documentation, and hand over full control
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 7: 24/7 Support -->
                <div 
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 1400)"
                    x-show="visible"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="relative h-80"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg md:h-[360px] rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="24/7 Support" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">24/7 Support</h3>
                                        <p class="text-[#FFFFFF] text-sm leading-relaxed">
                                            We provide 24/7 support to all our customers during and after the development process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <img 
                                src="{{ asset('images/ring.png') }}" 
                                alt="Ring Icon"
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 z-10"
                            >
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg h-[250px] p-6 inline-block">
                                <div class="flex items-start justify-end">
                                    <img src="{{ asset('images/icons/support.png') }}" alt="24/7 Support" class="w-16 h-16 mr-2 mt-4 flex-shrink-0">
                                    <div class="text-left mr-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">24/7 Support</h3>
                                        <p class="text-[#FFFFFF] text-sm leading-relaxed">
                                            We provide 24/7 support to all our customers during and after the development process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- partners section --}}
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
    @include('components.footer')
    
    

    <style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endsection
