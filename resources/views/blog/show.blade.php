<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $post->title }}</title>
  <meta name="description" content="{{ Str::limit(strip_tags($post->content), 150) }}" />
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
    .hamburger.active .line1 {
      transform: rotate(-45deg) translate(-5px, 6px);
    }
    .hamburger.active .line2 {
      opacity: 0;
    }
    .hamburger.active .line3 {
      transform: rotate(45deg) translate(-5px, -6px);
    }

    /* Article Content Styles */
    .article-content {
      @apply text-gray-800 leading-relaxed;
    }

    /* Filament RichEditor Base Styles */
    .article-content .ProseMirror {
      @apply outline-none;
    }

    .article-content .ProseMirror p.is-empty::before {
      content: '';
    }

    .article-content .ProseMirror-focused {
      @apply outline-none;
    }

    /* Heading Styles */
    .article-content h1 {
      @apply text-3xl font-bold text-gray-900 mt-8 mb-4 leading-tight;
    }

    .article-content h2 {
      @apply text-2xl font-bold text-gray-900 mt-6 mb-3 leading-tight;
    }

    .article-content h3 {
      @apply text-xl font-semibold text-gray-900 mt-5 mb-3 leading-tight;
    }

    .article-content h4 {
      @apply text-lg font-semibold text-gray-800 mt-4 mb-2;
    }

    .article-content h5 {
      @apply text-base font-semibold text-gray-800 mt-4 mb-2;
    }

    .article-content h6 {
      @apply text-sm font-semibold text-gray-700 mt-3 mb-2;
    }

    /* Paragraph Styles */
    .article-content p {
      @apply mb-4 text-base leading-relaxed text-gray-700;
    }

    .article-content p:last-child {
      @apply mb-0;
    }

    /* List Styles */
    .article-content ul {
      @apply list-disc list-inside mb-4 pl-4 space-y-2;
    }

    .article-content ol {
      @apply list-decimal list-inside mb-4 pl-4 space-y-2;
    }

    .article-content li {
      @apply text-gray-700 leading-relaxed;
    }

    .article-content ul ul,
    .article-content ol ol {
      @apply mt-2 mb-0 ml-4;
    }

    /* Link Styles */
    .article-content a {
      @apply text-pink-500 hover:text-pink-600 underline transition-colors duration-200;
    }

    /* Quote Styles */
    .article-content blockquote {
      @apply border-l-4 border-pink-500 pl-4 italic text-gray-600 my-6 bg-pink-50 py-3 rounded-r-lg;
    }

    /* Code Styles */
    .article-content code {
      @apply bg-pink-50 text-pink-800 px-2 py-1 rounded text-sm font-mono border border-pink-200;
    }

    .article-content pre {
      @apply bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto mb-4;
    }

    .article-content pre code {
      @apply bg-transparent text-gray-100 p-0;
    }

    /* Image Styles */
    .article-content img {
      @apply max-w-full h-auto rounded-lg shadow-md my-6 mx-auto;
    }

    /* Table Styles */
    .article-content table {
      @apply w-full border-collapse border border-gray-300 my-6 rounded-lg overflow-hidden shadow-sm;
    }

    .article-content th {
      @apply bg-pink-50 border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800;
    }

    .article-content td {
      @apply border border-gray-300 px-4 py-3 text-gray-700;
    }

    .article-content tr:nth-child(even) {
      @apply bg-gray-50;
    }

    /* Horizontal Rule */
    .article-content hr {
      @apply border-0 border-t-2 border-pink-200 my-8;
    }

    /* Strong and Emphasis */
    .article-content strong {
      @apply font-bold text-gray-900;
    }

    .article-content em {
      @apply italic;
    }

    /* Text Alignment Classes */
    .article-content .text-left {
      @apply text-left;
    }

    .article-content .text-center {
      @apply text-center;
    }

    .article-content .text-right {
      @apply text-right;
    }

    .article-content .text-justify {
      @apply text-justify;
    }

    /* Text Editor Specific Classes */
    .article-content .ql-align-left {
      @apply text-left;
    }

    .article-content .ql-align-center {
      @apply text-center;
    }

    .article-content .ql-align-right {
      @apply text-right;
    }

    .article-content .ql-align-justify {
      @apply text-justify;
    }

    /* Filament RichEditor Specific Classes */
    .article-content .has-focus {
      @apply outline-none;
    }

    .article-content .ProseMirror ul[data-type="taskList"] {
      @apply list-none pl-0;
    }

    .article-content .ProseMirror ul[data-type="taskList"] li {
      @apply flex items-start gap-2 mb-2;
    }

    .article-content .ProseMirror ul[data-type="taskList"] li input[type="checkbox"] {
      @apply mt-1;
    }

    .article-content .ProseMirror .is-empty::before {
      content: '';
    }

    /* Filament RichEditor Toolbar Styles */
    .article-content .tiptap-toolbar {
      @apply hidden;
    }

    /* Typography Enhancements */
    .article-content .lead {
      @apply text-xl text-gray-600 font-light leading-relaxed mb-6;
    }

    .article-content .small {
      @apply text-sm text-gray-600;
    }

    .article-content .text-muted {
      @apply text-gray-500;
    }

    /* Color Classes */
    .article-content .text-primary {
      @apply text-pink-600;
    }

    .article-content .text-secondary {
      @apply text-gray-600;
    }

    .article-content .text-success {
      @apply text-green-600;
    }

    .article-content .text-danger {
      @apply text-red-600;
    }

    .article-content .text-warning {
      @apply text-yellow-600;
    }

    .article-content .text-info {
      @apply text-blue-600;
    }

    /* Background Classes */
    .article-content .bg-primary {
      @apply bg-pink-100 text-pink-800 px-2 py-1 rounded;
    }

    .article-content .bg-secondary {
      @apply bg-gray-100 text-gray-800 px-2 py-1 rounded;
    }

    .article-content .bg-success {
      @apply bg-green-100 text-green-800 px-2 py-1 rounded;
    }

    .article-content .bg-danger {
      @apply bg-red-100 text-red-800 px-2 py-1 rounded;
    }

    .article-content .bg-warning {
      @apply bg-yellow-100 text-yellow-800 px-2 py-1 rounded;
    }

    .article-content .bg-info {
      @apply bg-blue-100 text-blue-800 px-2 py-1 rounded;
    }

    /* Responsive Typography */
    @media (max-width: 640px) {
      .article-content {
        @apply text-sm;
      }

      .article-content h1 {
        @apply text-2xl;
      }

      .article-content h2 {
        @apply text-xl;
      }

      .article-content h3 {
        @apply text-lg;
      }
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
        <a href="/" class="text-gray-700 hover:text-pink-500 transition-colors font-medium">Edukasi</a>
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
          <li><a href="/blog" class="block text-xl text-gray-700 hover:text-pink-500 transition-colors py-2 border-b border-gray-100">Blog</a></li>
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
      <div class="max-w-4xl mx-auto">
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
                <span class="text-pink-500 font-medium">Detail Artikel</span>
              </div>
            </li>
          </ol>
        </nav>

        <!-- Article -->
        <article class="max-w-4xl mx-auto px-6 py-8">
          <!-- Header Article -->
          <header class="mb-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
              {{ $post->title }}
            </h1>

            <!-- Meta Information -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-pink-100 text-pink-600">
                {{ $post->category->name ?? 'Tanpa Kategori' }}
              </span>
              <span class="flex items-center">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
                {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
              </span>
              @if($post->author)
                <span class="flex items-center">
                  <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                  {{ $post->author->name }}
                </span>
              @endif
            </div>
          </header>

          <!-- Featured Image -->
          @if($post->featured_image)
            <div class="mb-8">
              <img src="{{ $post->featured_image }}"
                   alt="{{ $post->title }}"
                   class="w-full h-auto rounded-xl shadow-lg object-cover max-h-96">
            </div>
          @endif

          <!-- Article Content -->
          <div class="article-content">
            {!! $post->content !!}
          </div>
        </article>

        <!-- Back to Blog Link -->
        <div class="mt-12 pt-8 border-t border-gray-200">
          <a href="{{ route('blog.index') }}" class="inline-flex items-center text-pink-500 hover:text-pink-600 transition-colors font-medium">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Blog
          </a>
        </div>
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
