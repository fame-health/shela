<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel - Edukasi Sehat dan Bijak untuk Remaja Indonesia</title>
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
        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 20px 0;
        }
        .content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: #4a5568;
        }
        .content h2, .content h3 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
            color: #2d3748;
        }
        .content h2 {
            font-size: 1.5rem;
            border-bottom: 2px solid #FF4081;
            padding-bottom: 0.5rem;
        }
        .content h3 {
            font-size: 1.25rem;
        }
        .content ul, .content ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .content li {
            margin-bottom: 0.5rem;
        }
        .content blockquote {
            border-left: 4px solid #FF4081;
            padding-left: 1.5rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: #4a5568;
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
                        <a href="/">Edukasi<span class="text-gray-700">Sehat</span></a>
                    </div>

                    <!-- Desktop Menu -->
                    <ul class="hidden md:flex space-x-8">
                        <li><a href="/" class="text-gray-700 hover:text-primary transition-colors font-medium">Home</a></li>
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
                    <li><a href="/" class="block text-xl text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Home</a></li>
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

    <!-- Blog Content Section -->
    <section class="pt-32 pb-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="mb-8 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fas fa-home mr-2"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <a href="#" class="text-gray-700 hover:text-primary transition-colors">Artikel</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                <span class="text-primary font-medium">Detail Artikel</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Article Header -->
                <div class="mb-12 animate-fade-in">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">
                        MIRIS! Ditemukan Grup Siswa LGBT di Sekolah Dasar Pekanbaru
                    </h1>

                    <!-- Meta Information -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                        <div class="flex items-center mb-4 sm:mb-0">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-3">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Rika Pangesti</p>
                                <p class="text-xs text-gray-500">Reporter</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-sm text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 15 Juni 2023</span>
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 5 min read</span>
                            <span class="text-sm text-gray-500"><i class="far fa-eye mr-1"></i> 1.2K views</span>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="rounded-2xl overflow-hidden mb-6 shadow-lg">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Featured Image" class="w-full h-auto">
                    </div>

                    <!-- Article Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">LGBT</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">Pendidikan</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">Remaja</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full">Sekolah</span>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="content animate-slide-up">
                    <p class="text-lg text-gray-700 font-medium mb-6">
                        Belakangan viral di media sosial terkait ditemukannya grup WhatsApp siswa SD yang terindikasi LGBT di Pekanbaru, Riau. Kasus ini menunjukkan pentingnya edukasi yang tepat sejak dini untuk mencegah penyimpangan perilaku pada anak-anak.
                    </p>

                    <h2>Latar Belakang Kasus</h2>
                    <p>
                        Kasus ini pertama kali terungkap ketika seorang guru menemukan percakapan tidak pantas di grup WhatsApp siswa kelas 5 SD. Dalam grup tersebut, beberapa siswa saling mengirim pesan dan gambar yang mengindikasikan perilaku LGBT. Guru yang menemukan langsung melaporkan ke kepala sekolah dan orang tua siswa.
                    </p>

                    <div class="my-8 p-6 bg-gray-50 rounded-2xl border-l-4 border-primary">
                        <p class="text-gray-700 italic">
                            <i class="fas fa-quote-left text-primary text-2xl mr-2 align-middle"></i>
                            Ini sangat memprihatinkan. Anak-anak seusia SD seharusnya belum terpapar konten seperti ini. Kami akan bekerja sama dengan orang tua dan pihak berwenang untuk menangani kasus ini.
                            <span class="block mt-2 text-sm font-medium">- Kepala Sekolah SDN 12 Pekanbaru</span>
                        </p>
                    </div>

                    <h2>Reaksi Pemerintah dan Masyarakat</h2>
                    <p>
                        Pemerintah melalui KemenPPPA turun tangan menangani kasus ini. Hal ini menjadi pengingat bagi kita semua akan pentingnya pengawasan dan bimbingan yang tepat dari orang tua dan guru. KemenPPPA akan melakukan:
                    </p>

                    <ul class="list-disc pl-6">
                        <li>Pendampingan psikologis bagi siswa yang terlibat</li>
                        <li>Pembinaan bagi orang tua dan guru</li>
                        <li>Edukasi kesehatan reproduksi sesuai usia</li>
                        <li>Penguatan pendidikan karakter di sekolah</li>
                    </ul>

                    <h2>Dampak pada Siswa</h2>
                    <p>
                        Psikolog anak, Dr. Siti Rahayu, menjelaskan bahwa paparan konten LGBT di usia dini dapat berdampak serius pada perkembangan psikologis anak:
                    </p>

                    <ol class="list-decimal pl-6">
                        <li>Kebingungan identitas gender</li>
                        <li>Gangguan perkembangan emosional</li>
                        <li>Penurunan prestasi belajar</li>
                        <li>Isolasi sosial dari teman sebaya</li>
                    </ol>

                    <div class="grid md:grid-cols-2 gap-6 my-8">
                        <div class="bg-primary/5 p-6 rounded-2xl border border-primary/10">
                            <h3 class="text-xl font-bold text-primary mb-3">Faktor Penyebab</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                                    <span>Paparan konten tidak pantas di internet</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                                    <span>Kurangnya pengawasan orang tua</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                                    <span>Pengaruh pergaulan yang salah</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-primary/5 p-6 rounded-2xl border border-primary/10">
                            <h3 class="text-xl font-bold text-primary mb-3">Solusi Pencegahan</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                                    <span>Penguatan pendidikan karakter</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                                    <span>Pembatasan akses internet</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                                    <span>Komunikasi terbuka orang tua-anak</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2>Peran Orang Tua dan Sekolah</h2>
                    <p>
                        Orang tua dan sekolah memiliki peran krusial dalam mencegah kasus serupa terulang kembali. Berikut beberapa langkah yang bisa dilakukan:
                    </p>

                    <div class="my-8">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Parent and child" class="w-full rounded-2xl">
                        <p class="text-center text-sm text-gray-500 mt-2">Orang tua perlu lebih aktif memantau perkembangan anak</p>
                    </div>

                    <h3>Untuk Orang Tua:</h3>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Memantau aktivitas digital anak</li>
                        <li>Memberikan pendidikan moral dan agama</li>
                        <li>Membangun komunikasi yang terbuka</li>
                        <li>Menjadi contoh yang baik</li>
                    </ul>

                    <h3>Untuk Sekolah:</h3>
                    <ul class="list-disc pl-6">
                        <li>Memperkuat pendidikan karakter</li>
                        <li>Menyediakan bimbingan konseling</li>
                        <li>Bekerja sama dengan orang tua</li>
                        <li>Memantau interaksi siswa</li>
                    </ul>

                    <h2>Kesimpulan</h2>
                    <p>
                        Kasus grup LGBT di SD Pekanbaru ini menjadi alarm bagi kita semua. Pendidikan karakter berbasis nilai-nilai luhur bangsa harus dimulai sejak dini, baik di rumah maupun di sekolah. Kolaborasi antara orang tua, sekolah, dan pemerintah sangat penting untuk melindungi anak-anak dari pengaruh negatif yang dapat merusak masa depan mereka.
                    </p>
                </div>

                <!-- Article Footer -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <!-- Share Buttons -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Bagikan Artikel Ini</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-700 text-white rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="bg-gray-50 p-6 rounded-2xl flex flex-col md:flex-row items-start md:items-center gap-6">
                        <div class="w-20 h-20 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                            <i class="fas fa-user text-3xl text-primary"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Rika Pangesti</h3>
                            <p class="text-sm text-gray-600 mb-3">Reporter bidang pendidikan dan keluarga</p>
                            <p class="text-gray-700">
                                Rika Pangesti adalah jurnalis dengan pengalaman 10 tahun meliput isu-isu pendidikan dan keluarga. Fokus utamanya adalah pada perkembangan pendidikan karakter dan moral untuk generasi muda Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Artikel Terkait</h2>
                <div class="w-24 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 1" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar-alt mr-1"></i> 10 Juni 2023</span>
                            <span class="mx-2">•</span>
                            <span><i class="far fa-clock mr-1"></i> 4 min read</span>
                        </div>
                        <a href="#">
                            <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-primary transition-colors">Pengaruh Media Sosial pada Perilaku Remaja</h3>
                        </a>
                        <p class="text-gray-600 mb-4">Bagaimana media sosial mempengaruhi perkembangan identitas dan perilaku remaja di era digital.</p>
                        <a href="#" class="text-primary font-medium hover:text-primary-dark transition-colors inline-flex items-center">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 2" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar-alt mr-1"></i> 5 Juni 2023</span>
                            <span class="mx-2">•</span>
                            <span><i class="far fa-clock mr-1"></i> 6 min read</span>
                        </div>
                        <a href="#">
                            <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-primary transition-colors">Pentingnya Pendidikan Seksualitas untuk Anak</h3>
                        </a>
                        <p class="text-gray-600 mb-4">Bagaimana memberikan pendidikan seksualitas yang tepat sesuai usia dan nilai-nilai budaya Indonesia.</p>
                        <a href="#" class="text-primary font-medium hover:text-primary-dark transition-colors inline-flex items-center">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover-lift">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Article 3" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar-alt mr-1"></i> 1 Juni 2023</span>
                            <span class="mx-2">•</span>
                            <span><i class="far fa-clock mr-1"></i> 5 min read</span>
                        </div>
                        <a href="#">
                            <h3 class="text-xl font-bold text-gray-800 mb-3 hover:text-primary transition-colors">Peran Keluarga dalam Membentuk Karakter Anak</h3>
                        </a>
                        <p class="text-gray-600 mb-4">Strategi untuk orang tua dalam membangun karakter anak berdasarkan nilai-nilai luhur bangsa.</p>
                        <a href="#" class="text-primary font-medium hover:text-primary-dark transition-colors inline-flex items-center">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-primary-dark transition-colors">
                    <i class="fas fa-book-open mr-2"></i>Lihat Semua Artikel
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Dapatkan Artikel Terbaru</h2>
                <p class="text-xl text-pink-100 mb-8">Berlangganan newsletter kami untuk mendapatkan update artikel dan informasi terbaru seputar pendidikan karakter dan kesehatan remaja.</p>

                <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-2xl mx-auto">
                    <input type="email" placeholder="Alamat Email Anda" class="flex-grow px-6 py-3 rounded-full focus:outline-none text-gray-800">
                    <button type="submit" class="bg-white text-primary px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                        Berlangganan
                    </button>
                </form>

                <p class="text-sm text-pink-200 mt-4">Kami tidak akan mengirim spam. Anda bisa berhenti berlangganan kapan saja.</p>
            </div>
        </div>
    </section>

  