<section class="py-16 sm:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            
            <!-- Form Header -->
            <div class="mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Register for the Next Internship
                </h2>
            </div>

            <!-- Registration Form Card -->
            <div 
                class="bg-white rounded-2xl p-8 sm:p-12 shadow-lg"

            >
                <!-- Success Message -->
                <div 
                    x-show="success" 
                    x-cloak
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-lg"
                >
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg"
                >
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm text-red-700" x-text="error"></p>
                    </div>
                </div>

                <form @submit.prevent="submitForm" class="space-y-6">
                    
                    <!-- Full Name Field -->
                    <div>
                        <label for="full_name" class="block text-sm font-semibold text-gray-900 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="full_name"
                            x-model="formData.full_name"
                            required
                            minlength="2"
                            maxlength="100"
                            placeholder="Enter your full name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6701] focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Email Address Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            x-model="formData.email"
                            required
                            placeholder="you@example.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6701] focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Preferred Track Dropdown -->
                    <div>
                        <label for="track" class="block text-sm font-semibold text-gray-900 mb-2">
                            Preferred Track <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="track"
                            x-model="formData.track"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6701] focus:border-transparent transition-all appearance-none bg-white cursor-pointer"
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
                        <label for="background" class="block text-sm font-semibold text-gray-900 mb-2">
                            Tell us About Your Background <span class="text-gray-500 font-normal">(Optional)</span>
                        </label>
                        <textarea 
                            id="background"
                            x-model="formData.background"
                            rows="5"
                            maxlength="500"
                            placeholder="Share your experience, skills, or motivation (max 500 characters)..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6701] focus:border-transparent transition-all resize-none"
                        ></textarea>
                        <p class="text-xs text-gray-500 mt-1" x-show="formData.background.length > 0">
                            <span x-text="formData.background.length"></span>/500 characters
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit"
                            :disabled="loading"
                            :class="loading ? 'opacity-70 cursor-not-allowed' : 'hover:bg-[#e55d01]'"
                            class="w-full px-8 py-4 bg-[#FF6701] text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF6701]"
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

<script>
    function internshipForm() {
        return {
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

                // Name validation
                if (this.formData.full_name.trim().length < 2) {
                    this.error = 'Please enter a valid full name';
                    this.loading = false;
                    return;
                }

                // Submit to server
                fetch('{{ route('internship.register') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(this.formData)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        this.success = true;
                        this.formData = { full_name: '', email: '', track: '', background: '' };
                        // Scroll to top to show success message
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    } else {
                        this.error = data.message || 'Something went wrong. Please try again.';
                    }
                    this.loading = false;
                })
                .catch(error => {
                    console.error('Registration error:', error);
                    this.error = 'Network error. Please check your connection and try again.';
                    this.loading = false;
                });
            }
        };
    }
</script>
