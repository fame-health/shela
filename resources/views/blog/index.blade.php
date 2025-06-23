{{-- resources/views/blog/index.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $metaTitle ?? 'Blog - Lentera Remaja' }}</title>
  <meta name="description" content="{{ $metaDescription ?? 'Daftar artikel kesehatan dan edukasi terbaru dari Lentera Remaja' }}" />
  <meta name="keywords" content="{{ $metaKeywords ?? 'blog, artikel, kesehatan, edukasi, informasi kesehatan' }}" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      @if(isset($post))
        <title>{{ $post->meta_title ?? $post->title }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $post->meta_description ?? $post->excerpt }}">
        <meta name="keywords" content="{{ $post->meta_keywords }}">
        <meta name="author" content="{{ $post->user->name }}">
        <meta name="article:published_time" content="{{ $post->published_at }}">
        <meta name="article:author" content="{{ $post->user->name }}">
        <meta name="article:section" content="{{ $post->category->name }}">
        <link rel="canonical" href="{{ url()->current() }}">
    @elseif(isset($category))
        <title>{{ $category->meta_title ?? $category->name }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $category->meta_description ?? $category->description }}">
        <link rel="canonical" href="{{ url()->current() }}">
    @else
        <title>{{ $title ?? 'Home' }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $description ?? 'Professional blog and content management system' }}">
        <link rel="canonical" href="{{ url()->current() }}">
    @endif

    <!-- Basic SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Favicon and Shortcut Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/gambar/gambar.png') }}">
    <link rel="shortcut icon" href="{{ asset('storage/gambar/gambar.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/gambar/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/gambar/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/gambar/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Open Graph Meta Tags (Facebook) -->
    @if(isset($post))
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $post->title }}">
        <meta property="og:description" content="{{ $post->excerpt }}">
        <meta property="og:image" content="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : asset('storage/gambar/default-og-image.png') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="article:published_time" content="{{ $post->published_at }}">
        <meta property="article:author" content="{{ $post->user->name }}">
        <meta property="article:section" content="{{ $post->category->name }}">
        <meta property="article:tag" content="{{ $post->meta_keywords }}">
    @elseif(isset($category))
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $category->name }}">
        <meta property="og:description" content="{{ $category->description }}">
        <meta property="og:image" content="{{ $category->image ? asset('storage/' . $category->image) : asset('storage/gambar/default-og-image.png') }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
    @else
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="{{ $description ?? 'Professional blog and content management system' }}">
        <meta property="og:image" content="{{ asset('storage/gambar/default-og-image.png') }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
    @endif
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    @if(isset($post))
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $post->title }}">
        <meta name="twitter:description" content="{{ $post->excerpt }}">
        <meta name="twitter:image" content="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : asset('storage/gambar/default-og-image.png') }}">
    @else
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ config('app.name') }}">
        <meta name="twitter:description" content="{{ $description ?? 'Professional blog and content management system' }}">
        <meta name="twitter:image" content="{{ asset('storage/gambar/default-og-image.png') }}">
    @endif
    <meta name="twitter:creator" content="@yourtwitterhandle">
    <meta name="twitter:site" content="@yourtwitterhandle">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('storage/gambar/ms-icon-144x144.png') }}">

    <!-- Structured Data (JSON-LD) -->
    @if(isset($post))
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "{{ $post->title }}",
        "description": "{{ $post->excerpt }}",
        "image": "{{ $post->featured_image ? asset('storage/' . $post->featured_image) : asset('storage/gambar/default-og-image.png') }}",
        "author": {
            "@type": "Person",
            "name": "{{ $post->user->name }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('storage/gambar/logo.png') }}"
            }
        },
        "datePublished": "{{ $post->published_at }}",
        "dateModified": "{{ $post->updated_at }}",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "articleSection": "{{ $post->category->name }}",
        "wordCount": "{{ str_word_count(strip_tags($post->content)) }}",
        "timeRequired": "PT{{ $post->reading_time }}M"
    }
    </script>
    @elseif(isset($category))
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "{{ $category->name }}",
        "description": "{{ $category->description }}",
        "url": "{{ url()->current() }}",
        "publisher": {
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('storage/gambar/logo.png') }}"
            }
        }
    }
    </script>
    @else
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "{{ config('app.name') }}",
        "url": "{{ url('/') }}",
        "description": "{{ $description ?? 'Professional blog and content management system' }}",
        "publisher": {
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('storage/gambar/logo.png') }}"
            }
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url('/search') }}?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    @endif

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//www.google-analytics.com">

    <!-- RSS Feed -->
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} RSS Feed" href="{{ url('/feed') }}">
  <style>
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
    .hero-gradient {
      background: linear-gradient(135deg, rgba(236, 72, 153, 0.1) 0%, rgba(236, 72, 153, 0.05) 100%);
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(236, 72, 153, 0.1), 0 10px 10px -5px rgba(236, 72, 153, 0.04);
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
        <a href="/">Lentera<span class="text-gray-700">Remaja</span></a>
      </div>
      <!-- Desktop Menu -->
      <nav class="hidden md:flex space-x-8">
        <a href="/" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Home</a>
        <a href="#education" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Edukasi</a>
        <a href="#solutions" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Solusi</a>
        <a href="#faq" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">FAQ</a>
        <a href="#contact" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Kontak</a>
        <a href="/blog" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Blog</a>

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
            Lentera<span class="text-gray-700">Remaja</span>
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
          <li><a href="/blogt" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">Blog</a></li>

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
  <main class="pt-24">
    <!-- Hero Section -->
    <section class="hero-gradient py-16">
      <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 animate__animated animate__fadeInDown">
          Artikel <span class="text-pink-500">Kesehatan</span> Terbaru
        </h1>
        <p class="text-xl text-gray-600 mb-8 animate__animated animate__fadeInUp">
          Temukan informasi kesehatan terpercaya dan tips hidup sehat
        </p>
      </div>
    </section>

    <!-- Blog Articles -->
<!-- Blog Articles -->
<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse ($posts as $post)
        <article class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover smooth-transition animate__animated animate__fadeInUp">
          @if($post->featured_image)
            <div class="relative">
              <img
                src="{{ $post->featured_image }}"
                alt="{{ $post->title }}"
                class="w-full h-48 object-cover"
              >
              <div class="absolute top-4 left-4">
                <span class="bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                  {{ $post->category->name ?? 'Kesehatan' }}
                </span>
              </div>
            </div>
          @endif

          <div class="p-6">
            <div class="flex items-center text-sm text-gray-500 mb-3">
              <i class="fas fa-calendar text-pink-500 mr-2"></i>
              {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
            </div>

            <h2 class="text-xl font-bold text-gray-800 mb-3 hover:text-pink-500 transition-colors">
              <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
            </h2>

            <p class="text-gray-600 mb-4 leading-relaxed">
              {{ Str::limit($post->excerpt, 120) }}
            </p>

            <div class="flex justify-between items-center">
              <a href="{{ route('blog.show', $post->slug) }}"
                 class="inline-flex items-center text-pink-500 hover:text-pink-600 font-medium transition-colors">
                Baca Selengkapnya
                <i class="fas fa-arrow-right ml-2"></i>
              </a>
              <div class="flex items-center text-sm text-gray-400">
                <i class="fas fa-eye mr-1"></i>
                <span>{{ $post->views ?? 0 }}</span>
              </div>
            </div>
          </div>
        </article>
      @empty
        <div class="col-span-full text-center py-16">
          <div class="text-gray-400 mb-4">
            <i class="fas fa-newspaper text-6xl"></i>
          </div>
          <h3 class="text-2xl font-semibold text-gray-600 mb-2">Belum Ada Artikel</h3>
          <p class="text-gray-500">Artikel kesehatan akan segera hadir untuk Anda.</p>
        </div>
      @endforelse
    </div>

    <!-- Pagination -->
    @if(method_exists($posts, 'links'))
      <div class="mt-12 flex justify-center">
        {{ $posts->links() }}
      </div>
    @endif
  </div>
</section>


    <!-- Newsletter Section -->
    <section class="bg-pink-50 py-16">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
          Dapatkan <span class="text-pink-500">Tips Kesehatan</span> Terbaru
        </h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
          Berlangganan newsletter kami untuk mendapatkan artikel kesehatan, tips hidup sehat, dan informasi medis terpercaya langsung di email Anda.
        </p>
        <form class="max-w-md mx-auto flex gap-4">
          <input type="email"
                 placeholder="Masukkan email Anda"
                 class="flex-1 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200">
          <button type="submit"
                  class="bg-pink-500 text-white px-8 py-3 rounded-full hover:bg-pink-600 transition-colors font-medium">
            Berlangganan
          </button>
        </form>
      </div>
    </section>
  </main>




  @include('layouts.footer')
