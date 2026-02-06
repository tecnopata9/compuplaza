<style>
        @keyframes float {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.2); opacity: 0.5; }
        }
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0) translateX(-50%); }
            50% { transform: translateY(10px) translateX(-50%); }
        }
        .animate-float-1 { animation: float 8s infinite ease-in-out; }
        .animate-float-2 { animation: float 10s infinite ease-in-out reverse; }
        .indicator-bounce { animation: bounce-slow 2s infinite ease-in-out; }
        
        /* Grid Pattern */
        .grid-pattern {
            background-image: linear-gradient(rgba(245, 158, 11, 0.1) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(245, 158, 11, 0.1) 1px, transparent 1px);
            background-size: 100px 100px;
        }
</style>
 
<section id="hero" class="bg-slate-950 relative min-h-screen flex items-center justify-center overflow-hidden bg-slate-950">
        
        <div class="absolute inset-0">
            <img 
                src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=80"
                alt="Corporate Building"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/95 via-slate-900/90 to-slate-950/80"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
        </div>

        <div class="absolute inset-0 opacity-20 grid-pattern"></div>

        <div class="absolute top-1/4 left-10 w-72 h-72 bg-amber-500/10 rounded-full blur-3xl animate-float-1"></div>
        <div class="absolute bottom-1/4 right-10 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-float-2"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center">
            
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-500/10 border border-amber-500/20 mb-8 opacity-0 translate-y-4 transition-all duration-700 ease-out" id="badge">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                <span class="text-amber-400 text-sm font-medium">Innovación Empresarial desde 2010</span>
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white leading-tight mb-6 opacity-0 translate-y-8 transition-all duration-1000 delay-200" id="main-title">
                <span class="block">Transformamos</span>
                <span class="block mt-2">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500">Ideas</span>
                    en
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500">Éxito</span>
                </span>
            </h1>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-slate-400 mb-10 leading-relaxed opacity-0 transition-opacity duration-1000 delay-500" id="subtitle">
                Somos líderes en consultoría empresarial y soluciones innovadoras. 
                Impulsamos el crecimiento de tu empresa hacia nuevos horizontes.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 opacity-0 translate-y-4 transition-all duration-700 delay-700" id="cta">
                <button onclick="scrollToId('services')" class="group flex items-center bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-900 font-semibold px-8 py-4 text-lg rounded-full shadow-2xl shadow-amber-500/30 hover:shadow-amber-500/50 transition-all duration-300">
                    Nuestros Servicios
                    <i data-lucide="arrow-right" class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </button>
                
                <button class="group flex items-center border-2 border-slate-600 text-white hover:bg-white/5 px-8 py-4 text-lg rounded-full transition-all duration-300">
                    <i data-lucide="play" class="mr-2 w-5 h-5 fill-white"></i>
                    Ver Video
                </button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-20 pt-10 border-t border-slate-800/50 opacity-0 transition-opacity duration-1000 delay-1000" id="stats">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">15+</div>
                    <div class="text-sm text-slate-500 mt-1">Años de Experiencia</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">500+</div>
                    <div class="text-sm text-slate-500 mt-1">Proyectos Completados</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">200+</div>
                    <div class="text-sm text-slate-500 mt-1">Clientes Satisfechos</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-500">5+</div>
                    <div class="text-sm text-slate-500 mt-1">Certificaciones</div>
                </div>
            </div>
        </div>

        <button onclick="scrollToId('about')" class="absolute bottom-8 left-1/2 -translate-x-1/2 text-slate-400 hover:text-amber-400 transition-colors indicator-bounce">
            <i data-lucide="chevron-down" size="32"></i>
        </button>

    </section>

    <!-- <div id="about" class="h-screen bg-slate-900 flex items-center justify-center text-white">
        <h2 class="text-4xl">Sección Sobre Nosotros</h2>
    </div> -->

<script>
        // Inicializar Iconos
        lucide.createIcons();

        // Función de scroll suave
        function scrollToId(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Simulación de animaciones de entrada (Framer Motion replacement)
        window.addEventListener('DOMContentLoaded', () => {
            const ids = ['badge', 'main-title', 'subtitle', 'cta', 'stats'];
            ids.forEach(id => {
                const el = document.getElementById(id);
                el.classList.remove('opacity-0', 'translate-y-4', 'translate-y-8');
            });
        });
</script>