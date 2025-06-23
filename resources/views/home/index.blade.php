<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lentera Remaja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Title and Meta based on Post/Page -->

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF4081',
                        'primary-dark': '#E91E63',
                        'primary-light': '#FFB3D1'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'gradient': 'gradient 8s ease infinite',
                        'slide-down': 'slideDown 0.3s ease-out',
                        'float': 'float 3s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        slideDown: {
                            '0%': { transform: 'translateY(-20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        gradient: {
                            '0%, 100%': { 'background-position': '0% 50%' },
                            '50%': { 'background-position': '100% 50%' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(-45deg, #FF4081, #E91E63, #FF6B9D, #C2185B);
            background-size: 400% 400%;
            animation: gradient 8s ease infinite;
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(255, 64, 129, 0.3);
        }
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.active {
            transform: translateX(0);
        }
        .hamburger {
            transition: all 0.3s ease;
        }
        .hamburger.active .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        .hamburger.active .line2 {
            opacity: 0;
        }
        .hamburger.active .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
        }
        .banner-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        .banner-shape-1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: -5%;
            animation: float 4s ease-in-out infinite;
        }
        .banner-shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: -3%;
            animation: float 5s ease-in-out infinite reverse;
        }
        .banner-shape-3 {
            width: 100px;
            height: 100px;
            top: 30%;
            left: 80%;
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white">
        <div class="relative">
            <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
            <div class="absolute inset-0 w-16 h-16 border-4 border-primary-light border-b-transparent rounded-full animate-spin animate-reverse"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="fixed top-0 w-full z-40 transition-all duration-300" id="header">
        <div class="glass-effect">
            <!-- Top Bar - Hidden on mobile -->
            <div class="bg-primary text-white py-2 text-sm hidden lg:block">
                <div class="container mx-auto px-4 flex justify-between items-center">
                    <div class="flex gap-6">
                        <a href="#about" class="hover:text-primary-light transition-colors">About</a>
                        <a href="#contact" class="hover:text-primary-light transition-colors">Contact</a>
                        <a href="#faq" class="hover:text-primary-light transition-colors">FAQ</a>
                    </div>
                    <div class="flex gap-6">
                        <span><i class="fa fa-phone mr-2"></i>+62-8226-2559-692</span>
                        <span><i class="fa fa-envelope mr-2"></i>striagraini@gmail.com</span>
                    </div>
                </div>
            </div>

            <!-- Main Nav -->
            <nav class="py-4 bg-white/90">
                <div class="container mx-auto px-4 flex justify-between items-center">
                    <div class="text-2xl font-bold text-primary">
                        Lentera<span class="text-gray-700">Remaja</span>
                    </div>

                    <!-- Desktop Menu -->
<ul class="hidden md:flex space-x-8">
    <li><a href="#home" class="text-gray-700 hover:text-primary transition-colors font-medium">Home</a></li>
    <li><a href="#education" class="text-gray-700 hover:text-primary transition-colors font-medium">Edukasi</a></li>
    <li><a href="#solutions" class="text-gray-700 hover:text-primary transition-colors font-medium">Solusi</a></li>
    <li><a href="#faq" class="text-gray-700 hover:text-primary transition-colors font-medium">FAQ</a></li>
    <li><a href="#contact" class="text-gray-700 hover:text-primary transition-colors font-medium">Kontak</a></li>
    <li><a href="/blog" class="text-gray-700 hover:text-primary transition-colors font-medium">Blog</a></li>
</ul>

                    <!-- Desktop CTA Button -->
                    <button class="hidden md:block bg-primary text-white px-6 py-2 rounded-full hover:bg-primary-dark transition-colors">
                        Konsultasi Gratis
                    </button>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden hamburger" id="mobile-menu-btn">
                        <div class="w-6 h-0.5 bg-gray-700 mb-1 transition-all line1"></div>
                        <div class="w-6 h-0.5 bg-gray-700 mb-1 transition-all line2"></div>
                        <div class="w-6 h-0.5 bg-gray-700 transition-all line3"></div>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Mobile Menu Overlay -->
        <div class="md:hidden mobile-menu fixed top-0 right-0 w-full h-screen bg-white z-50" id="mobile-menu">
            <div class="p-6">
                <!-- Mobile Menu Header -->
                <div class="flex justify-between items-center mb-8">
                    <div class="text-2xl font-bold text-primary">
                        Lentera<span class="text-gray-700">Remaja</span>
                    </div>
                    <button class="text-gray-700 text-2xl" id="close-menu">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Mobile Menu Items -->
                <ul class="space-y-6">
                    <li><a href="#home" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Home</a></li>
                    <li><a href="#education" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Edukasi</a></li>
                    <li><a href="#solutions" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Solusi</a></li>
                    <li><a href="#faq" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">FAQ</a></li>
                    <li><a href="#contact" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Kontak</a></li>
                    <li><a href="/blog" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Blog</a></li>
                </ul>

                <!-- Mobile Contact Info -->
                <div class="mt-8 p-4 bg-gray-50 rounded-2xl">
                    <h3 class="font-semibold text-gray-800 mb-4">Hubungi Kami</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone text-primary mr-3"></i>
                            <span>+62-8226-2559-692</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope text-primary mr-3"></i>
                            <span>striagraini@gmail.com</span>
                        </div>
                    </div>
                </div>

                <!-- Mobile CTA Button -->
                <button class="w-full mt-6 bg-primary text-white py-4 rounded-full font-semibold hover:bg-primary-dark transition-colors">
                    Konsultasi Gratis
                </button>
            </div>
        </div>
    </header>


<!-- Hero/Banner Section -->
<section id="home" class="pt-32 pb-20 gradient-bg text-white overflow-hidden relative">
    <!-- Floating Background Shapes -->
    <div class="banner-shape banner-shape-1"></div>
    <div class="banner-shape banner-shape-2"></div>
    <div class="banner-shape banner-shape-3"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content Side -->
            <div class="animate-fade-in">
                <!-- Badge -->
                <div class="inline-flex items-center bg-white/20 rounded-full px-4 py-2 mb-6 text-sm font-medium">
                    <i class="fas fa-star text-yellow-300 mr-2"></i>
                    Platform Edukasi Terpercaya
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Edukasi <span class="text-yellow-300 relative">
                        Sehat
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-yellow-300 rounded-full opacity-50"></div>
                    </span> dan
                    <span class="text-yellow-300 relative">
                        Bijak
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-yellow-300 rounded-full opacity-50"></div>
                    </span> untuk
                    <span class="text-yellow-300 relative">
                        Remaja Indonesia
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-yellow-300 rounded-full opacity-50"></div>
                    </span>
                </h1>

                <p class="text-lg md:text-xl mb-8 text-pink-100 leading-relaxed">
                    Memberikan pemahaman yang tepat tentang identitas diri, nilai moral, dan budaya Indonesia untuk membangun generasi yang berkarakter kuat.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 mb-8">
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-yellow-300">1000+</div>
                        <div class="text-sm text-pink-200">Siswa Teredukasi</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-yellow-300">50+</div>
                        <div class="text-sm text-pink-200">Sekolah Partner</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl md:text-3xl font-bold text-yellow-300">100%</div>
                        <div class="text-sm text-pink-200">Gratis</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all hover-lift flex items-center justify-center">
                        <i class="fas fa-play mr-2"></i>Pelajari Sekarang
                    </button>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary transition-all flex items-center justify-center">
                        <i class="fas fa-info-circle mr-2"></i>Tentang Kami
                    </button>
                </div>
            </div>

            <!-- Image Side -->
            <div class="animate-slide-up">
                <div class="relative">
                    <div class="w-full rounded-3xl overflow-hidden relative">
                        <img src="{{ asset('storage/gambar/gambar.png') }}"
                             alt="Remaja Indonesia belajar bersama"
                             class="mx-auto max-w-[300px] h-auto object-cover rounded-2xl">
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-300/30 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-white/30 rounded-full animate-bounce-slow"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional floating decorations -->
    <div class="absolute top-1/4 left-1/4 w-4 h-4 bg-white/20 rounded-full animate-pulse"></div>
    <div class="absolute bottom-1/3 right-1/4 w-3 h-3 bg-yellow-300/30 rounded-full animate-bounce-slow"></div>
</section>

<!-- Featured Content Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Left Column: Education Importance -->
            <article class="bg-gradient-to-br from-primary to-primary-dark p-8 rounded-3xl text-white hover-lift animate-slide-up">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <div>
                        <span class="text-pink-200 text-sm">Edukasi Remaja</span>
                        <h2 class="text-xl font-bold">Mengapa Edukasi tentang LGBT Itu Penting?</h2>
                    </div>
                </div>
                <p class="mb-6 text-pink-100 leading-relaxed">
                    Mencegah diskriminasi dan perundungan, mendukung kesehatan mental, meningkatkan kesadaran tentang identitas diri, mencegah penyebaran misinformasi, dan membangun generasi muda yang lebih inklusif.
                </p>
                <button class="text-white font-semibold hover:text-pink-200 transition-colors">
                    PELAJARI LEBIH LANJUT <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </article>

            <!-- Right Column: Featured Post -->
            @if($featuredPosts->count() > 0)
            <article class="bg-white p-6 rounded-xl shadow-lg animate-slide-up">
                @php $firstPost = $featuredPosts->shift(); @endphp
                @if($firstPost->featured_image)
                <img src="{{ $firstPost->featured_image }}"
                     alt="{{ $firstPost->title }}"
                     class="w-full h-48 object-cover rounded-lg mb-4 shadow-md">
                @endif

                <h2 class="text-xl font-bold mb-2 text-gray-800">{{ $firstPost->title }}</h2>
                <p class="text-gray-600 mb-4">
                    {{ \Illuminate\Support\Str::words(strip_tags($firstPost->content), 10, '...') }}
                </p>

                <a href="{{ route('blog.show', $firstPost->slug) }}"
                   class="inline-block bg-primary hover:bg-primary-dark text-white font-semibold py-2 px-4 rounded transition-colors">
                    Baca Selengkapnya
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </article>
            @endif
        </div>
    </div>
</section>


<section id="diversity" class="py-20 bg-gradient-to-br from-slate-50 via-purple-50/30 to-pink-50/40 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-pink-200/20 to-purple-200/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-200/20 to-indigo-200/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-violet-200/10 to-fuchsia-200/10 rounded-full blur-2xl animate-spin" style="animation-duration: 20s;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16 opacity-0 animate-fadeInUp">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl mb-6 shadow-2xl">
                <i class="fas fa-heart text-white text-2xl"></i>
            </div>
            <h4 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-900 mb-6 leading-tight">
                <span class="bg-gradient-to-r from-pink-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent">
                    Mengenal Perbedaan
                </span>
            </h4>
            <div class="flex items-center justify-center mb-6">
                <div class="h-1 w-12 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full"></div>
                <div class="h-1 w-6 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full mx-2"></div>
                <div class="h-1 w-12 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full"></div>
            </div>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed font-medium">
                Orientasi Seksual, Identitas Gender, dan Perilaku Seksual
            </p>
            <p class="text-base text-gray-500 max-w-2xl mx-auto mt-4">
                Setiap orang itu unik. Yuk, pelajari perbedaan ini secara singkat dan jelas!
            </p>
        </div>

        <!-- Main Content Cards -->
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Card 1: Orientasi Seksual -->
                <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/50 opacity-0 animate-fadeInUp" style="animation-delay: 0.2s;">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-heart text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <span class="text-sm font-bold text-pink-600 uppercase tracking-wide">Konsep 01</span>
                                <h3 class="text-2xl font-bold text-gray-900">Orientasi Seksual</h3>
                            </div>
                        </div>

                        <p class="text-gray-600 text-base leading-relaxed mb-6 flex-grow">
                            Tentang kepada siapa seseorang merasa tertarik secara emosional, romantis, atau seksual.
                        </p>

                        <div class="space-y-3">
                            <p class="font-semibold text-gray-800 mb-3">Contohnya:</p>
                            <div class="space-y-2">
                                <div class="flex items-center p-3 bg-gradient-to-r from-pink-50 to-rose-50 rounded-xl">
                                    <div class="w-2 h-2 bg-pink-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Heteroseksual:</strong> tertarik pada lawan jenis</span>
                                </div>
                                <div class="flex items-center p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Homoseksual:</strong> tertarik pada sesama jenis</span>
                                </div>
                                <div class="flex items-center p-3 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Biseksual:</strong> tertarik pada laki-laki dan perempuan</span>
                                </div>
                                <div class="flex items-center p-3 bg-gradient-to-r from-gray-50 to-slate-50 rounded-xl">
                                    <div class="w-2 h-2 bg-gray-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Aseksual:</strong> tidak tertarik secara seksual</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Identitas Gender -->
                <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/50 opacity-0 animate-fadeInUp" style="animation-delay: 0.4s;">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-violet-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-user text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <span class="text-sm font-bold text-purple-600 uppercase tracking-wide">Konsep 02</span>
                                <h3 class="text-2xl font-bold text-gray-900">Identitas Gender</h3>
                            </div>
                        </div>

                        <p class="text-gray-600 text-base leading-relaxed mb-6 flex-grow">
                            Bagaimana seseorang mengenali dan merasa tentang dirinya sendiri dalam hal gender.
                        </p>

                        <div class="space-y-3">
                            <p class="font-semibold text-gray-800 mb-3">Contohnya:</p>
                            <div class="space-y-2">
                                <div class="flex items-center p-3 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Cisgender:</strong> identitas sesuai jenis kelamin lahir</span>
                                </div>
                                <div class="flex items-center p-3 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Transgender:</strong> identitas berbeda dari kelamin lahir</span>
                                </div>
                                <div class="flex items-center p-3 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl">
                                    <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-700"><strong>Non-biner:</strong> tidak sepenuhnya laki-laki/perempuan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Perilaku Seksual -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-white/50 mb-8 opacity-0 animate-fadeInUp" style="animation-delay: 0.6s;">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-walking text-white text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <span class="text-sm font-bold text-blue-600 uppercase tracking-wide">Konsep 03</span>
                        <h3 class="text-2xl font-bold text-gray-900">Perilaku Seksual</h3>
                    </div>
                </div>

                <p class="text-gray-600 text-base leading-relaxed mb-6">
                    Tindakan atau aktivitas yang dilakukan seseorang yang berkaitan dengan seksualitas.
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <p class="font-semibold text-gray-800 mb-3">Penting untuk diketahui:</p>
                        <div class="space-y-2">
                            <div class="flex items-start p-3 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3 mt-2"></div>
                                <span class="text-sm text-gray-700">Perilaku seksual tidak selalu mencerminkan identitas gender atau orientasi seksual</span>
                            </div>
                            <div class="flex items-start p-3 bg-gradient-to-r from-teal-50 to-emerald-50 rounded-xl">
                                <div class="w-2 h-2 bg-teal-500 rounded-full mr-3 mt-2"></div>
                                <span class="text-sm text-gray-700">Setiap orang punya pilihan untuk melakukan atau tidak melakukan aktivitas seksual</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Importance Section -->
            <div class="bg-gradient-to-br from-emerald-500 via-teal-600 to-cyan-600 p-8 rounded-3xl shadow-2xl text-white relative overflow-hidden opacity-0 animate-fadeInUp" style="animation-delay: 0.8s;">
                <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-lightbulb text-white text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <span class="text-sm font-bold text-emerald-200 uppercase tracking-wide">Mengapa Penting?</span>
                            <h3 class="text-2xl font-bold text-white">Membangun Pemahaman</h3>
                        </div>
                    </div>

                    <p class="text-emerald-100 text-base leading-relaxed mb-6">
                        Dengan memahami perbedaan ini, kita bisa:
                    </p>

                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                        <div class="flex items-center p-4 bg-white/10 backdrop-blur-sm rounded-xl">
                            <i class="fas fa-check-circle text-emerald-300 mr-3"></i>
                            <span class="text-white text-sm">Menghindari kesalahpahaman</span>
                        </div>
                        <div class="flex items-center p-4 bg-white/10 backdrop-blur-sm rounded-xl">
                            <i class="fas fa-heart text-emerald-300 mr-3"></i>
                            <span class="text-white text-sm">Membangun sikap saling menghargai</span>
                        </div>
                        <div class="flex items-center p-4 bg-white/10 backdrop-blur-sm rounded-xl">
                            <i class="fas fa-shield-alt text-emerald-300 mr-3"></i>
                            <span class="text-white text-sm">Mengurangi stigma dan diskriminasi</span>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="text-white/90 text-base leading-relaxed">
                            Setiap remaja berhak mendapatkan edukasi yang sehat, netral, dan berdasarkan ilmu.
                        </p>
                        <p class="text-emerald-200 font-semibold text-lg mt-2">
                            Yuk, jadi generasi yang terbuka dan peduli satu sama lain! 🌈
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Memahami LGBT: Perspektif Edukasi</h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pemahaman yang tepat dan seimbang berdasarkan nilai-nilai budaya dan agama Indonesia
                </p>
            </div>

<div class="grid lg:grid-cols-2 gap-12">
    <!-- Card 1: Definisi LGBT -->
    <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-slide-up">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Apakah kamu tau LGBT itu apa? Cari tau yukk</h3>

        <p class="text-gray-600 mb-6">LGBT merupakan singkatan dari Lesbian, Gay, Biseksual, dan Transgender. Ini adalah istilah yang digunakan untuk menggambarkan kelompok orang dengan orientasi seksual dan identitas gender yang beragam, berbeda dari norma heteroseksual dan cisgender. Berikut penjelasan singkat dari masing-masing istilah:</p>

        <div class="space-y-4">
            <div class="flex items-start">
                <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center mr-4 mt-1">
                    <i class="fas fa-female text-pink-500 text-sm"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">1. Lesbian</h4>
                    <p class="text-gray-600 text-sm">adalah sebutan bagi perempuan yang memiliki ketertarikan secara emosional, romantis, atau seksual kepada sesama perempuan.</p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-4 mt-1">
                    <i class="fas fa-male text-blue-500 text-sm"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">2. Gay</h4>
                    <p class="text-gray-600 text-sm">biasanya digunakan untuk merujuk pada laki-laki yang memiliki ketertarikan terhadap sesama jenis, yaitu laki-laki lainnya.</p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-4 mt-1">
                    <i class="fas fa-heart text-purple-500 text-sm"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">3. Biseksual</h4>
                    <p class="text-gray-600 text-sm">adalah individu yang memiliki ketertarikan baik kepada laki-laki maupun perempuan.</p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="w-8 h-8 bg-teal-100 rounded-full flex items-center justify-center mr-4 mt-1">
                    <i class="fas fa-transgender text-teal-500 text-sm"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">4. Transgender</h4>
                    <p class="text-gray-600 text-sm">adalah istilah yang digunakan untuk menggambarkan individu yang identitas gendernya berbeda dari jenis kelamin yang ditetapkan saat lahir.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2: Isu LGBT di Indonesia -->
    <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-slide-up">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Isu LGBT di Indonesia</h3>

        <div class="text-gray-700 mb-6 leading-relaxed space-y-4">
            <p>Isu LGBT (Lesbian, Gay, Biseksual, dan Transgender) sudah lama menjadi perdebatan di masyarakat dunia. Di Indonesia, topik ini masih dianggap tabu dan belum sepenuhnya dipahami. Secara umum, LGBT termasuk kelompok minoritas yang sering mengalami diskriminasi karena perbedaan gender.</p>

            <p>Istilah yang sering dikaitkan dengan LGBT adalah homoseksual, yaitu ketertarikan emosional dan seksual pada sesama jenis. Menurut Oetomo (2001) dan Haryana (2012), homoseksual adalah orientasi seksual terhadap orang dengan jenis kelamin yang sama. Pria homoseksual disebut "gay" dan wanita homoseksual disebut "lesbian" (Elly Kurniawati, Sasongko, Jumangin, 2022).</p>
        </div>

        <div class="border-t border-b border-gray-200 py-4 my-4">
            <h4 class="font-semibold text-gray-800 mb-3">Dampak Perilaku LGBT:</h4>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                    <span>Bertentangan dengan agama, moral, dan budaya Indonesia</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                    <span>Merusak tatanan keluarga dan menyebarkan gaya hidup bebas</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                    <span>Memberi pengaruh buruk pada generasi muda</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                    <span>Risiko tinggi penyakit menular seksual</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                    <span>Mempengaruhi keluarga dan orang terdekat secara negatif</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Card 3: Fenomena LGBT -->
<div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-slide-up border border-gray-100 mt-12">
    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Fenomena LGBT dalam Masyarakat Indonesia</h3>

    <!-- Bagian Pembuka -->
    <div class="bg-blue-50 p-4 rounded-lg mb-6 border-l-4 border-blue-400">
        <p class="text-gray-700">
            <i class="fas fa-info-circle text-blue-500 mr-2"></i>
            Isu LGBT (Lesbian, Gay, Biseksual, dan Transgender) sudah lama menjadi perdebatan di masyarakat dunia. Di Indonesia, topik ini masih dianggap tabu dan belum sepenuhnya dipahami.
        </p>
    </div>

    <!-- Definisi dan Latar Belakang -->
    <div class="mb-6">
        <h4 class="font-semibold text-lg text-gray-800 mb-3 flex items-center">
            <i class="fas fa-book-open text-purple-500 mr-2"></i>
            Pemahaman Dasar
        </h4>
        <div class="text-gray-700 space-y-3">
            <p>Secara umum, LGBT termasuk kelompok minoritas yang sering mengalami diskriminasi karena perbedaan gender. Istilah yang sering dikaitkan dengan LGBT adalah homoseksual, yaitu ketertarikan emosional dan seksual pada sesama jenis.</p>
            <p class="bg-gray-50 p-3 rounded italic">
                <i class="fas fa-quote-left text-gray-400 mr-2"></i>
                Menurut Oetomo (2001) dan Haryana (2012), homoseksual adalah orientasi seksual terhadap orang dengan jenis kelamin yang sama. Pria homoseksual disebut "gay" dan wanita homoseksual disebut "lesbian" (Elly Kurniawati, Sasongko, Jumangin, 2022).
            </p>
        </div>
    </div>

    <!-- Nilai dan Norma -->
    <div class="mb-6">
        <h4 class="font-semibold text-lg text-gray-800 mb-3 flex items-center">
            <i class="fas fa-balance-scale text-green-500 mr-2"></i>
            Nilai dan Norma Masyarakat
        </h4>
        <div class="text-gray-700 space-y-3">
            <p>
                Setiap manusia dianjurkan bersikap sesuai jenis kelaminnya karena masyarakat memiliki norma dan budaya yang mengatur peran laki-laki dan perempuan. Ini penting untuk menjaga keteraturan dan keharmonisan hidup bersama.
            </p>
            <div class="grid md:grid-cols-2 gap-4 mt-4">
                <div class="bg-green-50 p-3 rounded-lg border border-green-100">
                    <h5 class="font-medium text-green-700 mb-2">Peran Laki-laki:</h5>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mr-2 mt-1 text-xs"></i>
                            <span>Tegas dan bertanggung jawab</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-400 mr-2 mt-1 text-xs"></i>
                            <span>Pelindung keluarga</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-pink-50 p-3 rounded-lg border border-pink-100">
                    <h5 class="font-medium text-pink-700 mb-2">Peran Perempuan:</h5>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-pink-400 mr-2 mt-1 text-xs"></i>
                            <span>Lembut dan penyayang</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-pink-400 mr-2 mt-1 text-xs"></i>
                            <span>Pendidik utama dalam keluarga</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Penutup dan Rekomendasi -->
    <div class="bg-yellow-50 p-4 rounded-lg border-l-4 border-yellow-400">
        <h4 class="font-semibold text-yellow-800 mb-2 flex items-center">
            <i class="fas fa-hand-paper text-yellow-500 mr-2"></i>
            Sikap yang Perlu Diambil
        </h4>
        <p class="text-sm text-yellow-800">
            Menampakkan perilaku LGBT di depan umum adalah tindakan yang tidak pantas. Pelaku seharusnya sadar dan malu, karena itu bukan gaya hidup yang patut dibanggakan. Perlu ada bimbingan dan edukasi agar mereka kembali ke jalan yang sesuai dengan fitrah dan nilai-nilai luhur bangsa.
        </p>
    </div>
</div>

<!-- Card 4: Dampak Bahaya LGBT -->
<div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 animate-slide-up border border-red-100 mt-12">
    <div class="flex items-center mb-6">
        <div class="bg-red-100 p-3 rounded-full mr-4">
            <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800">Dampak Bahaya LGBT</h3>
    </div>

    <p class="text-gray-700 mb-6 leading-relaxed">
        Dampak negatif dari fenomena LGBT (Lesbian, Gay, Biseksual, dan Transgender) tidak hanya ditinjau dari segi kesehatan namun juga dapat merusak keharmonisan dalam keluarga dan hubungan masyarakat. Ditinjau dari sudut pandang agama dan sosial, LGBT menyebabkan peningkatan gejala penyimpangan sosial dan kemaksiatan yang tidak dapat dikendalikan.
    </p>

    <div class="grid md:grid-cols-2 gap-6">
        <!-- Dampak Psikologis -->
        <div class="bg-rose-50 p-5 rounded-xl border-l-4 border-rose-400">
            <h4 class="font-semibold text-lg text-rose-700 mb-3 flex items-center">
                <i class="fas fa-brain text-rose-500 mr-2"></i>
                Dampak Psikologis
            </h4>
            <ul class="space-y-2 text-gray-700">
                <li class="flex items-start">
                    <i class="fas fa-circle text-rose-300 text-xs mt-1.5 mr-2"></i>
                    <span>Gangguan kejiwaan dan perkembangan mental</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-circle text-rose-300 text-xs mt-1.5 mr-2"></i>
                    <span>Gangguan saraf dan kesehatan mental</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-circle text-rose-300 text-xs mt-1.5 mr-2"></i>
                    <span>Stres dan depresi berkepanjangan</span>
                </li>
            </ul>
        </div>

        <!-- Dampak Kesehatan Fisik -->
        <div class="bg-red-50 p-5 rounded-xl border-l-4 border-red-400">
            <h4 class="font-semibold text-lg text-red-700 mb-3 flex items-center">
                <i class="fas fa-heartbeat text-red-500 mr-2"></i>
                Dampak Kesehatan Fisik
            </h4>
            <ul class="space-y-2 text-gray-700">
                <li class="flex items-start">
                    <i class="fas fa-circle text-red-300 text-xs mt-1.5 mr-2"></i>
                    <span>Penyakit menular seksual (Gonore, Trikomoniasis)</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-circle text-red-300 text-xs mt-1.5 mr-2"></i>
                    <span>Infeksi HIV/AIDS yang berujung kematian</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-circle text-red-300 text-xs mt-1.5 mr-2"></i>
                    <span>Gangguan sistem reproduksi</span>
                </li>
            </ul>
            <p class="text-xs text-gray-500 mt-3 italic">
                (Triyana et al., 2022)
            </p>
        </div>
    </div>

    <!-- Dampak Sosial dan Agama -->
    <div class="mt-6 bg-amber-50 p-5 rounded-xl border-l-4 border-amber-400">
        <h4 class="font-semibold text-lg text-amber-700 mb-3 flex items-center">
            <i class="fas fa-users text-amber-500 mr-2"></i>
            Dampak Sosial & Keagamaan
        </h4>
        <ul class="space-y-2 text-gray-700">
            <li class="flex items-start">
                <i class="fas fa-circle text-amber-300 text-xs mt-1.5 mr-2"></i>
                <span>Merusak keharmonisan keluarga dan masyarakat</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-circle text-amber-300 text-xs mt-1.5 mr-2"></i>
                <span>Penyimpangan sosial dan peningkatan kemaksiatan</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-circle text-amber-300 text-xs mt-1.5 mr-2"></i>
                <span>Bertentangan dengan nilai-nilai agama</span>
            </li>
        </ul>
    </div>

    <div class="mt-6 p-4 bg-red-100 rounded-lg">
        <p class="text-red-800 font-medium">
            <i class="fas fa-exclamation-circle mr-2"></i>
            Perilaku LGBT memiliki dampak multidimensi yang serius mulai dari kesehatan fisik, mental, hingga kerusakan tatanan sosial dan agama.
        </p>
    </div>
</div>
</section>
<!-- Video Section -->
<!-- Video Section -->
<div class="mt-16 text-center animate-fade-in">
    <h3 class="text-2xl font-bold text-gray-800 mb-8">Video Edukasi Terkait</h3>
    <div class="max-w-4xl mx-auto">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl hover-lift aspect-video">
            <iframe
                class="w-full h-full"
                src="https://www.youtube.com/embed/jGCjvyqZcVY?autoplay=0&rel=0"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-6 pointer-events-none">
                <div class="text-white">
                    <h4 class="text-xl font-semibold mb-2">Edukasi Kesehatan dan Moral untuk Remaja</h4>
                    <p class="text-gray-200">Memahami pentingnya nilai-nilai luhur dalam pembentukan karakter</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section id="solutions" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Cara Mengatasi LGBT (Lesbian, Gay, Biseksual, Transgender)</h2>
            <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Berikut merupakan pembahasan cara menangani fenomena ini dari sudut pandang edukasi dan sosial
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Pendidikan Keluarga -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-3xl hover-lift animate-slide-up">
                <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-home text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Pendidikan Keluarga</h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mr-2 mt-1 text-xs"></i>
                        <span>Orang tua dapat memberikan pendidikan moral dan agama sejak dini.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mr-2 mt-1 text-xs"></i>
                        <span>Memberikan pemahaman tentang identitas diri dan peran gender dalam masyarakat.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mr-2 mt-1 text-xs"></i>
                        <span>Membangun komunikasi terbuka agar anak merasa nyaman mendiskusikan perasaan dan pengalamannya.</span>
                    </li>
                </ul>
            </div>

            <!-- Pendidikan Sekolah -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-3xl hover-lift animate-slide-up">
                <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-school text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Pendidikan Sekolah</h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                        <span>Kurikulum dapat memasukkan pendidikan karakter, moral, dan kesehatan reproduksi.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                        <span>Mengajarkan nilai-nilai budaya dan agama yang relevan.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                        <span>Mengedukasi siswa tentang psikologi perkembangan agar lebih memahami perubahan diri mereka.</span>
                    </li>
                </ul>
            </div>

            <!-- Peningkatan Kesadaran Masyarakat -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-3xl hover-lift animate-slide-up">
                <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Peningkatan Kesadaran Masyarakat</h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                        <span>Mendorong kegiatan sosial dan agama yang memperkuat identitas budaya dan moral.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                        <span>Menyediakan bimbingan bagi individu yang mengalami kebingungan identitas.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                        <span>Mendorong gaya hidup sehat dan pengelolaan stres yang baik.</span>
                    </li>
                                        <li class="flex items-start">
                        <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                        <span> Pendekatan ini bertujuan untuk membangun pemahaman yang lebih dalam terkait identitas dan orientasi seksual, serta memberikan bimbingan berdasarkan pengetahuan, moral, dan kesehatan mental.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>


    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Jawaban atas pertanyaan umum seputar fenomena LGBT sebagai bahan edukasi
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-slide-up">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(1)">
                        <h3 class="text-lg font-semibold text-gray-800">Apa itu LGBT?</h3>
                        <i class="fas fa-chevron-down text-primary transform transition-transform" id="icon-1"></i>
                    </button>
                    <div class="hidden px-6 pb-6" id="content-1">
                        <p class="text-gray-700 leading-relaxed">
                            LGBT adalah singkatan dari Lesbian, Gay, Biseksual, dan Transgender. Istilah ini digunakan untuk menggambarkan kelompok orang dengan orientasi seksual dan identitas gender yang berbeda dari norma umum berdasarkan nilai-nilai budaya dan agama Indonesia.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-slide-up">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(2)">
                        <h3 class="text-lg font-semibold text-gray-800">Mengapa ada orang yang LGBT?</h3>
                        <i class="fas fa-chevron-down text-primary transform transition-transform" id="icon-2"></i>
                    </button>
                    <div class="hidden px-6 pb-6" id="content-2">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Tidak ada bukti ilmiah yang pasti bahwa orientasi LGBT adalah bawaan lahir. Faktor lingkungan, pergaulan, trauma masa kecil, kurangnya perhatian orang tua, dan pengaruh media sering menjadi penyebab utama.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Manusia diciptakan berpasangan antara laki-laki dan perempuan untuk membentuk keluarga dan melestarikan keturunan sesuai dengan ajaran agama dan nilai-nilai luhur bangsa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-slide-up">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(3)">
                        <h3 class="text-lg font-semibold text-gray-800">Apakah orientasi seksual dapat diubah?</h3>
                        <i class="fas fa-chevron-down text-primary transform transition-transform" id="icon-3"></i>
                    </button>
                    <div class="hidden px-6 pb-6" id="content-3">
                        <p class="text-gray-700 leading-relaxed">
                            Perilaku dan gaya hidup dapat diarahkan kembali melalui bimbingan agama, lingkungan yang baik, dan tekad pribadi yang kuat. Banyak yang berhasil meninggalkan perilaku LGBT dan kembali ke fitrah yang sesuai dengan nilai-nilai luhur bangsa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift animate-slide-up">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(4)">
                        <h3 class="text-lg font-semibold text-gray-800">Kapan seseorang menyadari orientasi seksualnya?</h3>
                        <i class="fas fa-chevron-down text-primary transform transition-transform" id="icon-4"></i>
                    </button>
                    <div class="hidden px-6 pb-6" id="content-4">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Kesadaran ini biasanya mulai muncul saat masa pubertas, sekitar usia 10-15 tahun. Namun, kesadaran ini bisa dipengaruhi oleh lingkungan, pergaulan, pendidikan, atau pengalaman pribadi.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Sejak usia dini, kita seharusnya sudah menyadari jati diri dan kodrat jenis kelamin kita. Dengan pemahaman yang tepat, kita bisa tumbuh sesuai peran yang benar dan terhindar dari penyimpangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center animate-fade-in">
                <h2 class="text-4xl font-bold mb-6">Butuh Konsultasi atau Bantuan?</h2>
                <p class="text-xl text-pink-100 mb-8 max-w-2xl mx-auto">
                    Tim ahli kami siap membantu memberikan bimbingan dan edukasi yang tepat untuk keluarga Indonesia
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all hover-lift">
                        <i class="fas fa-phone mr-2"></i>Hubungi Sekarang
                    </button>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary transition-all">
                        <i class="fas fa-download mr-2"></i>Download Panduan
                    </button>
                </div>
            </div>
        </div>
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-white/10 rounded-full animate-pulse"></div>
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-yellow-300/20 rounded-full animate-bounce-slow"></div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kami siap membantu memberikan edukasi dan bimbingan yang tepat
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="animate-slide-up">
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-2">Alamat</h3>
                                <p class="text-gray-600">Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-2">Telepon</h3>
                                <p class="text-gray-600">+62-8226-2559-692</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 mb-2">Email</h3>
                                <p class="text-gray-600">striagraini@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animate-slide-up">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-primary transition-colors">
                            <input type="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <input type="text" placeholder="Subjek" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-primary transition-colors">
                        <textarea rows="5" placeholder="Pesan Anda" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-primary transition-colors resize-none"></textarea>
                        <button type="submit" class="w-full bg-primary text-white py-3 rounded-xl font-semibold hover:bg-primary-dark transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>



  <footer class="bg-gray-900 text-white py-16 mt-auto"> <!-- Tambahkan mt-auto -->
    ...@include('layouts.footer')
  </footer>
