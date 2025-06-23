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
                © 2024 Lentera Remaja. Semua hak dilindungi. Dibuat dengan ❤️ untuk Indonesia.
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
            const preloader = document.getElementById('preloader');
            if(preloader) {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 300);
            }
        }, 1000);
    });

    // Header scroll effect & Back to Top button toggle
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        const backToTop = document.getElementById('backToTop');

        if (window.scrollY > 100) {
            header?.classList.add('backdrop-blur-md', 'bg-white/95', 'shadow-lg');
            backToTop?.classList.remove('opacity-0', 'invisible');
        } else {
            header?.classList.remove('backdrop-blur-md', 'bg-white/95', 'shadow-lg');
            backToTop?.classList.add('opacity-0', 'invisible');
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

    // Back to top button scroll behavior
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

    // Animation on scroll using IntersectionObserver
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

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuBtn = document.getElementById('close-menu');

    if(mobileMenuBtn && mobileMenu && closeMenuBtn) {
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
    }
</script>
