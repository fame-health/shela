<!-- resources/views/layouts/nav.blade.php -->
<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50" id="header">
  <div class="container mx-auto flex items-center justify-between py-4 px-6">
    <a href="/" class="text-xl font-bold text-primary">Edukasi<span class="text-gray-700">Sehat</span></a>

    <!-- Hamburger -->
    <button id="hamburger" class="hamburger block md:hidden focus:outline-none" aria-label="Toggle menu">
      <span class="line1 block w-6 h-0.5 bg-black mb-1 transition-transform"></span>
      <span class="line2 block w-6 h-0.5 bg-black mb-1 transition-opacity"></span>
      <span class="line3 block w-6 h-0.5 bg-black transition-transform"></span>
    </button>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-8 text-gray-700 font-semibold">
      <li><a href="#home" class="hover:text-primary transition-colors">Beranda</a></li>
      <li><a href="#education" class="hover:text-primary transition-colors">Edukasi</a></li>
      <li><a href="#solutions" class="hover:text-primary transition-colors">Solusi</a></li>
      <li><a href="#faq" class="hover:text-primary transition-colors">FAQ</a></li>
      <li><a href="#contact" class="hover:text-primary transition-colors">Kontak</a></li>
    </ul>
  </div>

  <!-- Mobile Menu -->
  <nav id="mobileMenu" class="mobile-menu fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden z-40">
    <ul class="flex flex-col mt-20 space-y-6 px-6 text-gray-700 font-semibold">
      <li><a href="#home" class="hover:text-primary transition-colors">Beranda</a></li>
      <li><a href="#education" class="hover:text-primary transition-colors">Edukasi</a></li>
      <li><a href="#solutions" class="hover:text-primary transition-colors">Solusi</a></li>
      <li><a href="#faq" class="hover:text-primary transition-colors">FAQ</a></li>
      <li><a href="#contact" class="hover:text-primary transition-colors">Kontak</a></li>
    </ul>
  </nav>

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
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const hamburger = document.getElementById('hamburger');
      const mobileMenu = document.getElementById('mobileMenu');

      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
      });

      // Klik di luar menu untuk close mobile menu
      document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
          hamburger.classList.remove('active');
          mobileMenu.classList.remove('active');
        }
      });
    });
  </script>
</nav>
