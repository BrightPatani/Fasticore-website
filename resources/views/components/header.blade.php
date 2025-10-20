<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 20 })"
    :class="scrolled ? 'bg-white shadow-md' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <div class="flex-shrink-0 z-50">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img 
                        src="{{ asset('images/altlogo.png') }}" 
                        alt="Fasticore Logo" 
                        class="w-32 h-auto object-contain"
                    >
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:items-center lg:space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-[#FF6701] font-medium text-sm transition-colors duration-200 {{ request()->routeIs('home') ? 'text-[#FF6701]' : '' }}">
                    HOME
                </a>
                <a href="{{ route('services') }}" class="text-white hover:text-[#FF6701] font-medium text-sm transition-colors duration-200 {{ request()->routeIs('services') ? 'text-[#FF6701]' : '' }}">
                    SERVICES
                </a>
                <a href="{{ route('solutions') }}" class="text-white hover:text-[#FF6701] font-medium text-sm transition-colors duration-200 {{ request()->routeIs('solutions') ? 'text-[#FF6701]' : '' }}">
                    SOLUTIONS
                </a>
                <a href="{{ route('academy') }}" class="text-white hover:text-[#FF6701] font-medium text-sm transition-colors duration-200 {{ request()->routeIs('academy') ? 'text-[#FF6701]' : '' }}">
                    ACADEMY
                </a>
                <a href="{{ route('about') }}" class="text-white hover:text-[#FF6701] font-medium text-sm transition-colors duration-200 {{ request()->routeIs('about') ? 'text-[#FF6701]' : '' }}">
                    ABOUT US
                </a>
            </div>
            
            <!-- Mobile Menu Button (Hamburger) -->
            <div class="flex lg:hidden z-50">
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button" 
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-[#FF6701] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 transition-colors"
                    aria-expanded="false"
                    :aria-expanded="mobileMenuOpen.toString()"
                >
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger Icon -->
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close Icon (Hidden - will show in overlay) -->
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Full-Screen Mobile Menu Overlay -->
        <div 
            x-show="mobileMenuOpen" 
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="translate-x-full opacity-0"
            class="lg:hidden fixed top-0 right-0 h-full w-1/2 bg-[#FFFFFF]/60 backdrop-blur-md z-40 shadow-lg"
            style="padding-top: 80px;"
        >
        <!-- Close Button (Top Right) -->
        <button 
            @click="mobileMenuOpen = false"
            class="absolute top-6 right-6 p-2 rounded-md text-[#454452] hover:text-[#FF6701] focus:outline-none transition-colors"
            aria-label="Close menu"
        >
           
        </button>

        <!-- Menu Items Container -->
        <div class="h-full flex flex-col justify-start pt-16 px-8">
            <nav class="space-y-8">
                <a 
                    href="{{ route('home') }}" 
                    @click="mobileMenuOpen = false"
                    class="block text-center text-lg  font-medium text-[#454452] hover:text-[#FF6701] transition-colors duration-200 {{ request()->routeIs('home') ? 'text-[#FF6701] font-semibold' : '' }}"
                >
                    HOME
                </a>
                <a 
                    href="{{ route('services') }}" 
                    @click="mobileMenuOpen = false"
                    class="block text-center text-lg  font-medium text-[#454452] hover:text-[#FF6701] transition-colors duration-200 {{ request()->routeIs('services') ? 'text-[#FF6701] font-semibold' : '' }}"
                >
                    SERVICES
                </a>
                <a 
                    href="{{ route('solutions') }}" 
                    @click="mobileMenuOpen = false"
                    class="block text-center text-lg  font-medium text-[#454452] hover:text-[#FF6701] transition-colors duration-200 {{ request()->routeIs('solutions') ? 'text-[#FF6701] font-semibold' : '' }}"
                >
                    SOLUTION
                </a>
                <a 
                    href="{{ route('academy') }}" 
                    @click="mobileMenuOpen = false"
                    class="block text-center text-lg  font-medium text-[#454452] hover:text-[#FF6701] transition-colors duration-200 {{ request()->routeIs('academy') ? 'text-[#FF6701] font-semibold' : '' }}"
                >
                    ACADEMY
                </a>
                <a 
                    href="{{ route('about') }}" 
                    @click="mobileMenuOpen = false"
                    class="block text-center text-lg  font-medium text-[#454452] hover:text-[#FF6701] transition-colors duration-200 {{ request()->routeIs('about') ? 'text-[#FF6701] font-semibold' : '' }}"
                >
                    ABOUT US
                </a>
            </nav>
        </div>
    </div>
</header>

<!-- Prevent body scroll when menu is open -->
<style>
    [x-cloak] { 
        display: none !important; 
    }
    
    /* Prevent body scroll when mobile menu is open */
    body:has([x-data*="mobileMenuOpen"]:has([x-show="mobileMenuOpen"][style*="display: none"] + *)) {
        overflow: hidden;
    }
</style>

