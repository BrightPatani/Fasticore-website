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
