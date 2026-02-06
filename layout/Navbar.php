<style>
    /* Replicamos la transición suave del scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Estilos personalizados para estados específicos */
    .nav-scrolled {
        background-color: rgba(15, 23, 42, 0.95);
        backdrop-filter: blur(12px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.2);
    }

    .mobile-menu-hidden {
        display: none;
        opacity: 0;
        height: 0;
    }

    .mobile-menu-visible {
        display: block;
        opacity: 1;
        height: auto;
    }
</style>

<nav id="main-nav" class="bg-slate-900 fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-transparent">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <div class="flex items-center gap-3 cursor-pointer hover:scale-105 transition-transform">
                <!-- <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-600 rounded-xl flex items-center justify-center"> -->
                <div class="w-10 h-10 bg-gradient-to-br from-white-400 to-amber-600 rounded-xl flex items-center justify-center">
                    <span class="text-slate-900 font-black text-xl"><img src="img/icono.ico" alt="" srcset=""></span>
                </div>
                <span class="text-white font-semibold text-xl tracking-tight">
                    CompuPlaza<span class="text-amber-400">Corporativo</span>
                </span>
            </div>

            <div class="hidden lg:flex items-center gap-1">
                <a href="#hero" class="relative px-5 py-2 text-sm font-medium text-slate-300 hover:text-white transition-colors group">
                    Inicio
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-500 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#about" class="relative px-5 py-2 text-sm font-medium text-slate-300 hover:text-white transition-colors group">
                    Nosotros
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-500 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#services" class="relative px-5 py-2 text-sm font-medium text-slate-300 hover:text-white transition-colors group">
                    Servicios
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-500 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#team" class="relative px-5 py-2 text-sm font-medium text-slate-300 hover:text-white transition-colors group">
                    Equipo
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-500 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#contact" class="relative px-5 py-2 text-sm font-medium text-slate-300 hover:text-white transition-colors group">
                    Contacto
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-500 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-4">
                <a href="#contact" class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-900 font-semibold px-6 py-2.5 rounded-full shadow-lg shadow-amber-500/25 hover:shadow-amber-500/40 transition-all duration-300">
                    Contáctanos
                </a>
            </div>

            <button id="menu-btn" class="lg:hidden text-white p-2 focus:outline-none">
                <i data-lucide="menu" id="menu-icon"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="mobile-menu-hidden lg:hidden bg-slate-900/98 backdrop-blur-xl border-t border-slate-800 transition-all duration-300">
        <div class="px-6 py-6 space-y-2">
            <a href="#hero" class="mobile-link block w-full text-left px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 rounded-xl transition-colors">Inicio</a>
            <a href="#about" class="mobile-link block w-full text-left px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 rounded-xl transition-colors">Nosotros</a>
            <a href="#services" class="mobile-link block w-full text-left px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 rounded-xl transition-colors">Servicios</a>
            <a href="#team" class="mobile-link block w-full text-left px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 rounded-xl transition-colors">Equipo</a>
            <a href="#contact" class="mobile-link block w-full text-left px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 rounded-xl transition-colors">Contacto</a>
            <a href="#contact" class="mobile-link block w-full mt-4 text-center bg-gradient-to-r from-amber-500 to-amber-600 text-slate-900 font-semibold py-3 rounded-full">Contáctanos</a>
        </div>
    </div>
</nav>

<!-- <div style="height: 2000px; padding-top: 100px;" class="px-8 text-slate-500">
    <section id="hero">
        <h2>Sección Inicio</h2>
    </section>
</div> -->

<script>
    // Inicializar iconos de Lucide
    lucide.createIcons();

    const nav = document.getElementById('main-nav');
    const menuBtn = document.getElementById('menu-btn');
    const menuIcon = document.getElementById('menu-icon');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    // Lógica de Scroll (Cambio de color del Navbar)
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('nav-scrolled');
            nav.classList.remove('bg-transparent');
        } else {
            nav.classList.remove('nav-scrolled');
            nav.classList.add('bg-transparent');
        }
    });

    // Lógica de Menú Móvil (Toggle)
    function toggleMenu() {
        const isOpen = mobileMenu.classList.contains('mobile-menu-visible');

        if (isOpen) {
            mobileMenu.classList.replace('mobile-menu-visible', 'mobile-menu-hidden');
            menuIcon.setAttribute('data-lucide', 'menu');
        } else {
            mobileMenu.classList.replace('mobile-menu-hidden', 'mobile-menu-visible');
            menuIcon.setAttribute('data-lucide', 'x');
        }
        lucide.createIcons(); // Re-renderizar el icono
    }

    menuBtn.addEventListener('click', toggleMenu);

    // Cerrar menú al hacer clic en un link (móvil)
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.replace('mobile-menu-visible', 'mobile-menu-hidden');
            menuIcon.setAttribute('data-lucide', 'menu');
            lucide.createIcons();
        });
    });
</script>