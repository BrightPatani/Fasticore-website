@extends('layouts.app')

@section('title', 'Academy - Fasticore Technologies')

@section('content')
<div class="relative h-screen bg-[#454452] overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('images/academy.png') }}" 
            alt="Fasticore Technology Background" 
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-[#454452] bg-opacity-60"></div>
    </div>

   <!-- Hero Content -->
    <div class="relative z-10 w-full h-full flex flex-col justify-start pt-32 sm:pt-40 px-6 sm:px-12 lg:px-20">
        <div class="w-full">
            <h1 class="text-4xl text-left sm:text-5xl lg:text-6xl font-bold text-[#FFFFFF] leading-tight mb-6 sm:mb-8">
                Fasticore Academy
            </h1>
            <p class="text-justify mx-auto sm:text-lg lg:text-xl text-[#FFFFFF] max-w-7xl">
               Fasticore Academy features an Intensive Software Engineering Internship organized  by Fasticore Technology Limited, 
               offering hands-on experience and access to seasoned mentors.
            </p>
            <p class="text-center mx-auto sm:text-lg lg:text-xl text-[#FF6701] max-w-7xl mt-4">
               Next Internship: July 2026 - Registration Open!
            </p>
        </div>
    </div>

    <!-- Bottom Gradient Fade -->
    <div class="absolute bottom-0 left-0 right-0 h-96 bg-gradient-to-t from-[#FFFFFF] to-transparent z-0"></div>
</div> 

    <!-- About the Internship Section  -->
    <section class="relative -mt-56 sm:-mt-64 lg:-mt-72 pb-16 sm:pb-24 h-full">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div 
                    class="bg-[#FFFFFF] rounded-3xl shadow-2xl p-8 sm:p-12 lg:p-16 overflow-hidden"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform translate-y-12"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <!-- Grid Layout: Text (Left) + Illustration (Right) -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        
                        <!-- Left Column: Content -->
                        <div>
                            <!-- Heading -->
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452] mb-6">
                                About the Internship
                            </h2>

                            <!-- Introduction Paragraph -->
                            <p class="text-[#454452] leading-relaxed text-base sm:text-lg mb-8">
                                Fasticore Internship is designed to transform passionate individuals into world-class software engineers. Over 12 weeks, participants receive hands-on training in:
                            </p>

                            <!-- Two Column Bullet List -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                                <!-- Column 1 -->
                                <div class="space-y-4">
                                    <!-- Frontend Development -->
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-[#454452] rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <div>
                                            <div class="font-semibold text-[#003686] text-base mb-1">
                                                Frontend Development
                                            </div>
                                            <div class="text-[#003686] text-sm">
                                                (React, Vue, HTML, CSS, JS)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Backend Development -->
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-[#454452] rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <div>
                                            <div class="font-semibold text-[#003686] text-base mb-1">
                                                Backend Development
                                            </div>
                                            <div class="text-[#003686] text-sm">
                                                (Node.js, Python, APIs)
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column 2 -->
                                <div class="space-y-4">
                                    <!-- UI/UX Design Principles -->
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-[#454452] rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <div class="font-semibold text-[#003686] text-base">
                                            UI/UX Design Principles
                                        </div>
                                    </div>

                                    <!-- Data Science & Analytics -->
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-[#454452] rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <div class="font-semibold text-[#003686] text-base">
                                            Data Science & Analytics
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Closing Paragraph -->
                            <p class="text-[#454452] leading-relaxed text-base sm:text-lg">
                                The internship program is led by industry experts and includes real-world projects, mentorship, and career support. Whether you're a beginner or looking to upskill, Fasticore Academy is your launchpad to a tech career.
                            </p>
                        </div>

                        <!-- Right Column: Illustration -->
                        <div class="relative hidden lg:block">
                            <div class="relative w-full">
                                <img 
                                    src="{{ asset('images/illustration.png') }}" 
                                    alt="Internship Program Illustration" 
                                    class="w-full h-auto object-contain"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Customer Testimonials Section --}}
    <section class="py-16 sm:py-20 lg:py-24 bg-gray-50 Z-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900">
                    What Our Graduates Say
                </h2>
            </div>

            <!-- Testimonials Container -->
            <div class="max-w-6xl mx-auto space-y-8">
                
                <div 
                    class="flex justify-center"
                    x-data="{ visible: false }"
                    x-intersect="visible = true"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 sm:p-10 max-w-2xl w-full border-l-4 border-orange-500">
                        <!-- Quote Icon -->
                        <div class="mb-4">
                            <svg class="w-10 h-10 text-orange-500 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                            </svg>
                        </div>

                        <!-- Quote Text -->
                        <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-6 italic">
                            “The UI/UX sessions were a game changer for me. I built a real portfolio and got hired within 2 months of graduating.”
                        </p>

                        <!-- Author Info -->
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="text-xl font-bold text-gray-900 mb-1">
                                Blessing I.
                            </h4>
                            <p class="text-orange-500 font-medium text-sm">
                                UI/UX Designer, Port Harcourt
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Testimonials (Two Columns) -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    
                    <!-- Testimonial 2 -->
                    <div 
                        class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-orange-500"
                        x-data="{ visible: false }"
                        x-intersect="visible = true"
                        x-transition:enter="transition ease-out duration-700 delay-100"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                    >
                        <!-- Quote Icon -->
                        <div class="mb-4">
                            <svg class="w-8 h-8 text-orange-500 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                            </svg>
                        </div>

                        <!-- Quote Text -->
                        <p class="text-gray-600 text-base leading-relaxed mb-6 italic">
                            “Fasticore Academy gave me the skills and confidence to land my first developer job. The mentors were amazing and the projects were real!”
                        </p>

                        <!-- Author Info -->
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="text-lg font-bold text-gray-900 mb-1">
                                Jane Doe
                            </h4>
                            <p class="text-orange-500 font-medium text-sm">
                                Frontend Engineer, Lagos
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div 
                        class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-orange-500"
                        x-data="{ visible: false }"
                        x-intersect="visible = true"
                        x-transition:enter="transition ease-out duration-700 delay-200"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                    >
                        <!-- Quote Icon -->
                        <div class="mb-4">
                            <svg class="w-8 h-8 text-orange-500 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                            </svg>
                        </div>

                        <!-- Quote Text -->
                        <p class="text-gray-600 text-base leading-relaxed mb-6 italic">
                            “I loved the data science track! The bootcamp was intense but so rewarding. I now work as a data analyst thanks to Fasticore.”
                        </p>

                        <!-- Author Info -->
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="text-lg font-bold text-gray-900 mb-1">
                                Samuel O
                            </h4>
                            <p class="text-orange-500 font-medium text-sm">
                                Data Analyst, Abuja
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- resources/views/components/internship-registration-form.blade.php -->

<!-- Registration Form Section -->
<section class="py-16 sm:py-20 lg:py-24 bg-#FFFFFF">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            
            <!-- Form Header -->
            <div class="mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-dark-900 mb-4">
                    Register for the Next Internship
                </h2>
            </div>

            <!-- Registration Form Card -->
            <div 
                class="bg-transparent rounded-2xl p-8 sm:p-12"
                x-data="{ 
                    loading: false,
                    success: false,
                    error: '',
                    formData: {
                        full_name: '',
                        email: '',
                        track: '',
                        background: ''
                    },
                    submitForm() {
                        this.loading = true;
                        this.error = '';
                        
                        // Basic validation
                        if (!this.formData.full_name || !this.formData.email || !this.formData.track) {
                            this.error = 'Please fill in all required fields';
                            this.loading = false;
                            return;
                        }

                        // Email validation
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(this.formData.email)) {
                            this.error = 'Please enter a valid email address';
                            this.loading = false;
                            return;
                        }

                        {{-- // Submit to server '{{ route('internship.register') }} --}}
                        fetch('#', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                            },
                            body: JSON.stringify(this.formData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                this.success = true;
                                this.formData = { full_name: '', email: '', track: '', background: '' };
                            } else {
                                this.error = data.message || 'Something went wrong. Please try again.';
                            }
                            this.loading = false;
                        })
                        .catch(error => {
                            this.error = 'Network error. Please check your connection and try again.';
                            this.loading = false;
                        });
                    }
                }"
            >
                <!-- Success Message -->
                <div 
                    x-show="success" 
                    x-cloak
                    class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-lg"
                >
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-green-800">Registration Successful!</p>
                            <p class="text-sm text-green-700">We'll contact you soon with more details.</p>
                        </div>
                    </div>
                </div>

                <!-- Error Message -->
                <div 
                    x-show="error" 
                    x-cloak
                    class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg"
                >
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm text-red-700" x-text="error"></p>
                    </div>
                </div>

                <form @submit.prevent="submitForm" class="space-y-6">
                    
                    <!-- Full Name Field -->
                    <div>
                        <label for="full_name" class="block text-sm font-semibold text-dark-900 mb-2">
                            Full Name<span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="full_name"
                            x-model="formData.full_name"
                            required
                            class="w-full px-4 py-3 border border-[#E2E2E2] rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Email Address Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-dark-900 mb-2">
                            Email Address<span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            x-model="formData.email"
                            required
                            class="w-full px-4 py-3 border border-[#E2E2E2] rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Preferred Track Dropdown -->
                    <div>
                        <label for="track" class="block text-sm font-semibold text-dark-900 mb-2">
                            Preferred Track<span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="track"
                            x-model="formData.track"
                            required
                            class="w-full px-4 py-3 border border-[#E2E2E2] rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all appearance-none bg-white cursor-pointer"
                            style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em; padding-right: 3rem;"
                        >
                            <option value="" disabled selected>Select a track</option>
                            <option value="frontend">Frontend Development</option>
                            <option value="backend">Backend Development</option>
                            <option value="fullstack">Full-Stack Development</option>
                            <option value="uiux">UI/UX Design</option>
                            <option value="mobile">Mobile Development</option>
                        </select>
                    </div>

                    <!-- Background Textarea -->
                    <div>
                        <label for="background" class="block text-sm font-semibold text-dark-900 mb-2">
                            Tell us About Your Background <span class="text-gray-500 font-normal">(Optional)</span>
                        </label>
                        <textarea 
                            id="background"
                            x-model="formData.background"
                            rows="5"
                            placeholder="Share your experience or motivation..."
                            class="w-full px-4 py-3 border border-[#E2E2E2] rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit"
                            :disabled="loading"
                            :class="loading ? 'opacity-70 cursor-not-allowed' : 'hover:bg-primary-600'"
                            class="w-full px-8 py-4 bg-primary text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                        >
                            <span x-show="!loading">Register Now</span>
                            <span x-show="loading" x-cloak class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Processing...
                            </span>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>



@include('components.footer')
@endsection