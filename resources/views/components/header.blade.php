<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    x-init="
        window.addEventListener('scroll', () => { 
            scrolled = window.pageYOffset > 20 
        })
    "
    :class="scrolled ? 'bg-[#F5F5F5]/10 backdrop-blur-sm' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <div class="flex-shrink-0 z-50">
                <a href="c" class="flex items-center">
                    <img 
                        src="{{ asset('images/logo.png') }}" 
                        alt="Fasticore Logo" 
                        class="w-32 h-auto object-contain"
                    >
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex gap-8 lg:items-center lg:space-x-8">
                <a 
                    href="{{ route('home') }}" 
                    class="font-medium text-md transition-colors duration-200"
                    :class="scrolled 
                        ? 'text-[#454452] hover:text-[#003686]' 
                        : '{{ request()->routeIs('home') ? 'text-[#FF6701]' : 'text-[#FFFFFF] hover:text-[#FF6701]' }}'"
                >
                    HOME
                </a>
                <a 
                    href="{{ route('services') }}" 
                    class="font-medium text-md transition-colors duration-200"
                    :class="scrolled 
                        ? 'text-[#454452] hover:text-[#003686]' 
                        : '{{ request()->routeIs('services') ? 'text-[#FF6701]' : 'text-[#FFFFFF] hover:text-[#FF6701]' }}'"
                >
                    SERVICES
                </a>
                <a 
                    href="{{ route('solutions') }}" 
                    class="font-medium text-md transition-colors duration-200"
                    :class="scrolled 
                        ? 'text-[#454452] hover:text-[#003686]' 
                        : '{{ request()->routeIs('solutions') ? 'text-[#FF6701]' : 'text-[#FFFFFF] hover:text-[#FF6701]' }}'"
                >
                    SOLUTIONS
                </a>
                <a 
                    href="{{ route('academy') }}" 
                    class="font-medium text-md transition-colors duration-200"
                    :class="scrolled 
                        ? 'text-[#454452] hover:text-[#003686]' 
                        : '{{ request()->routeIs('academy') ? 'text-[#FF6701]' : 'text-[#FFFFFF] hover:text-[#FF6701]' }}'"
                >
                    ACADEMY
                </a>
                <a 
                    href="{{ route('about') }}" 
                    class="font-medium text-md transition-colors duration-200"
                    :class="scrolled 
                        ? 'text-[#454452] hover:text-[#003686]' 
                        : '{{ request()->routeIs('about') ? 'text-[#FF6701]' : 'text-[#FFFFFF] hover:text-[#FF6701]' }}'"
                >
                    ABOUT US
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="flex lg:hidden z-50">
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button" 
                    class="inline-flex items-center justify-center p-2 text-[#BFCDE1] hover:text-[#FF6701] rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#BFCDE1] transition-colors"
                    :class="scrolled ? 'text-[#FF6701]'  : 'text-[#FFFFFF] hover:text-[#FF6701]'"
                    aria-expanded="false"
                    :aria-expanded="mobileMenuOpen.toString()"
                >
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger Icon -->
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6 text-[#003686]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close Icon -->
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6 text-[#003686]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu Overlay -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-full opacity-0"
        class="lg:hidden fixed top-0 right-0 pb-[100%] w-1/2 bg-[#FFFFFF]/60 backdrop-blur-md z-70 shadow-lg"
        style="padding-top: 80px;"
    >
        <!-- Menu Items -->
        <div class="h-full flex flex-col justify-start pt-16 px-8">
            <nav class="space-y-8">
                <template x-for="item in [
                    { name: 'HOME', route: '{{ route('home') }}' },
                    { name: 'SERVICES', route: '{{ route('services') }}' },
                    { name: 'SOLUTIONS', route: '{{ route('solutions') }}' },
                    { name: 'ACADEMY', route: '{{ route('academy') }}' },
                    { name: 'ABOUT US', route: '{{ route('about') }}' },
                ]" :key="item.name">
                    <a 
                        :href="item.route"
                        @click="mobileMenuOpen = false"
                        class="block text-center text-lg font-medium transition-colors duration-200 text-[#454452] hover:text-[#FF6701]"
                    >
                        <span x-text="item.name"></span>
                    </a>
                </template>
            </nav>
        </div>
    </div>
</header>

<!-- Prevent body scroll when menu is open -->
<style>
    [x-cloak] { display: none !important; }
    body:has([x-data*="mobileMenuOpen"]:has([x-show="mobileMenuOpen"][style*="display: none"] + *)) {
        overflow: hidden;
    }
</style>
