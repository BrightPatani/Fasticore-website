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
            
            <!-- Vertical Timeline Line (Left on mobile, center on desktop) -->
            <div class="absolute left-8 md:left-1/2 md:transform md:-translate-x-1/2 top-0 bottom-0 w-0.5 bg-[#4B5563]"></div>

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
                    class="relative pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/consulting.png') }}" alt="Consulting" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Consulting</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            This is the first stage where we listen to your business needs, understand, and analyze it in order to help position you on the right track.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6 inline-block">
                                <div class="flex items-start justify-end">
                                    <div class="text-left mr-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Consulting</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We listen to your business needs, understand, and analyze them to help position you on the right track.
                                        </p>
                                    </div>
                                    <img src="{{ asset('images/icons/consulting.png') }}" alt="Consulting" class="w-16 h-16 flex-shrink-0">
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
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
                    class="relative pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/project.png') }}" alt="Project Discussion" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Discussion</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
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
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
                        <div class="pl-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6">
                                <div class="flex items-start">
                                    <img src="{{ asset('images/icons/project.png') }}" alt="Project Discussion" class="w-16 h-16 mr-4 flex-shrink-0">
                                    <div>
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Discussion</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We discuss the full project scope to ensure absolute understanding for all parties involved.
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
                    class="relative pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/planning.png') }}" alt="Project Planning" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Planning</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We collaborate with clients to define clear goals, set timelines, and create a structured roadmap to ensure timely execution with excellence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6 inline-block">
                                <div class="flex items-start justify-end">
                                    <div class="text-left mr-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Planning</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We define clear goals, set timelines, and create a robust plan for smooth execution.
                                        </p>
                                    </div>
                                    <img src="{{ asset('images/icons/planning.png') }}" alt="Project Planning" class="w-16 h-16 flex-shrink-0">
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
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
                    class="relative pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/development.png') }}" alt="Project Development" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Development</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We build collaboratively with open communication for excellence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
                        <div class="pl-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6">
                                <div class="flex items-start">
                                    <img src="{{ asset('images/icons/development.png') }}" alt="Project Development" class="w-16 h-16 mr-4 flex-shrink-0">
                                    <div>
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Development</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We build collaboratively with open communication for excellence.
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
                    class="relative pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="Project Testing" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Project Testing</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            Here our client gets to test and scrutinize the final outcome of the project to attain customer satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6 inline-block">
                                <div class="flex items-start justify-end">
                                    <div class="text-left mr-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Project Testing</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            Here our client gets to test and scrutinize the final outcome of the project to attain customer satisfaction.
                                        </p>
                                    </div>
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="Project Testing" class="w-16 h-16 flex-shrink-0">
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
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
                    class="relative pb-12 md:pb-20"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/deployment.png') }}" alt="Deployment and Handover" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">Deployment and Handover</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
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
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
                        <div class="pl-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6">
                                <div class="flex items-start">
                                    <img src="{{ asset('images/icons/deployment.png') }}" alt="Deployment and Handover" class="w-16 h-16 mr-4 flex-shrink-0">
                                    <div>
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">Deployment and Handover</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We deliver the final solution seamlessly, provide training and documentation, and hand over full control.
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
                    class="relative"
                >
                    <!-- Mobile Layout -->
                    <div class="md:hidden flex items-start">
                        <div class="absolute left-8 transform -translate-x-1/2 w-3 h-3 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10 mt-2"></div>
                        <div class="ml-16 flex-1">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="24/7 Support" class="w-12 h-12 flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-bold text-[#ffffff] mb-2">24/7 Support</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We provide 24/7 support to all our customers during and after the development process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden md:grid grid-cols-2 gap-8 items-center">
                        <div class="text-right pr-12">
                            <div class="bg-[#5A5A6B] shadow-lg rounded-lg p-6 inline-block">
                                <div class="flex items-start justify-end">
                                    <div class="text-left mr-4">
                                        <h3 class="text-xl font-bold text-[#ffffff] mb-3">24/7 Support</h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            We provide 24/7 support to all our customers during and after the development process.
                                        </p>
                                    </div>
                                    <img src="{{ asset('images/icons/testing.png') }}" alt="24/7 Support" class="w-16 h-16 flex-shrink-0">
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF6701] rounded-full border-4 border-[#454452] z-10"></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>