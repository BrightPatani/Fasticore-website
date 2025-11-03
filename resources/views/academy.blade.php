@extends('layouts.app')

@section('title', 'Academy - Fasticore Technologies')

@section('content')
<div class="relative h-screen bg-gradient-to-b from-[#F6F6FC] to-[#FFFFFF] overflow-hidden">
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
    <section class="relative -mt-40 sm:-mt-64 lg:-mt-72 pb-16 sm:pb-24 h-full">
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
    <section class="py-16 sm:py-20 lg:py-24 bg-[#FFFFFF] Z-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#454452]">
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
                    <div class="bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 sm:p-10 max-w-2xl w-full border-l-4 border-orange-500">
  
                        <!-- Quote Text -->
                        <p class="text-[#454452] text-base sm:text-lg leading-relaxed mb-6 italic">
                            “The UI/UX sessions were a game changer for me. I built a real portfolio and got hired within 2 months of graduating.”
                        </p>

                        <!-- Author Info -->
                        <div class="border-t border-[#FFFFFF] pt-6">
                            <h4 class="text-xl font-bold text-[#454452] mb-1">
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
                        class="bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-orange-500"
                        x-data="{ visible: false }"
                        x-intersect="visible = true"
                        x-transition:enter="transition ease-out duration-700 delay-100"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                    >
                  

                        <!-- Quote Text -->
                        <p class="text-[#454452] text-base leading-relaxed mb-6 italic">
                            “Fasticore Academy gave me the skills and confidence to land my first developer job. The mentors were amazing and the projects were real!”
                        </p>

                        <!-- Author Info -->
                        <div class="border-t border-[#FFFFFF] pt-6">
                            <h4 class="text-lg font-bold text-[#454452] mb-1">
                                Jane Doe
                            </h4>
                            <p class="text-orange-500 font-medium text-sm">
                                Frontend Engineer, Lagos
                            </p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div 
                        class="bg-[#FFFFFF] rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border-l-4 border-orange-500"
                        x-data="{ visible: false }"
                        x-intersect="visible = true"
                        x-transition:enter="transition ease-out duration-700 delay-200"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                    >
                   

                        <!-- Quote Text -->
                        <p class="text-[#454452] text-base leading-relaxed mb-6 italic">
                            “I loved the data science track! The bootcamp was intense but so rewarding. I now work as a data analyst thanks to Fasticore.”
                        </p>

                        <!-- Author Info -->
                        <div class="border-t border-[#FFFFFF] pt-6">
                            <h4 class="text-lg font-bold text-[#454452] mb-1">
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

    

<!-- Registration Form Section -->
@include('components.internship')



@include('components.footer')
@endsection