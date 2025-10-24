@extends('layouts.app')

@section('title', 'Solutions - Fasticore Technology')

@section('meta_description', 'Ready-to-use software solutions built to solve real business problems. Choose from our suite of proven applications that can be deployed quickly or customized to fit your specific needs.')

@section('content')

<!-- Hero Section with Background -->
<section class="relative min-h-screen bg-[#454452] overflow-hidden">
    
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
             style="background-image: url('{{ asset('images/solutions.png') }}');">
        </div>
    </div>

    <!--Dark Overlay-->
        <div class="absolute inset-0 bg-black/40"></div>

    <!-- Content Container -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        
        <!-- Hero Content -->
        <div class="max-w-5xl mb-16">
            <!-- Main Heading -->
            <h1 
                class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-[#FFFFFF] mb-6 leading-tight"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 100)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                Fasticore <span class="text-primary">Solutions</span>
            </h1>

            <!-- Description -->
            <p 
                class="text-lg sm:text-xl lg:text-2xl text-[#FFFFFF] leading-relaxed max-w-4xl"
                x-data="{ visible: false }"
                x-init="setTimeout(() => visible = true, 300)"
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                Ready-to-use software solutions built to solve real business problems. Choose from our suite of proven applications that can be deployed quickly or customized to fit your specific needs.
            </p>
        </div>

        <!-- Stats Card -->
        <div 
            class="mb-12"
            x-data="{ visible: false }"
            x-init="setTimeout(() => visible = true, 500)"
            x-show="visible"
            x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 transform translate-y-12"
            x-transition:enter-end="opacity-100 transform translate-y-0"
        >
            <div class="bg-[#FFFFFF] rounded-3xl shadow-2xl p-8 sm:p-12">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 divide-y sm:divide-y-0 sm:divide-x divide-[#FFFFFF]">
                    
                    <!-- Stat 1: Solutions Available -->
                    <div class="text-center pt-8 sm:pt-0">
                        <div class="text-5xl sm:text-6xl lg:text-7xl font-bold text-dark-900 mb-2">
                            15<span class="text-primary">+</span>
                        </div>
                        <div class="text-base sm:text-lg text-dark-600 font-medium">
                            Solutions Available
                        </div>
                    </div>

                    <!-- Stat 2: Active Users -->
                    <div class="text-center pt-8 sm:pt-0">
                        <div class="text-5xl sm:text-6xl lg:text-7xl font-bold text-dark-900 mb-2">
                            500<span class="text-primary">+</span>
                        </div>
                        <div class="text-base sm:text-lg text-dark-600 font-medium">
                            Active Users
                        </div>
                    </div>

                    <!-- Stat 3: Uptime -->
                    <div class="text-center pt-8 sm:pt-0">
                        <div class="text-5xl sm:text-6xl lg:text-7xl font-bold text-dark-900 mb-2">
                            99.9<span class="text-primary">%</span>
                        </div>
                        <div class="text-base sm:text-lg text-dark-600 font-medium">
                            Uptime
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Category Filter Tabs -->
        <div 
            class="flex flex-wrap gap-4 justify-start"
            x-data="{ 
                activeTab: 'business',
                visible: false 
            }"
            x-init="setTimeout(() => visible = true, 700)"
            x-show="visible"
            x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 transform translate-y-8"
            x-transition:enter-end="opacity-100 transform translate-y-0"
        >
            <!-- All Solutions -->
            <button 
                @click="activeTab = 'all'"
                :class="activeTab === 'all' ? 'bg-[#FFFFFF] text-dark-900' : 'bg-transparent text-[#FFFFFF]'"
                class="px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-[#FFFFFF] hover:text-dark-900"
            >
                All Solutions
            </button>

            <!-- Business Management -->
            <button 
                @click="activeTab = 'business'"
                :class="activeTab === 'business' ? 'bg-primary text-[#FFFFFF]' : 'bg-transparent text-[#FFFFFF]'"
                class="px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-primary hover:text-[#FFFFFF] hover:border-primary"
            >
                Business Management
            </button>

            <!-- E-commerce -->
            <button 
                @click="activeTab = 'ecommerce'"
                :class="activeTab === 'ecommerce' ? 'bg-primary text-[#FFFFFF]' : 'bg-transparent text-[#FFFFFF]'"
                class="px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-primary hover:text-[#FFFFFF] hover:border-primary"
            >
                E-commerce
            </button>

            <!-- Finance Accounting -->
            <button 
                @click="activeTab = 'finance'"
                :class="activeTab === 'finance' ? 'bg-primary text-[#FFFFFF]' : 'bg-transparent text-[#FFFFFF]'"
                class="px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-primary hover:text-[#FFFFFF] hover:border-primary"
            >
                Finance Accounting
            </button>

            <!-- Human Resources -->
            <button 
                @click="activeTab = 'hr'"
                :class="activeTab === 'hr' ? 'bg-primary text-[#FFFFFF]' : 'bg-transparent text-[#FFFFFF]'"
                class="px-6 py-3 rounded-full font-medium transition-all duration-300  hover:bg-primary hover:text-[#FFFFFF] hover:border-primary"
            >
                Human Resources
            </button>

            <!-- Education -->
            <button 
                @click="activeTab = 'education'"
                :class="activeTab === 'education' ? 'bg-primary text-[#FFFFFF]' : 'bg-transparent text-[#FFFFFF]'"
                class="px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-primary hover:text-[#FFFFFF] hover:border-primary"
            >
                Education
            </button>
        </div>

    </div>

    <!-- Bottom Gradient Fade -->
    <div class="absolute bottom-0 left-0 right-0 h-96 bg-gradient-to-t from-[#FFFFFF] to-transparent z-0"></div>

</section>

{{-- Products Waitlist Section --}}
<section class="py-16 sm:py-20 lg:py-24 bg-[#F7F7FC]" x-data="waitlistManager()">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Hero Product Card -->
        <div class="bg-[#FFFFFF] rounded-3xl shadow-2xl overflow-hidden mb-12 lg:mb-16 max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                
                <!-- Left Side: Product Info -->
                <div class="p-8 sm:p-10 lg:p-12">
                    <!-- Logo/Icon -->
                    <div class="mb-6">
                        <svg class="w-12 h-12 text-[#FF6701]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z" opacity="0.3"/>
                            <path d="M5 5h4v4H5V5zm10 0h4v4h-4V5zM5 15h4v4H5v-4zm10 0h4v4h-4v-4z"/>
                        </svg>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-bold text-[#454452] mb-3">
                        FastiCRM Pro
                    </h2>
                    <p class="text-lg text-[#454452] font-medium mb-6">
                        Complete Customer Relationship Management
                    </p>
                    
                    <p class="text-[#454452] leading-relaxed mb-8">
                        Small to medium businesses struggle with managing customer relationships, tracking leads, and converting prospects into loyal customers. Our CRM eliminates manual processes and provides a centralized hub for all customer interactions, increasing conversion rates by up to 40%.
                    </p>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-[#003686]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-[#454452] font-medium">Advance Leading Scoring</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-[#003686]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-[#454452] font-medium">Email Automation</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-[#003686]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-[#454452] font-medium">Sales Pipeline</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-[#003686]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-[#454452] font-medium">Customer Analytics</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-[#003686]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-[#454452] font-medium">Mobile Access</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-[#003686]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm text-[#454452] font-medium">Integration Ready</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button 
                            @click="openProductSelection()"
                            class="flex-1 bg-[#FF6701] text-[#FFFFFF] px-8 py-3 rounded-lg font-semibold hover:bg-[#FF6701] transition-colors duration-300 shadow-lg hover:shadow-xl"
                        >
                            Join Waitlist
                        </button>
                        <div class="flex-1 bg-[#DFDFDF] text-[#454452] px-8 py-3 rounded-lg font-semibold text-center border-2 border-[#FFFFFF]">
                            Coming Soon
                        </div>
                    </div>
                </div>

                <!-- Right Side: Dashboard Preview -->
                <div class="bg-gradient-to-br from-[#FF6701] to-[#D95700] p-8 sm:p-10 lg:p-12 flex items-center justify-center">
                    <div class="bg-[#FFFFFF] rounded-2xl shadow-2xl p-6 w-full max-w-sm">
                        <div class="bg-[#FF6701] text-[#FFFFFF] text-center py-3 rounded-lg mb-6 font-semibold text-sm">
                            FasticoreCRM Dashboard
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Dashboard Icon -->
                            <div class="flex justify-center mb-4">
                                <svg class="w-16 h-16 text-[#FF6701]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z" opacity="0.3"/>
                                </svg>
                            </div>

                            <!-- Stats Cards -->
                            <div class="bg-[#F7F7FC] rounded-lg p-4 flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#454452]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                <span class="text-sm text-[#454452] font-medium">Follow up with John Doe</span>
                            </div>

                            <div class="bg-[#F7F7FC] rounded-lg p-4 flex items-center space-x-3">
                                <svg class="w-5 h-5 text-[#454452]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                <div class="flex-1">
                                    <p class="text-sm text-[#454452] font-medium">Five New Leads this week</p>
                                </div>
                            </div>

                            <div class="bg-[#F7F7FC] rounded-lg p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-[#454452]" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                                    </svg>
                                    <span class="text-sm text-[#454452] font-medium">Sales Pipeline:</span>
                                </div>
                                <span class="text-sm font-bold text-[#454452]">$45,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
            
            <!-- FastiCRM Pro Card -->
            <div class="bg-[#FFFFFF] rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                <!-- Header -->
                <div class="bg-gradient-to-r from-[#FF6701] to-[#D95700] p-8 relative">
                    <div class="flex items-center space-x-3 mb-3">
                        <svg class="w-10 h-10 text-[#FFFFFF]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z" opacity="0.5"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#FFFFFF] mb-2">FastiCRM Pro</h3>
                    <p class="text-[#FFFFFF] text-sm sm:text-base opacity-90">Complete Customer Relationship Management</p>
                    <span class="absolute top-4 right-4 bg-[#FFFFFF] text-[#D95700] text-xs font-bold px-3 py-1 rounded-full">Most Popular</span>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <p class="text-[#454452] text-sm leading-relaxed mb-8">
                        Small to medium businesses struggle with managing customer relationships, tracking leads, and converting prospects into loyal customers. Our CRM eliminates manual processes and provides a centralized hub for all customer interactions, increasing conversion rates by up to 40%.
                    </p>

                    <!-- Key Features -->
                    <h4 class="text-lg font-bold text-[#454452] mb-4">Key Features</h4>
                    <div class="grid grid-cols-2 gap-3 mb-8">
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#FF6701] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Lead Management</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#FF6701] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Contact Organization</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#FF6701] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Sales Pipeline</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#FF6701] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Email Integration</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#FF6701] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Reporting & Analytics</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#FF6701] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Mobile App</span>
                        </div>
                    </div>

                    <!-- Pricing Tiers -->
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="border-2 border-[#FFFFFF] rounded-xl p-4 text-center hover:border-[#FFFFFF] transition-colors">
                            <p class="text-xs text-[#454452] uppercase font-semibold mb-2">Starter</p>
                            <p class="text-2xl font-bold text-[#454452]">$29<span class="text-sm text-[#454452] font-normal">/mo</span></p>
                        </div>
                        <div class="border-2 border-[#FF6701] rounded-xl p-4 text-center bg-[#FFFFFF]">
                            <p class="text-xs text-[#FF6701] uppercase font-semibold mb-2">Professional</p>
                            <p class="text-2xl font-bold text-[#454452]">$79<span class="text-sm text-[#454452] font-normal">/mo</span></p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-2 gap-4">
                        <button 
                            @click="openProductSelection()"
                            class="bg-[#FF6701] text-[#FFFFFF] px-6 py-3 rounded-lg font-semibold hover:bg-[#FF6701] transition-colors duration-300 text-sm"
                        >
                            Join Waitlist
                        </button>
                        <button class="bg-[#DFDFDF] text-[#454452] px-6 py-3 rounded-lg font-semibold hover:bg-[#FFFFFF] transition-colors duration-300 text-sm">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- FastiStore Card -->
            <div class="bg-[#FFFFFF] rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                <!-- Header -->
                <div class="bg-gradient-to-r from-[#003686] to-[#003686] p-8 relative">
                    <div class="flex items-center space-x-3 mb-3">
                        <svg class="w-10 h-10 text-[#FFFFFF]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7 4h10v2H7V4zm0 4h10v2H7V8zm0 4h10v2H7v-2zm-4 4h18v2H3v-2zm0 4h18v2H3v-2z" opacity="0.5"/>
                            <path d="M6 4a2 2 0 012-2h8a2 2 0 012 2v1H6V4zM4 7h16a1 1 0 011 1v11a2 2 0 01-2 2H5a2 2 0 01-2-2V8a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#FFFFFF] mb-2">FastiStore</h3>
                    <p class="text-[#FFFFFF] text-sm sm:text-base opacity-90">Complete E-commerce Platform</p>
                    <span class="absolute top-4 right-4 bg-[#FFFFFF] text-[#003686] text-xs font-bold px-3 py-1 rounded-full">New</span>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <p class="text-[#454452] text-sm leading-relaxed mb-8">
                        Setting up an online store is complex and expensive. Small businesses need an affordable, feature-rich e-commerce platform that can scale with their growth without technical headaches.
                    </p>

                    <!-- Key Features -->
                    <h4 class="text-lg font-bold text-[#454452] mb-4">Key Features</h4>
                    <div class="grid grid-cols-2 gap-3 mb-8">
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#003686] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Product Management</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#003686] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Payment Processing</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#003686] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Inventory Tracking</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#003686] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Order Management</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#003686] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">Multi-channel Selling</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-4 h-4 text-[#003686] mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-xs text-[#454452]">SEO Optimization</span>
                        </div>
                    </div>

                    <!-- Pricing Tiers -->
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="border-2 border-[#FFFFFF] rounded-xl p-4 text-center hover:border-[#FFFFFF] transition-colors">
                            <p class="text-xs text-[#454452] uppercase font-semibold mb-2">Basic</p>
                            <p class="text-2xl font-bold text-[#454452]">$39<span class="text-sm text-[#454452] font-normal">/mo</span></p>
                        </div>
                        <div class="border-2 border-[#003686] rounded-xl p-4 text-center bg-[#FFFFFF]">
                            <p class="text-xs text-[#003686] uppercase font-semibold mb-2">Growth</p>
                            <p class="text-2xl font-bold text-[#454452]">$99<span class="text-sm text-[#454452] font-normal">/mo</span></p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-2 gap-4">
                        <button 
                            @click="openProductSelection()"
                            class="bg-[#003686] text-[#FFFFFF] px-6 py-3 rounded-lg font-semibold hover:bg-[#003686] transition-colors duration-300 text-sm"
                        >
                            Join Waitlist
                        </button>
                        <button class="bg-[#DFDFDF] text-[#454452] px-6 py-3 rounded-lg font-semibold hover:bg-[#FFFFFF] transition-colors duration-300 text-sm">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Modal 1: Product Selection -->
    <div 
        x-show="showProductModal" 
        x-cloak
        @click.self="showProductModal = false"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div 
            class="bg-[#FFFFFF] rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto"
            x-transition:enter="transition ease-out duration-300 delay-100"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            @click.stop
        >
            <!-- Modal Header -->
            <div class="border-b border-[#FFFFFF] p-6 flex items-center justify-between sticky top-0 bg-[#FFFFFF] rounded-t-2xl">
                <h3 class="text-2xl font-bold text-[#454452]">Select Products</h3>
                <button 
                    @click="showProductModal = false"
                    class="text-[#FFFFFF] hover:text-[#454452] transition-colors"
                    aria-label="Close modal"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 space-y-4">
                <p class="text-[#454452] mb-6">
                    Select the products you're interested in joining the waitlist for. You can choose multiple products.
                </p>

                <!-- Product Option 1: FastiCRM Pro -->
                <label class="flex items-start p-5 border-2 rounded-xl cursor-pointer transition-all duration-300 hover:border-[#FF6701] hover:bg-[#FFFFFF]"
                       :class="{ 'border-[#FF6701] bg-[#FFFFFF]': selectedProducts.includes('fasticrm') }">
                    <input 
                        type="checkbox" 
                        value="fasticrm"
                        x-model="selectedProducts"
                        class="mt-1 w-5 h-5 text-[#FF6701] border-[#FFFFFF] rounded focus:ring-[#FF6701] focus:ring-2"
                    >
                    <div class="ml-4 flex-1">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-8 h-8 text-[#FF6701]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z" opacity="0.3"/>
                            </svg>
                            <h4 class="text-lg font-bold text-[#454452]">FastiCRM Pro</h4>
                            <span class="bg-[#FFFFFF] text-[#FF6701] text-xs font-bold px-2 py-1 rounded">Most Popular</span>
                        </div>
                        <p class="text-sm text-[#454452] mb-3">
                            Complete Customer Relationship Management platform for small to medium businesses.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-[#FFFFFF] text-[#454452] px-2 py-1 rounded">Lead Management</span>
                            <span class="text-xs bg-[#FFFFFF] text-[#454452] px-2 py-1 rounded">Sales Pipeline</span>
                            <span class="text-xs bg-[#FFFFFF] text-[#454452] px-2 py-1 rounded">Email Automation</span>
                        </div>
                    </div>
                </label>

                <!-- Product Option 2: FastiStore -->
                <label class="flex items-start p-5 border-2 rounded-xl cursor-pointer transition-all duration-300 hover:border-[#003686] hover:bg-[#FFFFFF]"
                       :class="{ 'border-[#003686] bg-[#FFFFFF]': selectedProducts.includes('fastistore') }">
                    <input 
                        type="checkbox" 
                        value="fastistore"
                        x-model="selectedProducts"
                        class="mt-1 w-5 h-5 text-[#003686] border-[#FFFFFF] rounded focus:ring-[#003686] focus:ring-2"
                    >
                    <div class="ml-4 flex-1">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-8 h-8 text-[#003686]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 4h10v2H7V4zm0 4h10v2H7V8zm0 4h10v2H7v-2zm-4 4h18v2H3v-2zm0 4h18v2H3v-2z" opacity="0.3"/>
                            </svg>
                            <h4 class="text-lg font-bold text-[#454452]">FastiStore</h4>
                            <span class="bg-[#FFFFFF] text-[#003686] text-xs font-bold px-2 py-1 rounded">New</span>
                        </div>
                        <p class="text-sm text-[#454452] mb-3">
                            Complete E-commerce platform with inventory management and payment processing.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-[#FFFFFF] text-[#454452] px-2 py-1 rounded">Product Management</span>
                            <span class="text-xs bg-[#FFFFFF] text-[#454452] px-2 py-1 rounded">Payment Processing</span>
                            <span class="text-xs bg-[#FFFFFF] text-[#454452] px-2 py-1 rounded">SEO Optimization</span>
                        </div>
                    </div>
                </label>

                <!-- Error Message -->
                <div x-show="productSelectionError" class="bg-[#FFFFFF] border border-red-200 text-red-600 px-4 py-3 rounded-lg text-sm" x-cloak>
                    <p>Please select at least one product to continue.</p>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="border-t border-[#FFFFFF] p-6 flex flex-col sm:flex-row gap-3 sticky bottom-0 bg-[#FFFFFF] rounded-b-2xl">
                <button 
                    @click="showProductModal = false"
                    class="flex-1 bg-[#FFFFFF] text-[#454452] px-6 py-3 rounded-lg font-semibold hover:bg-[#FFFFFF] transition-colors duration-300"
                >
                    Cancel
                </button>
                <button 
                    @click="proceedToForm()"
                    class="flex-1 bg-gradient-to-r from-[#FF6701] to-[#FF6701]/60 text-[#FFFFFF] px-6 py-3 rounded-lg font-semibold hover:from-[#FF6701] hover:to-[#FF6701] transition-all duration-300 shadow-lg hover:shadow-xl"
                >
                    Continue to Form
                </button>
            </div>
        </div>
    </div>

    <!-- Modal 2: Waitlist Form -->
    <div 
        x-show="showFormModal" 
        x-cloak
        @click.self="showFormModal = false"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div 
            class="bg-[#FFFFFF] rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto"
            x-transition:enter="transition ease-out duration-300 delay-100"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            @click.stop
        >
            <!-- Modal Header -->
            <div class="border-b border-[#FFFFFF] p-6 flex items-center justify-between sticky top-0 bg-[#FFFFFF] rounded-t-2xl">
                <div>
                    <h3 class="text-2xl font-bold text-[#454452]">Join Our Waitlist</h3>
                    <p class="text-sm text-[#454452] mt-1">Be the first to know when we launch!</p>
                </div>
                <button 
                    @click="closeFormModal()"
                    class="text-[#FFFFFF] hover:text-[#454452] transition-colors"
                    aria-label="Close modal"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Modal Body - Form -->
            <form @submit.prevent="submitWaitlist()" class="p-6 space-y-6">
                
                <!-- Selected Products Display -->
                <div class="bg-gradient-to-r from-[#FFFFFF] to-[#FFFFFF] border border-[#FFFFFF] rounded-xl p-4">
                    <p class="text-sm font-semibold text-[#454452] mb-2">Selected Products:</p>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="product in selectedProducts" :key="product">
                            <span class="bg-[#FFFFFF] text-[#454452] px-3 py-1 rounded-full text-sm font-medium border border-[#FFFFFF]" x-text="getProductName(product)"></span>
                        </template>
                    </div>
                </div>

                <!-- Full Name -->
                <div>
                    <label for="fullName" class="block text-sm font-semibold text-[#454452] mb-2">
                        Full Name <span class="text-[#FFFFFF]0">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="fullName"
                        x-model="formData.fullName"
                        required
                        class="w-full px-4 py-3 border-2 border-[#FFFFFF] rounded-lg focus:border-[#FF6701] focus:ring-2 focus:ring-[#FF6701]/40 transition-all duration-300 outline-none"
                        placeholder="John Doe"
                    >
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-[#454452] mb-2">
                        Email Address <span class="text-[#FFFFFF]0">*</span>
                    </label>
                    <input 
                        type="email" 
                        id="email"
                        x-model="formData.email"
                        required
                        class="w-full px-4 py-3 border-2 border-[#FFFFFF] rounded-lg focus:border-[#FF6701] focus:ring-2 focus:ring-[#FF6701]/60 transition-all duration-300 outline-none"
                        placeholder="john@example.com"
                    >
                </div>

                <!-- Company Name -->
                <div>
                    <label for="company" class="block text-sm font-semibold text-[#454452] mb-2">
                        Company Name <span class="text-[#FFFFFF] text-xs">(Optional)</span>
                    </label>
                    <input 
                        type="text" 
                        id="company"
                        x-model="formData.company"
                        class="w-full px-4 py-3 border-2 border-[#FFFFFF] rounded-lg focus:border-[#FF6701] focus:ring-2 focus:ring-[#FF6701]/60 transition-all duration-300 outline-none"
                        placeholder="Your Company Ltd"
                    >
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-semibold text-[#454452] mb-2">
                        Phone Number <span class="text-[#FFFFFF] text-xs">(Optional)</span>
                    </label>
                    <input 
                        type="tel" 
                        id="phone"
                        x-model="formData.phone"
                        class="w-full px-4 py-3 border-2 border-[#FFFFFF] rounded-lg focus:border-[#FF6701] focus:ring-2 focus:ring-[#FF6701]/60 transition-all duration-300 outline-none"
                        placeholder="+234 800 000 0000"
                    >
                </div>

                <!-- Business Type -->
                <div>
                    <label for="businessType" class="block text-sm font-semibold text-[#454452] mb-2">
                        Business Type
                    </label>
                    <select 
                        id="businessType"
                        x-model="formData.businessType"
                        class="w-full px-4 py-3 border-2 border-[#FFFFFF] rounded-lg focus:border-[#FF6701] focus:ring-2 focus:ring-[#FF6701]/60 transition-all duration-300 outline-none"
                    >
                        <option value="">Select business type</option>
                        <option value="startup">Startup</option>
                        <option value="small-business">Small Business</option>
                        <option value="medium-business">Medium Business</option>
                        <option value="enterprise">Enterprise</option>
                        <option value="freelancer">Freelancer</option>
                        <option value="agency">Agency</option>
                    </select>
                </div>

                <!-- Additional Notes -->
                <div>
                    <label for="notes" class="block text-sm font-semibold text-[#454452] mb-2">
                        Additional Notes <span class="text-[#FFFFFF] text-xs">(Optional)</span>
                    </label>
                    <textarea 
                        id="notes"
                        x-model="formData.notes"
                        rows="4"
                        class="w-full px-4 py-3 border-2 border-[#FFFFFF] rounded-lg focus:border-[#FF6701] focus:ring-2 focus:ring-[#FF6701]/60 transition-all duration-300 outline-none resize-none"
                        placeholder="Tell us more about your needs or expectations..."
                    ></textarea>
                </div>

                <!-- Email Consent Checkbox -->
                <div class="bg-[#F7F7FC] border-2 border-[#FFFFFF] rounded-xl p-4">
                    <label class="flex items-start cursor-pointer">
                        <input 
                            type="checkbox" 
                            x-model="formData.emailConsent"
                            required
                            class="mt-1 w-5 h-5 text-[#FF6701] border-[#FFFFFF] rounded focus:ring-[#FF6701] focus:ring-2"
                        >
                        <div class="ml-3">
                            <span class="text-sm font-semibold text-[#454452]">
                                I agree to receive email updates <span class="text-[#FFFFFF]0">*</span>
                            </span>
                            <p class="text-xs text-[#454452] mt-1">
                                By checking this box, you agree to receive updates about product launches, features, and promotional offers. You can unsubscribe at any time.
                            </p>
                        </div>
                    </label>
                </div>

                <!-- Form Errors -->
                <div x-show="formErrors.length > 0" class="bg-[#FFFFFF] border border-red-200 rounded-lg p-4" x-cloak>
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-[#FFFFFF]0 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="text-sm font-semibold text-red-800 mb-1">Please fix the following errors:</p>
                            <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                                <template x-for="error in formErrors" :key="error">
                                    <li x-text="error"></li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Success Message -->
                <div x-show="submitSuccess" class="bg-green-50 border border-green-200 rounded-lg p-4" x-cloak>
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="text-sm font-semibold text-green-800">Successfully joined the waitlist!</p>
                            <p class="text-sm text-green-700 mt-1">We'll notify you as soon as we launch. Check your email for confirmation.</p>
                        </div>
                    </div>
                </div>

            </form>

            <!-- Modal Footer -->
            <div class="border-t border-[#FFFFFF] p-6 flex flex-col sm:flex-row gap-3 sticky bottom-0 bg-[#FFFFFF] rounded-b-2xl">
                <button 
                    type="button"
                    @click="closeFormModal()"
                    class="flex-1 bg-[#FFFFFF] text-[#454452] px-6 py-3 rounded-lg font-semibold hover:bg-[#FFFFFF] transition-colors duration-300"
                >
                    Cancel
                </button>
                <button 
                    type="button"
                    @click="submitWaitlist()"
                    :disabled="isSubmitting"
                    class="flex-1 bg-gradient-to-r from-[#FF6701] to-[#FF6701] text-[#FFFFFF] px-6 py-3 rounded-lg font-semibold hover:from-[#FF6701] hover:to-[#FF6701] transition-all duration-300 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center"
                >
                    <span x-show="!isSubmitting">Join Waitlist</span>
                    <span x-show="isSubmitting" class="flex items-center">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Submitting...
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>


{{-- Customer Testimonials Section --}}
<section class="py-16 sm:py-20 lg:py-24 bg-[#F7F7FC]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452]">
                What Our Customer Says
            </h2>
        </div>

        <!-- Testimonials Container -->
        <div class="max-w-6xl mx-auto space-y-8">
            
            <!-- Top Testimonial (Centered, Larger) -->
            <div 
                class="flex justify-center"
                x-data="{ visible: false }"
                x-intersect="visible = true"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <div class="bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 sm:p-10 max-w-2xl w-full border-l-4 border-[#FF6701]">
                    <!-- Quote Icon -->
                    <div class="mb-4">
                        <svg class="w-10 h-10 text-[#FF6701] opacity-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>

                    <!-- Quote Text -->
                    <p class="text-[#454452] text-base sm:text-lg leading-relaxed mb-6 italic">
                        "FastiBooks made our accounting so much simpler. What used to take hours now takes minutes. Perfect for small business owners like me."
                    </p>

                    <!-- Author Info -->
                    <div class="border-t border-[#FFFFFF] pt-6">
                        <h4 class="text-xl font-bold text-[#454452] mb-1">
                            Michael Chen
                        </h4>
                        <p class="text-[#FF6701] font-medium text-sm">
                            Owner, Chen's Restaurant Group
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Testimonials (Two Columns) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <!-- Testimonial 2 -->
                <div 
                    class="bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-[#FF6701]"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700 delay-100"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <!-- Quote Icon -->
                    <div class="mb-4">
                        <svg class="w-8 h-8 text-[#FF6701] opacity-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>

                    <!-- Quote Text -->
                    <p class="text-[#454452] text-base leading-relaxed mb-6 italic">
                        "FastiProject helped our remote team stay organized and productive. The collaboration features are exactly what we needed."
                    </p>

                    <!-- Author Info -->
                    <div class="border-t border-[#FFFFFF] pt-6">
                        <h4 class="text-lg font-bold text-[#454452] mb-1">
                            Emily Rodriguez
                        </h4>
                        <p class="text-[#FF6701] font-medium text-sm">
                            Project Manager, Creative Solutions
                        </p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div 
                    class="bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-[#FF6701]"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <!-- Quote Icon -->
                    <div class="mb-4">
                        <svg class="w-8 h-8 text-[#FF6701] opacity-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>

                    <!-- Quote Text -->
                    <p class="text-[#454452] text-base leading-relaxed mb-6 italic">
                        "FastiCRM Pro transformed how we manage customer relationships. We've seen a 40% increase in lead conversion since implementing it."
                    </p>

                    <!-- Author Info -->
                    <div class="border-t border-[#FFFFFF] pt-6">
                        <h4 class="text-lg font-bold text-[#454452] mb-1">
                            Sarah Johnson
                        </h4>
                        <p class="text-[#FF6701] font-medium text-sm">
                            Marketing Director, TechStart Inc.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

        {{-- Custom Solution CTA Section --}}
    <div class="py-16 sm:py-20 lg:py-24 bg-[#FFFFFF]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-4xl mx-auto text-center">
                
                <!-- Heading -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452] mb-6">
                    Need a custom solution?
                </h2>

                <!-- Description -->
                <p class="text-base sm:text-lg text-[#454452] mb-10 sm:mb-12 max-w-2xl mx-auto leading-relaxed">
                    Don't see exactly what you're looking for? We can customize any of our solutions or build something entirely new for your specific business needs.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
                    
                    <!-- Button 1: Request Customization -->
                    <a 
                        href=""
                        class="group w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 border-2 border-[#FF6701] rounded-lg font-semibold text-[#FF6701] bg-[#FFFFFF] hover:bg-[#FF6701] hover:text-[#FFFFFF] transition-all duration-300 shadow-sm hover:shadow-md"
                    >
                        <span>Request Customization</span>
                    </a>

                    <!-- Button 2: Schedule Consultation -->
                    <a 
                        href=""
                        class="group w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 border-2 border-[#FF6701] rounded-lg font-semibold text-[#FF6701] bg-[#FFFFFF] hover:bg-[#FF6701] hover:text-[#FFFFFF] transition-all duration-300 shadow-sm hover:shadow-md"
                    >
                        <span>Schedule Consultation</span>
                    </a>

                    <!-- Button 3: Contact Sales -->
                    <a 
                        href=""
                        class="group w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 border-2 border-[#FF6701] rounded-lg font-semibold text-[#FF6701] bg-[#FFFFFF] hover:bg-[#FF6701] hover:text-[#FFFFFF] transition-all duration-300 shadow-sm hover:shadow-md"
                    >
                        <span>Contact Sales</span>
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>

@include('components.footer')


<script>
function waitlistManager() {
    return {
        showProductModal: false,
        showFormModal: false,
        selectedProducts: [],
        productSelectionError: false,
        isSubmitting: false,
        submitSuccess: false,
        formErrors: [],
        formData: {
            fullName: '',
            email: '',
            company: '',
            phone: '',
            businessType: '',
            notes: '',
            emailConsent: false
        },

        openProductSelection() {
            this.showProductModal = true;
            this.productSelectionError = false;
            document.body.style.overflow = 'hidden';
        },

        proceedToForm() {
            if (this.selectedProducts.length === 0) {
                this.productSelectionError = true;
                return;
            }
            
            this.showProductModal = false;
            setTimeout(() => {
                this.showFormModal = true;
            }, 300);
        },

        closeFormModal() {
            this.showFormModal = false;
            document.body.style.overflow = 'auto';
            
            // Reset form if submission was successful
            if (this.submitSuccess) {
                this.resetForm();
            }
        },

        getProductName(productKey) {
            const names = {
                'fasticrm': 'FastiCRM Pro',
                'fastistore': 'FastiStore'
            };
            return names[productKey] || productKey;
        },

        validateForm() {
            this.formErrors = [];

            if (!this.formData.fullName.trim()) {
                this.formErrors.push('Full name is required');
            }

            if (!this.formData.email.trim()) {
                this.formErrors.push('Email address is required');
            } else if (!this.isValidEmail(this.formData.email)) {
                this.formErrors.push('Please enter a valid email address');
            }

            if (!this.formData.emailConsent) {
                this.formErrors.push('You must agree to receive email updates');
            }

            return this.formErrors.length === 0;
        },

        isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        },

        async submitWaitlist() {
            this.submitSuccess = false;
            
            if (!this.validateForm()) {
                return;
            }

            this.isSubmitting = true;

            try {
                // Prepare submission data
                const submitData = {
                    ...this.formData,
                    products: this.selectedProducts,
                    timestamp: new Date().toISOString()
                };

                // Make API call to Laravel backend
                const response = await fetch('/api/waitlist', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(submitData)
                });

                if (response.ok) {
                    this.submitSuccess = true;
                    this.formErrors = [];
                    
                    // Auto-close after 3 seconds
                    setTimeout(() => {
                        this.closeFormModal();
                    }, 3000);
                } else {
                    const error = await response.json();
                    this.formErrors = [error.message || 'Something went wrong. Please try again.'];
                }
            } catch (error) {
                console.error('Submission error:', error);
                this.formErrors = ['Network error. Please check your connection and try again.'];
            } finally {
                this.isSubmitting = false;
            }
        },

        resetForm() {
            this.selectedProducts = [];
            this.formData = {
                fullName: '',
                email: '',
                company: '',
                phone: '',
                businessType: '',
                notes: '',
                emailConsent: false
            };
            this.formErrors = [];
            this.submitSuccess = false;
            this.productSelectionError = false;
        }
    }
}
</script>

<style>
/* Hide elements with x-cloak until Alpine.js loads */
[x-cloak] { 
    display: none !important; 
}
</style>
@endsection
