{{-- resources/views/blog/category.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel: {{ $category->name }}</title>
    <meta name="description" content="Kumpulan artikel pada kategori {{ $category->name }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        .mobile-menu.active {
            transform: translateX(0);
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
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .smooth-transition {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="fixed top-0 w-full z-40 bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-pink-500">
                <a href="/">Edukasi<span class="text-gray-700">Sehat</span></a>
            </div>
            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Home</a>
                <a href="#education" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Edukasi</a>
                <a href="#solutions" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Solusi</a>
                <a href="#faq" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">FAQ</a>
                <a href="#contact" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Kontak</a>
            </nav>
            <!-- Desktop CTA Button -->
            <button class="hidden md:block bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition-colors">
                Konsultasi Gratis
            </button>
            <!-- Mobile Menu Button -->
            <button class="md:hidden hamburger" id="mobile-menu-btn">
                <div class="w-6 h-0.5 bg-gray-700 mb-1 transition-all line1"></div>
                <div class="w-6 h-0.5 bg-gray-700 mb-1 transition-all line2"></div>
                <div class="w-6 h-0.5 bg-gray-700 transition-all line3"></div>
            </button>
        </div>
        <!-- Mobile Menu Overlay -->
        <div class="md:hidden mobile-menu fixed top-0 right-0 w-full h-screen bg-white z-50" id="mobile-menu">
            <div class="p-6">
                <!-- Mobile Menu Header -->
                <div class="flex justify-between items-center mb-8">
                    <div class="text-2xl font-bold text-pink-500">
                        Edukasi<span class="text-gray-700">Sehat</span>
                    </div>
                    <button class="text-gray-700 text-2xl" id="close-menu">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- Mobile Menu Items -->
                <ul class="space-y-6">
                    <li><a href="/" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">Home</a></li>
                    <li><a href="#education" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">Edukasi</a></li>
                    <li><a href="#solutions" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">Solusi</a></li>
                    <li><a href="#faq" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">FAQ</a></li>
                    <li><a href="#contact" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">Kontak</a></li>
                </ul>
                <!-- Mobile Contact Info -->
                <div class="mt-8 p-4 bg-gray-50 rounded-2xl">
                    <h3 class="font-semibold text-gray-800 mb-4">Hubungi Kami</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone text-pink-500 mr-3"></i>
                            <span>+62-8226-2559-692</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope text-pink-500 mr-3"></i>
                            <span>striagraini@gmail.com</span>
                        </div>
                    </div>
                </div>
                <!-- Mobile CTA Button -->
                <button class="w-full mt-6 bg-pink-500 text-white py-4 rounded-full font-semibold hover:bg-pink-600 transition-colors">
                    Konsultasi Gratis
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-32 pb-20 bg-white">
        <div class="container mx-auto px-4">
            <!-- Breadcrumb -->
            <nav class="mb-8 text-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-gray-700 hover:text-pink-500 transition-colors">
                            <i class="fas fa-home mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-pink-500 transition-colors">Artikel</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-pink-500 font-medium">{{ $category->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Category Header -->
            <div class="mb-12 text-center">
                <h1 class="text-4xl font-bold mb-4 text-gray-800 animate__animated animate__fadeInDown">
                    Kategori: {{ $category->name }}
                </h1>
                @if($category->description)
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    {{ $category->description }}
                </p>
                @endif
                <div class="mt-4 flex items-center justify-center text-sm text-gray-500">
                    <i class="fas fa-newspaper mr-2"></i>
                    {{ $posts->total() }} artikel ditemukan
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($posts as $post)
                    <article class="bg-white rounded-lg overflow-hidden shadow-md card-hover smooth-transition animate__animated animate__fadeInUp">
                        @if($post->featured_image)
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $post->featured_image) }}"
                                 alt="{{ $post->title }}"
                                 class="w-full h-48 object-cover smooth-transition hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>
                        @endif

                        <div class="p-6">
                            <div class="mb-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">
                                    {{ $post->category->name ?? 'Tanpa Kategori' }}
                                </span>
                                <span class="text-gray-400 mx-2">•</span>
                                <time class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
                                </time>
                            </div>

                            <h2 class="mb-3">
                                <a href="{{ route('blog.show', $post->slug) }}"
                                   class="text-xl font-semibold text-gray-800 hover:text-pink-600 transition-colors line-clamp-2">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            @if($post->excerpt)
                            <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                            @endif

                            <div class="flex items-center justify-between">
                                <a href="{{ route('blog.show', $post->slug) }}"
                                   class="inline-flex items-center text-pink-500 hover:text-pink-600 transition-colors font-medium text-sm">
                                    Baca Selengkapnya
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>

                                @if($post->reading_time)
                                <span class="text-xs text-gray-400 flex items-center">
                                    <i class="fas fa-clock mr-1"></i>
                                    {{ $post->reading_time }} min
                                </span>
                                @endif
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-16">
                        <div class="max-w-md mx-auto">
                            <i class="fas fa-newspaper text-6xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl font-medium text-gray-800 mb-2">Belum Ada Artikel</h3>
                            <p class="text-gray-500 mb-6">Belum ada artikel dalam kategori "{{ $category->name }}" saat ini.</p>
                            <a href="{{ route('blog.index') }}"
                               class="inline-flex items-center bg-pink-500 text-white px-6 py-3 rounded-full hover:bg-pink-600 transition-colors">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Lihat Semua Artikel
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($posts->hasPages())
            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>
            @endif

            <!-- Back to Blog -->
            <div class="mt-12 text-center">
                <a href="{{ route('blog.index') }}"
                   class="inline-flex items-center text-pink-500 hover:text-pink-600 transition-colors font-medium">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali ke Semua Artikel
                </a>
            </div>
        </div>
    </main>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenuBtn = document.getElementById('close-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
        });

        // Close mobile menu when clicking on overlay
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Close mobile menu when pressing Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });
    </script>
     @include('layouts.footer')
</body>
</html>
