<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KantorPro - Professional Office Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300" x-data="{ isOpen: false, scrolled: false }"
         @scroll.window="scrolled = window.scrollY > 50"
         :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-building text-white text-lg"></i>
                    </div>
                    <span class="text-2xl font-bold" :class="scrolled ? 'text-gray-800' : 'text-white'">KantorPro</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="transition-colors duration-300" :class="scrolled ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-200'">Home</a>
                    <a href="#about" class="transition-colors duration-300" :class="scrolled ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-200'">About</a>
                    <a href="#services" class="transition-colors duration-300" :class="scrolled ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-200'">Services</a>
                    <a href="#team" class="transition-colors duration-300" :class="scrolled ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-200'">Team</a>
                    <a href="#gallery" class="transition-colors duration-300" :class="scrolled ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-200'">Gallery</a>
                    <a href="#blog" class="transition-colors duration-300" :class="scrolled ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-200'">Blog</a>
                    <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition-all duration-300 transform hover:scale-105">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="isOpen = !isOpen" class="md:hidden" :class="scrolled ? 'text-gray-800' : 'text-white'">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen" x-transition class="md:hidden bg-white shadow-lg">
            <div class="px-4 py-2 space-y-2">
                <a href="#home" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
                <a href="#about" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
                <a href="#services" class="block py-2 text-gray-700 hover:text-blue-600">Services</a>
                <a href="#team" class="block py-2 text-gray-700 hover:text-blue-600">Team</a>
                <a href="#gallery" class="block py-2 text-gray-700 hover:text-blue-600">Gallery</a>
                <a href="#blog" class="block py-2 text-gray-700 hover:text-blue-600">Blog</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen gradient-bg hero-pattern flex items-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white space-y-8">
                    <div class="space-y-4 animate-fade-in">
                        <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                            Professional
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-300">
                                Office Solutions
                            </span>
                        </h1>
                        <p class="text-xl lg:text-2xl text-gray-200 leading-relaxed">
                            Transform your workspace with our innovative office solutions. We provide modern, efficient, and sustainable environments for your business success.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in" style="animation-delay: 0.2s;">
                        <button class="bg-white text-gray-800 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Get Started Today
                        </button>
                        <button class="glass-effect text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-play mr-2"></i>
                            Watch Demo
                        </button>
                    </div>

                    <div class="flex items-center space-x-8 text-sm animate-fade-in" style="animation-delay: 0.4s;">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-300"></i>
                            <span>4.9/5 Rating</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-users text-blue-300"></i>
                            <span>500+ Happy Clients</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-award text-green-300"></i>
                            <span>Award Winner</span>
                        </div>
                    </div>
                </div>

                <div class="relative animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="floating">
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="bg-white/20 rounded-2xl p-6 text-center">
                                    <i class="fas fa-chart-line text-4xl text-white mb-4"></i>
                                    <h3 class="text-white font-semibold">Analytics</h3>
                                </div>
                                <div class="bg-white/20 rounded-2xl p-6 text-center">
                                    <i class="fas fa-shield-alt text-4xl text-white mb-4"></i>
                                    <h3 class="text-white font-semibold">Security</h3>
                                </div>
                                <div class="bg-white/20 rounded-2xl p-6 text-center">
                                    <i class="fas fa-cloud text-4xl text-white mb-4"></i>
                                    <h3 class="text-white font-semibold">Cloud</h3>
                                </div>
                                <div class="bg-white/20 rounded-2xl p-6 text-center">
                                    <i class="fas fa-cog text-4xl text-white mb-4"></i>
                                    <h3 class="text-white font-semibold">Management</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">About KantorPro</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're passionate about creating exceptional office environments that inspire productivity and foster innovation. With over a decade of experience, we've helped hundreds of companies transform their workspaces.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-lightbulb text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Innovation First</h3>
                                <p class="text-gray-600">We leverage cutting-edge technology and design principles to create workspaces that adapt to the future of work.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-leaf text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Sustainable Solutions</h3>
                                <p class="text-gray-600">Environmental responsibility is at the core of our designs, ensuring a sustainable future for generations to come.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-handshake text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Client-Centric Approach</h3>
                                <p class="text-gray-600">Every project is tailored to meet the unique needs and culture of our clients, ensuring perfect alignment with their vision.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-8 pt-8 border-t border-gray-200">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                            <div class="text-gray-600">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">15+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 mb-2">98%</div>
                            <div class="text-gray-600">Client Satisfaction</div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="aspect-square bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             alt="Modern Office" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-2xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Certified Excellence</div>
                                <div class="text-sm text-gray-600">ISO 9001:2015</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive office solutions designed to optimize your workspace and enhance productivity across all aspects of your business operations.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-drafting-compass text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Office Design</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Custom office designs that reflect your brand identity and optimize workflow efficiency for maximum productivity.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Space Planning & Layout
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Brand Integration
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            3D Visualization
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors duration-300">
                        Learn More
                    </button>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Fit-Out Services</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Complete fit-out solutions from concept to completion, ensuring every detail meets your specifications and quality standards.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Project Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Quality Assurance
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Timely Delivery
                        </li>
                    </ul>
                    <button class="w-full bg-green-600 text-white py-3 rounded-xl font-semibold hover:bg-green-700 transition-colors duration-300">
                        Learn More
                    </button>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Smart Solutions</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Integrate cutting-edge technology and smart systems to create intelligent, connected workspaces for the modern era.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            IoT Integration
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Automation Systems
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Energy Management
                        </li>
                    </ul>
                    <button class="w-full bg-purple-600 text-white py-3 rounded-xl font-semibold hover:bg-purple-700 transition-colors duration-300">
                        Learn More
                    </button>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-chair text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Furniture Solutions</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Premium furniture selection and customization to create comfortable, ergonomic, and aesthetically pleasing work environments.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Ergonomic Design
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Custom Solutions
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Warranty Support
                        </li>
                    </ul>
                    <button class="w-full bg-orange-600 text-white py-3 rounded-xl font-semibold hover:bg-orange-700 transition-colors duration-300">
                        Learn More
                    </button>
                </div>

                <!-- Service Card 5 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-wrench text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Maintenance</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Comprehensive maintenance services to keep your office running smoothly with minimal downtime and maximum efficiency.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Preventive Care
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            24/7 Support
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Quick Response
                        </li>
                    </ul>
                    <button class="w-full bg-red-600 text-white py-3 rounded-xl font-semibold hover:bg-red-700 transition-colors duration-300">
                        Learn More
                    </button>
                </div>

                <!-- Service Card 6 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Consultation</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Expert consultation services to help you make informed decisions about your office space and optimization strategies.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Strategic Planning
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            Cost Analysis
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            ROI Assessment
                        </li>
                    </ul>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 transition-colors duration-300">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our diverse team of experts brings together decades of experience in design, architecture, project management, and technology to deliver exceptional results.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="aspect-square rounded-2xl overflow-hidden bg-gradient-to-br from-blue-100 to-purple-100 group-hover:scale-105 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="John Smith" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                            <div class="flex space-x-2">
                                <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                    <i class="fab fa-twitter text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">John Smith</h3>
                    <p class="text-blue-600 font-semibold mb-2">CEO & Founder</p>
                    <p class="text-gray-600 text-sm">15+ years of experience in office design and business strategy</p>
                </div>

                <!-- Team Member 2 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="aspect-square rounded-2xl overflow-hidden bg-gradient-to-br from-green-100 to-blue-100 group-hover:scale-105 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Sarah Johnson" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                            <div class="flex space-x-2">
                                <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                    <i class="fab fa-twitter text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Sarah Johnson</h3>
                    <p class="text-green-600 font-semibold mb-2">Lead Designer</p>
                    <p class="text-gray-600 text-sm">Creative visionary specializing in sustainable office environments</p>
                </div>

                <!-- Team Member 3 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="aspect-square rounded-2xl overflow-hidden bg-gradient-to-br from-purple-100 to-pink-100 group-hover:scale-105 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Mike Chen" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                            <div class="flex space-x-2">
                                <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                    <i class="fab fa-twitter text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Mike Chen</h3>
                    <p class="text-purple-600 font-semibold mb-2">Project Manager</p>
                    <p class="text-gray-600 text-sm">Expert in managing complex office transformation projects</p>
                </div>

                <!-- Team Member 4 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="aspect-square rounded-2xl overflow-hidden bg-gradient-to-br from-orange-100 to-red-100 group-hover:scale-105 transition-transform duration-300">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Emily Davis" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                            <div class="flex space-x-2">
                                <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                </a>
                                <a href="#" class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
                                    <i class="fab fa-twitter text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Emily Davis</h3>
                    <p class="text-orange-600 font-semibold mb-2">Tech Specialist</p>
                    <p class="text-gray-600 text-sm">Technology integration expert for smart office solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Our Portfolio</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover our latest projects and see how we've transformed workspaces for businesses across various industries.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Gallery Item 1 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square bg-gradient-to-br from-blue-100 to-purple-100">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Modern Office Design" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Modern Tech Office</h3>
                            <p class="text-sm opacity-90">Innovative workspace for a leading tech company</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square bg-gradient-to-br from-green-100 to-blue-100">
                    <img src="https://images.unsplash.com/photo-1541746972996-4e0b0f93e586?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Creative Workspace" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Creative Studio</h3>
                            <p class="text-sm opacity-90">Inspiring environment for creative professionals</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square bg-gradient-to-br from-purple-100 to-pink-100">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Executive Office" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Executive Suite</h3>
                            <p class="text-sm opacity-90">Luxury office space for senior management</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square bg-gradient-to-br from-orange-100 to-red-100">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Collaborative Space" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Collaboration Hub</h3>
                            <p class="text-sm opacity-90">Dynamic space for team collaboration</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square bg-gradient-to-br from-teal-100 to-cyan-100">
                    <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Reception Area" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Reception Lounge</h3>
                            <p class="text-sm opacity-90">Welcoming entrance that makes first impressions</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square bg-gradient-to-br from-indigo-100 to-purple-100">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Meeting Room" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Conference Room</h3>
                            <p class="text-sm opacity-90">State-of-the-art meeting facilities</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    View Full Portfolio
                </button>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">Latest Insights</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Stay updated with the latest trends, tips, and insights in office design and workplace optimization.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                    <div class="aspect-video bg-gradient-to-br from-blue-100 to-purple-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Future of Work" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 text-sm text-gray-500 mb-3">
                            <span>May 15, 2024</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">The Future of Hybrid Workspaces: Designing for Flexibility</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Explore how modern office designs are adapting to the hybrid work model and what this means for your business...</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">Read More →</a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                    <div class="aspect-video bg-gradient-to-br from-green-100 to-blue-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541746972996-4e0b0f93e586?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Sustainable Design" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 text-sm text-gray-500 mb-3">
                            <span>May 10, 2024</span>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">Sustainable Office Design: Creating Eco-Friendly Workspaces</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Discover how sustainable design principles can reduce your environmental impact while creating healthier work environments...</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">Read More →</a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                    <div class="aspect-video bg-gradient-to-br from-purple-100 to-pink-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Productivity Tips" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 text-sm text-gray-500 mb-3">
                            <span>May 5, 2024</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">10 Ways Office Design Impacts Employee Productivity</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Learn about the psychological and physical factors in office design that can significantly boost your team's performance...</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">Read More →</a>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <button class="bg-gray-800 hover:bg-gray-900 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    View All Articles
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 gradient-bg hero-pattern relative">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Get In Touch</h2>
                <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                    Ready to transform your workspace? Let's discuss your project and create something amazing together.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Form -->
                <div class="glass-effect rounded-3xl p-8">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-white font-semibold mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-white font-semibold mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-white font-semibold mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-white font-semibold mb-2">Phone</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="+1 (555) 123-4567">
                        </div>
                        <div>
                            <label class="block text-white font-semibold mb-2">Service Needed</label>
                            <select class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/30 text-white focus:outline-none focus:ring-2 focus:ring-white/50">
                                <option value="">Select a service</option>
                                <option value="design">Office Design</option>
                                <option value="fitout">Fit-Out Services</option>
                                <option value="smart">Smart Solutions</option>
                                <option value="furniture">Furniture Solutions</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="consultation">Consultation</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-white font-semibold mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-xl bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-white text-gray-800 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 text-white">
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Address</h4>
                                    <p class="text-gray-200">123 Business District<br>Jakarta, Indonesia 12345</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Phone</h4>
                                    <p class="text-gray-200">+62 21 1234 5678</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Email</h4>
                                    <p class="text-gray-200">hello@kantorpro.com</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Business Hours</h4>
                                    <p class="text-gray-200">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-6">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Footer -->
<footer class="bg-gray-900 text-white py-16">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
      <div>
        <div class="flex items-center space-x-2 mb-6">
          <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
            <i class="fas fa-building text-white text-lg"></i>
          </div>
          <span class="text-2xl font-bold">KantorPro</span>
        </div>
        <p class="text-gray-400 mb-6">
          Transforming workspaces with innovative design solutions that inspire productivity and success.
        </p>
        <div class="flex space-x-4">
          <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>

      <div>
        <h3 class="text-xl font-bold mb-6">Services</h3>
        <ul class="space-y-3 text-gray-400">
          <li><a href="#services" class="hover:text-white transition-colors">Office Design</a></li>
          <li><a href="#services" class="hover:text-white transition-colors">Fit-Out Services</a></li>
          <li><a href="#services" class="hover:text-white transition-colors">Smart Solutions</a></li>
          <li><a href="#services" class="hover:text-white transition-colors">Furniture Solutions</a></li>
          <li><a href="#services" class="hover:text-white transition-colors">Maintenance</a></li>
          <li><a href="#services" class="hover:text-white transition-colors">Consultation</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-bold mb-6">Company</h3>
        <ul class="space-y-3 text-gray-400">
          <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
          <li><a href="#team" class="hover:text-white transition-colors">Our Team</a></li>
          <li><a href="#gallery" class="hover:text-white transition-colors">Portfolio</a></li>
          <li><a href="#blog" class="hover:text-white transition-colors">Blog</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
          <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-bold mb-6">Contact</h3>
        <ul class="space-y-3 text-gray-400">
          <li>
            <i class="fas fa-map-marker-alt mr-2"></i>
            123 Office St, Jakarta, Indonesia
          </li>
          <li>
            <i class="fas fa-phone mr-2"></i>
            +62 812 3456 7890
          </li>
          <li>
            <i class="fas fa-envelope mr-2"></i>
            contact@kantorpro.com
          </li>
          <li>
            <i class="fas fa-clock mr-2"></i>
            Mon - Fri: 9:00 AM - 6:00 PM
          </li>
        </ul>
      </div>
    </div>

    <div class="border-t border-gray-700 pt-6 text-center text-gray-500 text-sm">
      &copy; 2025 KantorPro. All rights reserved.
    </div>
  </div>
</footer>
