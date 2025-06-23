<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .hero-gradient {
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .service-card:hover .service-icon {
            transform: scale(1.1);
            color: #3b82f6;
        }
        .testimonial-card:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .smooth-transition {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        @if($settings['site_logo'])
                            <img class="h-8 w-auto" src="{{ $settings['site_logo'] }}" alt="{{ $settings['site_name'] }}">
                        @endif
                        <span class="ml-2 text-xl font-bold text-gray-900">{{ $settings['site_name'] }}</span>
                    </a>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="/" class="text-blue-600 border-blue-500 px-3 py-2 text-sm font-medium">Home</a>
                    <a href="/about" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium">About</a>
                    <a href="/services" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium">Services</a>
                    <a href="/blog" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium">Blog</a>
                    <a href="/contact" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium">Contact</a>
                    <div class="relative">
                        <input type="text" id="search-input" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                        <div id="search-results" class="absolute hidden w-full mt-1 bg-white rounded-md shadow-lg z-10 max-h-96 overflow-auto"></div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="/" class="bg-blue-50 text-blue-600 block pl-3 pr-4 py-2 border-l-4 border-blue-500 text-base font-medium">Home</a>
                <a href="/about" class="text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">About</a>
                <a href="/services" class="text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Services</a>
                <a href="/blog" class="text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Blog</a>
                <a href="/contact" class="text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium">Contact</a>
                <div class="px-4 py-2">
                    <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 border rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-6 top-3 text-gray-400"></i>
                </div>
            </div>
        </div>
    </nav>
