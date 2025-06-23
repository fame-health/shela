
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukasi Sehat dan Bijak untuk Remaja Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                        Edukasi<span class="text-gray-700">Sehat</span>
                    </div>

                    <!-- Desktop Menu -->
                    <ul class="hidden md:flex space-x-8">
                        <li><a href="#home" class="text-gray-700 hover:text-primary transition-colors font-medium">Home</a></li>
                        <li><a href="#education" class="text-gray-700 hover:text-primary transition-colors font-medium">Edukasi</a></li>
                        <li><a href="#solutions" class="text-gray-700 hover:text-primary transition-colors font-medium">Solusi</a></li>
                        <li><a href="#faq" class="text-gray-700 hover:text-primary transition-colors font-medium">FAQ</a></li>
                        <li><a href="#contact" class="text-gray-700 hover:text-primary transition-colors font-medium">Kontak</a></li>
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
                        Edukasi<span class="text-gray-700">Sehat</span>
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

    <!-- Hero/Banner Section - Enhanced -->
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

                <!-- Visual Side -->
                <div class="animate-slide-up">
                    <div class="relative">
                        <!-- Main Card -->
                        <div class="w-full bg-white/20 rounded-3xl glass-effect p-6 md:p-8 hover-lift">
                            <div class="text-center">
                                <!-- Icon -->
                                <div class="w-20 h-20 bg-white/30 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i class="fas fa-graduation-cap text-3xl text-white"></i>
                                </div>

                                <h3 class="text-xl md:text-2xl font-bold mb-4">Edukasi Komprehensif</h3>

                                <p class="text-pink-100 mb-6 text-sm md:text-base">
                                    Membangun pemahaman yang mendalam tentang identitas diri berdasarkan nilai-nilai luhur bangsa.
                                </p>

                                <!-- Features List -->
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center justify-center text-sm">
                                        <i class="fas fa-check-circle text-yellow-300 mr-2"></i>
                                        <span>Materi Berdasarkan Nilai Budaya</span>
                                    </div>
                                    <div class="flex items-center justify-center text-sm">
                                        <i class="fas fa-check-circle text-yellow-300 mr-2"></i>
                                        <span>Pendekatan Holistik</span>
                                    </div>
                                    <div class="flex items-center justify-center text-sm">
                                        <i class="fas fa-check-circle text-yellow-300 mr-2"></i>
                                        <span>Bimbingan Profesional</span>
                                    </div>
                                </div>

                                <!-- Progress Bar -->
                                <div class="w-full bg-white/20 rounded-full h-2 mb-4">
                                    <div class="bg-yellow-300 h-2 rounded-full w-4/5"></div>
                                </div>
                                <div class="text-sm text-pink-200">Program Sukses 80%</div>
                            </div>
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

    <!-- News Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-slide-up">
                    <span class="text-primary font-semibold text-sm uppercase tracking-wide">Berita Terkini</span>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">
                        MIRIS! Ditemukan Grup Siswa LGBT di Sekolah Dasar Pekanbaru
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Kamis, 15 Juni 2023 - 05:41 WIB | Reporter: Rika Pangesti | Editor: Ade Kurniawan
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Belakangan viral di media sosial terkait ditemukannya grup WhatsApp siswa SD yang terindikasi LGBT di Pekanbaru, Riau. Kasus ini menunjukkan pentingnya edukasi yang tepat sejak dini untuk mencegah penyimpangan perilaku pada anak-anak.
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Pemerintah melalui KemenPPPA turun tangan menangani kasus ini. Hal ini menjadi pengingat bagi kita semua akan pentingnya pengawasan dan bimbingan yang tepat dari orang tua dan guru.
                    </p>
                    <button class="bg-primary text-white px-6 py-3 rounded-full hover:bg-primary-dark transition-colors">
                        <i class="fas fa-external-link-alt mr-2"></i>Baca Selengkapnya
                    </button>
                </div>

                <div class="animate-slide-up">
                    <div class="bg-gradient-to-br from-primary to-primary-dark p-8 rounded-3xl text-white hover-lift">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-lightbulb text-xl"></i>
                            </div>
                            <div>
                                <span class="text-pink-200 text-sm">Edukasi Remaja</span>
                                <h3 class="text-xl font-bold">Mengapa Edukasi Itu Penting?</h3>
                            </div>
                        </div>
                        <p class="mb-6 text-pink-100 leading-relaxed">
                            Edukasi yang tepat dapat mencegah diskriminasi, mendukung kesehatan mental, meningkatkan kesadaran identitas diri, dan membangun generasi yang berkarakter kuat berdasarkan nilai-nilai luhur bangsa.
                        </p>
                        <button class="text-white font-semibold hover:text-pink-200 transition-colors">
                            PELAJARI LEBIH LANJUT <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="bg-white p-8 rounded-3xl shadow-lg hover-lift animate-slide-up">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Apa itu LGBT?</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-female text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Lesbian</h4>
                                <p class="text-gray-600 text-sm">Perempuan yang memiliki ketertarikan kepada sesama perempuan</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-male text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Gay</h4>
                                <p class="text-gray-600 text-sm">Laki-laki yang memiliki ketertarikan kepada sesama laki-laki</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-heart text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Biseksual</h4>
                                <p class="text-gray-600 text-sm">Individu yang tertarik pada laki-laki dan perempuan</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-transgender text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Transgender</h4>
                                <p class="text-gray-600 text-sm">Identitas gender berbeda dari jenis kelamin saat lahir</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover-lift animate-slide-up">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Dampak dan Konsekuensi</h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Perilaku LGBT bertentangan dengan nilai-nilai agama, moral, dan budaya Indonesia. Jika tidak ditangani dengan tepat, dapat berdampak pada:
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-exclamation-triangle text-red-500 mr-3 mt-1"></i>
                            <span>Kerusakan tatanan keluarga dan masyarakat</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-exclamation-triangle text-red-500 mr-3 mt-1"></i>
                            <span>Penyebaran gaya hidup yang tidak sesuai nilai luhur</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-exclamation-triangle text-red-500 mr-3 mt-1"></i>
                            <span>Pengaruh negatif pada generasi muda</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-exclamation-triangle text-red-500 mr-3 mt-1"></i>
                            <span>Risiko tinggi penyakit menular seksual</span>
                        </li>
                    </ul>
                    <div class="mt-6 p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-400">
                        <p class="text-sm text-yellow-800">
                            <i class="fas fa-info-circle mr-2"></i>
                            Penting untuk memberikan bimbingan dan edukasi yang tepat berdasarkan nilai-nilai luhur bangsa.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Video Section -->
            <div class="mt-16 text-center animate-fade-in">
                <h3 class="text-2xl font-bold text-gray-800 mb-8">Video Edukasi Terkait</h3>
                <div class="max-w-4xl mx-auto">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl hover-lift">
                        <div class="aspect-video bg-gray-900 flex items-center justify-center">
                            <button class="w-20 h-20 bg-primary rounded-full flex items-center justify-center hover:bg-primary-dark transition-colors hover:scale-110 transform">
                                <i class="fas fa-play text-white text-2xl ml-1"></i>
                            </button>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-6">
                            <div class="text-white">
                                <h4 class="text-xl font-semibold mb-2">Edukasi Kesehatan dan Moral untuk Remaja</h4>
                                <p class="text-gray-200">Memahami pentingnya nilai-nilai luhur dalam pembentukan karakter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Cara Mengatasi dan Mencegah</h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pendekatan holistik melalui edukasi keluarga, sekolah, dan masyarakat
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-3xl hover-lift animate-slide-up">
                    <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Pendidikan Keluarga</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mr-2 mt-1 text-xs"></i>
                            <span>Memberikan pendidikan moral dan agama sejak dini</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mr-2 mt-1 text-xs"></i>
                            <span>Pemahaman identitas diri dan peran gender</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mr-2 mt-1 text-xs"></i>
                            <span>Membangun komunikasi terbuka dengan anak</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-3xl hover-lift animate-slide-up">
                    <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-school text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Pendidikan Sekolah</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                            <span>Kurikulum pendidikan karakter dan moral</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                            <span>Mengajarkan nilai-nilai budaya dan agama</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                            <span>Edukasi psikologi perkembangan remaja</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-3xl hover-lift animate-slide-up">
                    <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Peningkatan Kesadaran Masyarakat</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                            <span>Kegiatan sosial dan agama yang positif</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                            <span>Bimbingan untuk kebingungan identitas</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-purple-500 mr-2 mt-1 text-xs"></i>
                            <span>Promosi gaya hidup sehat dan bermoral</span>
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

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold text-primary mb-4">
                        Edukasi<span class="text-white">Sehat</span>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Memberikan edukasi yang tepat dan bijak untuk membangun generasi Indonesia yang berkarakter kuat berdasarkan nilai-nilai luhur bangsa.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Menu Utama</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-primary transition-colors">Beranda</a></li>
                        <li><a href="#education" class="text-gray-400 hover:text-primary transition-colors">Edukasi</a></li>
                        <li><a href="#solutions" class="text-gray-400 hover:text-primary transition-colors">Solusi</a></li>
                        <li><a href="#faq" class="text-gray-400 hover:text-primary transition-colors">FAQ</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-primary transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Layanan</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Konsultasi Keluarga</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Edukasi Sekolah</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Workshop Orang Tua</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Bimbingan Remaja</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Materi Edukasi</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Kontak Info</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-primary mr-3"></i>
                            <span class="text-gray-400">+62-8226-2559-692</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-primary mr-3"></i>
                            <span class="text-gray-400">striagraini@gmail.com</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-primary mr-3 mt-1"></i>
                            <span class="text-gray-400">Jakarta, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">
                    © 2024 EdukasiSehat. Semua hak dilindungi. Dibuat dengan ❤️ untuk Indonesia.
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg hover:bg-primary-dark transition-all transform hover:scale-110 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Preloader
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('preloader').style.opacity = '0';
                setTimeout(() => {
                    document.getElementById('preloader').style.display = 'none';
                }, 300);
            }, 1000);
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            const backToTop = document.getElementById('backToTop');

            if (window.scrollY > 100) {
                header.classList.add('backdrop-blur-md', 'bg-white/95', 'shadow-lg');
                backToTop.classList.remove('opacity-0', 'invisible');
            } else {
                header.classList.remove('backdrop-blur-md', 'bg-white/95', 'shadow-lg');
                backToTop.classList.add('opacity-0', 'invisible');
            }
        });

        // FAQ Toggle
        function toggleFAQ(id) {
            const content = document.getElementById(`content-${id}`);
            const icon = document.getElementById(`icon-${id}`);

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Back to top
        document.getElementById('backToTop').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.animate-slide-up, .animate-fade-in').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
