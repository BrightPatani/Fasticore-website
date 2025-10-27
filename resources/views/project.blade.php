@extends('layouts.app')

@section('title', 'Project - Fasticore Technology')

@section('meta_description', 'Ready-to-use software solutions built to solve real business problems. Choose from our suite of proven applications that can be deployed quickly or customized to fit your specific needs.')

@section('content')


<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mt-12 mb-12">
            <h1 class="text-4xl font-bold text-[#454452] mb-4">
                Get Your Project <span class="text-[#FF6701]">Quote</span>
            </h1>
            <p class="text-[#454452] max-w-2xl mx-auto">
                Transform your ideas into reality tell us about your project and we will provide you with a detailed proposal tailored to your needs
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8" x-data="quoteForm()">
            <!-- Main Form Section -->
            <div class="lg:col-span-2">
                <div class="bg-[#FFFFFF] border-t-4 border-[#FF6701] rounded-3xl shadow-lg p-8">
                    <!-- Progress Steps -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between relative">
                            <!-- Progress Line Background -->
                            <div class="absolute top-6 left-0 right-0 h-1 bg-[#003686] -z-10"></div>
                            <!-- Active Progress Line -->
                            <div class="absolute top-6 left-0 h-1 bg-[#003686] -z-0 transition-all duration-300" 
                                 :style="`width: ${((currentStep - 1) / 3) * 100}%`"></div>
                            
                            <template x-for="step in 4" :key="step">
                                <div class="flex flex-col items-center">
                                    <div class="w-12 h-12 rounded-full Z-10 flex items-center justify-center font-semibold text-lg transition-all duration-300"
                                         :class="step <= currentStep ? 'bg-[#003686] text-[#FFFFFF]' : 'bg-[#454452] text-[#FFFFFF]'">
                                        <span x-text="step"></span>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Step 1: Project Type -->
                    <div x-show="currentStep === 1" x-transition>
                        <h2 class="text-2xl font-bold text-[#454452] mb-6">What type of project do you have in mind?</h2>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                            <!-- Mobile App -->
                            <button @click="selectProjectType('mobile')" 
                                    class="p-6 border-2 rounded-xl text-center hover:border-[#FF6701] transition-all duration-300"
                                    :class="formData.projectType === 'mobile' ? 'border-[#FF6701] bg-[#FF6701]/10' : 'border-gray-200'">
                                    <div class="mb-3">
                                        <img 
                                            src="{{ asset('images/project/mobile.png') }}" 
                                            alt="Mobile App Icon" 
                                            class="w-12 h-12 mx-auto object-contain"
                                        >
                                    </div>
                                <h3 class="font-bold text-[#454452] mb-1">Mobile App</h3>
                                <p class="text-sm text-[#454452]">iOS, Android, Cross-platform</p>
                            </button>

                            <!-- Web Application -->
                            <button @click="selectProjectType('web')" 
                                    class="p-6 border-2 rounded-xl text-center hover:border-[#FF6701] transition-all duration-300"
                                    :class="formData.projectType === 'web' ? 'border-[#FF6701] bg-[#FF6701]/10' : 'border-gray-200'">
                                <div class="mb-3">
                                    <img 
                                        src="{{ asset('images/project/web.png') }}" 
                                        alt="Web App Icon" 
                                        class="w-12 h-12 mx-auto object-contain"
                                    >
                                </div>
                                <h3 class="font-bold text-[#454452] mb-1">Web Application</h3>
                                <p class="text-sm text-[#454452]">Custom Web Solutions</p>
                            </button>

                            <!-- Enterprise Platform -->
                            <button @click="selectProjectType('enterprise')" 
                                    class="p-6 border-2 rounded-xl text-center hover:border-[#FF6701] transition-all duration-300"
                                    :class="formData.projectType === 'enterprise' ? 'border-[#FF6701] bg-[#FF6701]/10' : 'border-gray-200'">
                                <div class="mb-3">
                                    <img 
                                        src="{{ asset('images/project/building.png') }}" 
                                        alt="Enterprise Platform Icon" 
                                        class="w-12 h-12 mx-auto object-contain"
                                    >
                                <h3 class="font-bold text-[#454452] mb-1">Enterprise Platform</h3>
                                <p class="text-sm text-[#454452]">Large-Scale Business Solutions</p>
                            </button>

                            <!-- Custom Integration -->
                            <button @click="selectProjectType('integration')" 
                                    class="p-6 border-2 rounded-xl text-center hover:border-[#FF6701] transition-all duration-300"
                                    :class="formData.projectType === 'integration' ? 'border-[#FF6701] bg-[#FF6701]/10' : 'border-gray-200'">
                                <div class="mb-3">
                                    <img 
                                        src="{{ asset('images/project/integration.png') }}" 
                                        alt="Custom Integration Icon" 
                                        class="w-12 h-12 mx-auto object-contain"
                                    >
                                </div>
                                <h3 class="font-bold text-[#454452] mb-1">Custom Integration</h3>
                                <p class="text-sm text-[#454452]">API and Systems Integration</p>
                            </button>

                            <!-- Digital Transformation -->
                            <button @click="selectProjectType('transformation')" 
                                    class="p-6 border-2 rounded-xl text-center hover:border-[#FF6701] transition-all duration-300"
                                    :class="formData.projectType === 'transformation' ? 'border-[#FF6701] bg-[#FF6701]/10' : 'border-gray-200'">
                                <div class="mb-3">
                                    <img 
                                        src="{{ asset('images/project/digital.png') }}" 
                                        alt="Digital Transformation Icon" 
                                        class="w-12 h-12 mx-auto object-contain"
                                <h3 class="font-bold text-[#454452] mb-1">Digital Transformation</h3>
                                <p class="text-sm text-[#454452]">Complete Digital Overhaul</p>
                            </button>

                            <!-- Consultation -->
                            <button @click="selectProjectType('consultation')" 
                                    class="p-6 border-2 rounded-xl text-center hover:border-[#FF6701] transition-all duration-300"
                                    :class="formData.projectType === 'consultation' ? 'border-[#FF6701] bg-[#FF6701]/10' : 'border-gray-200'">
                                <div class="mb-3">
                                    <img 
                                        src="{{ asset('images/project/consultation.png') }}" 
                                        alt="Consultation Icon" 
                                        class="w-12 h-12 mx-auto object-contain"
                                <h3 class="font-bold text-[#454452] mb-1">Need Consultation</h3>
                                <p class="text-sm text-[#454452]">Not Sure What You Need?</p>
                            </button>
                        </div>

                        <div class="flex justify-end">
                            <button @click="nextStep()" 
                                    :disabled="!formData.projectType"
                                    class="px-6 py-3 bg-[#FF6701] text-[#FFFFFF] font-semibold rounded-lg hover:bg-[#FF6701] transition-colors disabled:bg-[#454452]/40 disabled:cursor-not-allowed">
                                Next Step
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Project Details -->
                    <div x-show="currentStep === 2" x-transition>
                        <h2 class="text-2xl font-bold text-[#454452] mb-6">Tell us about your project</h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    What problem are you trying to solve?
                                </label>
                                <textarea x-model="formData.problem" 
                                          rows="4" 
                                          class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                          placeholder="Describe the main challenge or opportunity your project addresses"></textarea>
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Who is your target audience?
                                </label>
                                <input type="text" 
                                       x-model="formData.audience" 
                                       class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                       placeholder="e.g., Small business, Consumers, Internal employees...">
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Do you have an existing system to integrate with?
                                </label>
                                <select x-model="formData.existingSystem" 
                                    class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent">
                                    <option value="">How long does it take to get a quote?</option>
                                    <option value="yes">Yes, I have existing systems</option>
                                    <option value="no">No, starting from scratch</option>
                                    <option value="unsure">Not sure yet</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    What's your ideal timeline? <span class="text-red-500">*</span>
                                </label>
                                <select x-model="formData.timeline" 
                                        class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent">
                                    <option value="">Select timeline</option>
                                    <option value="urgent">ASAP (1-2 months)</option>
                                    <option value="short">Short term (3-4 months)</option>
                                    <option value="medium">Medium term (5-6 months)</option>
                                    <option value="flexible">Flexible timeline</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Budget Range (Optional)
                                </label>
                                <select x-model="formData.budget" 
                                        class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent">
                                    <option value="">Prefer not to say</option>
                                    <option value="small">Under $10,000</option>
                                    <option value="medium">$10,000 - $50,000</option>
                                    <option value="large">$50,000 - $100,000</option>
                                    <option value="enterprise">$100,000+</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between mt-8">
                            <button @click="prevStep()" 
                                    class="px-6 py-3 bg-[#454452] text-[#FFFFFF] font-semibold rounded-lg hover:bg-[#454452]/60 transition-colors">
                                Previous
                            </button>
                            <button @click="nextStep()" 
                                    :disabled="!formData.timeline"
                                    class="px-6 py-3 bg-[#FF6701] text-[#FFFFFF] font-semibold rounded-lg hover:bg-[#FF6701] transition-colors disabled:bg-[#454452]/40 disabled:cursor-not-allowed">
                                Next Step
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Contact Information -->
                    <div x-show="currentStep === 3" x-transition>
                        <h2 class="text-2xl font-bold text-[#454452] mb-6">How Can we reach you?</h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Company/Organization <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       x-model="formData.company" 
                                       class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                       placeholder="Your company name">
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       x-model="formData.name" 
                                       class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                       placeholder="Full name">
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Your Role <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       x-model="formData.role" 
                                       class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                       placeholder="e.g., CEO, CTO, Product Manager...">
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       x-model="formData.email" 
                                       class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                       placeholder="your.email@company.com">
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Phone Number
                                </label>
                                <input type="tel" 
                                       x-model="formData.phone" 
                                       class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                       placeholder="+1 (555) 000-0000">
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Preferred Contact Method <span class="text-red-500">*</span>
                                </label>
                                <select x-model="formData.contactMethod" 
                                        class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent">
                                    <option value="">e.g., Email, Phone call, Video call...</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone Call</option>
                                    <option value="video">Video Call</option>
                                    <option value="any">Any method works</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between mt-8">
                            <button @click="prevStep()" 
                                    class="px-6 py-3 bg-[#454452]/40 text-[#454452] font-semibold rounded-lg hover:bg-[#454452]/70 transition-colors">
                                Previous
                            </button>
                            <button @click="nextStep()" 
                                    :disabled="!formData.company || !formData.name || !formData.role || !formData.email || !formData.contactMethod"
                                    class="px-6 py-3 bg-[#FF6701] text-[#FFFFFF] font-semibold rounded-lg hover:bg-[#FF6701] transition-colors disabled:bg-[#454452] disabled:cursor-not-allowed">
                                Next Step
                            </button>
                        </div>
                    </div>

                    <!-- Step 4: Additional Details -->
                    <div x-show="currentStep === 4" x-transition>
                        <h2 class="text-2xl font-bold text-[#454452] mb-6">Any additional details?</h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    Additional Requirements or Questions
                                </label>
                                <textarea x-model="formData.additional" 
                                          rows="6" 
                                          class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent"
                                          placeholder="Tell us anything else you think would be helpful for us to know about your project..."></textarea>
                            </div>

                            <div>
                                <label class="block text-[#454452] font-medium mb-2">
                                    How did you hear about us?
                                </label>
                                <select x-model="formData.referral" 
                                        class="w-full px-4 py-3 border border-[#454452]/40 rounded-lg focus:ring-2 focus:ring-[#FF6701] focus:border-transparent">
                                    <option value="">Select an option</option>
                                    <option value="search">Google/Search Engine</option>
                                    <option value="social">Social Media</option>
                                    <option value="referral">Referral from a friend</option>
                                    <option value="website">Found your website</option>
                                    <option value="event">Conference/Event</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-between mt-8">
                            <button @click="prevStep()" 
                                    class="px-6 py-3 bg-[#454452]/40 text-[#454452] font-semibold rounded-lg hover:bg-[#454452]/60 transition-colors">
                                Previous
                            </button>
                            <button @click="submitForm()" 
                                    class="px-8 py-3 bg-[#FF6701] text-[#FFFFFF] font-semibold rounded-lg hover:bg-[#FF6701] transition-colors">
                                Submit Quote Request
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-[#FFFFFF] rounded-2xl shadow-lg p-6  top-8">
                    <!-- FAQ Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-[#454452] mb-4">Frequently Asked Questions</h3>
                        <div class="space-y-3" x-data="{ openFaq: null }">
                            <div class="p-3 rounded-xl border-2">
                                <button @click="openFaq = openFaq === 1 ? null : 1" 
                                        class="w-full flex justify-between items-center text-left">
                                    <span class="text-md font-medium text-[#454452]">How long does it take to get a quote?</span>
                                     <img
                                        src="{{ asset('images/dropdown.png') }}" 
                                        alt="Quality Icon" 
                                        class="w-3 h-3 mr-2 transition-transform" :class="openFaq === 1 ? 'rotate-180' : ''">
                                </button>
                                <div x-show="openFaq === 1" x-transition class="mt-2 text-sm text-[#454452]">
                                    We typically respond within 24-48 hours with an initial quote.
                                </div>
                            </div>

                            <div class="p-3 rounded-xl border-2">
                                <button @click="openFaq = openFaq === 2 ? null : 2" 
                                        class="w-full flex justify-between items-center text-left">
                                    <span class="text-md font-medium text-[#454452]">Do you work with startups?</span>
                                    <img
                                        src="{{ asset('images/dropdown.png') }}" 
                                        alt="Quality Icon" 
                                        class="w-3 h-3 mr-2 transition-transform" :class="openFaq === 2 ? 'rotate-180' : ''">
                                </button>
                                <div x-show="openFaq === 2" x-transition class="mt-2 text-md text-[#454452]">
                                    Yes! We have flexible engagement models for startups.
                                </div>
                            </div>

                            <div class="p-3 rounded-xl border-2">
                                <button @click="openFaq = openFaq === 3 ? null : 3" 
                                        class="w-full flex justify-between items-center text-left">
                                    <span class="text-md font-medium text-[#454452]">What if I'm not sure what I need?</span>
                                    <img
                                        src="{{ asset('images/dropdown.png') }}" 
                                        alt="Quality Icon" 
                                        class="w-3 h-3 mr-2 transition-transform" :class="openFaq === 3 ? 'rotate-180' : ''">
                                </button>
                                <div x-show="openFaq === 3" x-transition class="mt-2 text-md text-[#454452]">
                                    Select "Need Consultation" and we'll help you figure it out.
                                </div>
                            </div>

                            <div class="p-3 rounded-xl border-2">
                                <button @click="openFaq = openFaq === 4 ? null : 4" 
                                        class="w-full flex justify-between items-center text-left">
                                    <span class="text-md font-medium text-[#454452]">Do you provide ongoing support?</span>
                                    <img
                                        src="{{ asset('images/dropdown.png') }}" 
                                        alt="Quality Icon" 
                                        class="w-3 h-3 mr-2 transition-transform" :class="openFaq === 4 ? 'rotate-180' : ''">
                                </button>
                                <div x-show="openFaq === 4" x-transition class="mt-2 text-md text-[#454452]">
                                    Yes, we offer post-launch support and maintenance packages.
                                </div>
                            </div>

                            <div class="p-3 rounded-xl border-2">
                                <button @click="openFaq = openFaq === 5 ? null : 5" 
                                        class="w-full flex justify-between items-center text-left">
                                    <span class="text-md font-medium text-[#454452]">What technology do you work with?</span>
                                    <img
                                        src="{{ asset('images/dropdown.png') }}" 
                                        alt="Quality Icon" 
                                        class="w-3 h-3 mr-2 transition-transform" :class="openFaq === 5 ? 'rotate-180' : ''">
                                </button>
                                <div x-show="openFaq === 5" x-transition class="mt-2 text-md text-[#454452]">
                                    We work with modern web, mobile, and enterprise technologies.
                                </div>
                            </div>

                            <div class="p-3 rounded-xl border-2">
                                <button @click="openFaq = openFaq === 6 ? null : 6" 
                                        class="w-full flex justify-between items-center text-left">
                                    <span class="text-md font-medium text-[#454452]">Do you sign NDAs?</span>
                                    <img
                                        src="{{ asset('images/dropdown.png') }}" 
                                        alt="Quality Icon" 
                                        class="w-3 h-3 mr-2 transition-transform" :class="openFaq === 6 ? 'rotate-180' : ''">
                                </button>
                                <div x-show="openFaq === 6" x-transition class="mt-2 text-md text-[#454452]">
                                    Absolutely. We're happy to sign NDAs before discussing details.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FFFFFF] rounded-2xl shadow-lg p-6 mt-8 sticky top-72">
                    <div class="rounded-xl p-4 w-[100%]">
                        <h3 class="text-lg font-bold text-[#454452] mb-4">Why Choose Fasticore?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <img
                                    src="{{ asset('images/tick.png') }}" 
                                    alt="Quality Icon" 
                                    class="w-6 h-7 object-contain -mt-1">
                                <span class="text-sm text-[#454452]">10 years of Experience in software development</span>
                            </div>
                            <div class="flex items-start">
                                <img
                                    src="{{ asset('images/tick.png') }}" 
                                    alt="Quality Icon" 
                                    class="w-6 h-7 object-contain -mt-1">
                                <span class="text-sm text-[#454452]">End-to-end Service from design to deployment</span>
                            </div>
                            <div class="flex items-start">
                                <img
                                    src="{{ asset('images/tick.png') }}" 
                                    alt="Quality Icon" 
                                    class="w-6 h-7 object-contain -mt-1">
                                <span class="text-sm text-[#454452]">Agile development methodology </span>
                            </div>
                            <div class="flex items-start">
                                <img
                                    src="{{ asset('images/tick.png') }}" 
                                    alt="Quality Icon" 
                                    class="w-6 h-7 object-contain -mt-1">
                                <span class="text-sm text-[#454452]">Scalable, high quality solutions</span>
                            </div>
                            <div class="flex items-start">
                                <img
                                    src="{{ asset('images/tick.png') }}" 
                                    alt="Quality Icon" 
                                    class="w-6 h-7 object-contain -mt-1">
                                <span class="text-sm text-[#454452]">Dedicated project management</span>
                            </div>
                            <div class="flex items-start">
                                <img
                                    src="{{ asset('images/tick.png') }}" 
                                    alt="Quality Icon" 
                                    class="w-6 h-7 object-contain -mt-1">
                                <span class="text-sm text-[#454452]">Post launch support and maintainance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("components.footer")
<script>
function quoteForm() {
    return {
        currentStep: 1,
        formData: {
            projectType: '',
            problem: '',
            audience: '',
            existingSystem: '',
            timeline: '',
            budget: '',
            company: '',
            name: '',
            role: '',
            email: '',
            phone: '',
            contactMethod: '',
            additional: '',
            referral: ''
        },
        
        selectProjectType(type) {
            this.formData.projectType = type;
        },
        
        nextStep() {
            if (this.currentStep < 4) {
                this.currentStep++;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        
        prevStep() {
            if (this.currentStep > 1) {
                this.currentStep--;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        },
        
        submitForm() {
            // Create form data for submission
            const submitData = new FormData();
            
            for (const [key, value] of Object.entries(this.formData)) {
                submitData.append(key, value);
            }
            
            // Submit via fetch 
            fetch('#', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: submitData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    alert('Thank you! Your quote request has been submitted successfully. We will get back to you within 24-48 hours.');
                    
                    // Reset form
                    this.currentStep = 1;
                    this.formData = {
                        projectType: '',
                        problem: '',
                        audience: '',
                        existingSystem: '',
                        timeline: '',
                        budget: '',
                        company: '',
                        name: '',
                        role: '',
                        email: '',
                        phone: '',
                        contactMethod: '',
                        additional: '',
                        referral: ''
                    };
                    
                    // Redirect to thank you page or home
                    window.location.href = '{{ route("home") }}';
                } else {
                    alert('Something went wrong. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    }
}
</script>

@endsection