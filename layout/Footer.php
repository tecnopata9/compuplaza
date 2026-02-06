<footer x-data="{ 
    currentYear: new Date().getFullYear(),
    scrollToSection(href) {
        if (href.startsWith('#')) {
            const el = document.querySelector(href);
            if (el) el.scrollIntoView({ behavior: 'smooth' });
        }
    }
}" class="bg-slate-950 relative overflow-hidden text-slate-400">

    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-[800px] h-[400px] bg-gradient-to-b from-amber-500/5 to-transparent rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
        <div class="py-16 lg:py-20">

            <div class="grid lg:grid-cols-5 gap-12">

                <div class="lg:col-span-2">
                    <div class="mb-8">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="img/logoblanco.webp" alt="Compuplaza Corporativo Logo" class="h-12 w-auto object-contain">
                        </div>
                        <p class="text-slate-400 leading-relaxed mb-8 max-w-sm">
                            Transformamos empresas a través de soluciones innovadoras y estrategias personalizadas. Más de 15 años impulsando el éxito empresarial.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3 group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-0.5 text-amber-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="flex flex-col text-sm leading-tight">
                                    <span>Mza. C Lote. 12B Urb. San Jose de California,</span>
                                    <span>Victor Larco Herrera - Trujillo - La Libertad</span>
                                </div>
                            </div>
                            <a href="tel:+51123456789" class="flex items-center gap-3 hover:text-amber-400 transition-colors text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                +51 123456789
                            </a>
                            <a href="mailto:contacto@compuplaza.net.pe" class="flex items-center gap-3 hover:text-amber-400 transition-colors text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                contacto@compuplaza.net.pe
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 flex flex-col md:flex-row justify-between gap-10">

                    <div class="flex-none">
                        <h4 class="text-white font-semibold mb-6 uppercase text-xs tracking-[0.2em]">Empresa</h4>
                        <ul class="space-y-4">
                            <li><button @click="scrollToSection('#about')" class="hover:text-amber-400 transition-all text-sm text-left">Sobre Nosotros</button></li>
                            <li><button @click="scrollToSection('#team')" class="hover:text-amber-400 transition-all text-sm text-left">Nuestro Equipo</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left">Carreras</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left">Noticias</button></li>
                            <li><button @click="scrollToSection('#contact')" class="hover:text-amber-400 transition-all text-sm text-left">Contacto</button></li>
                        </ul>
                    </div>

                    <div class="flex-grow max-w-md">
                        <h4 class="text-white font-semibold mb-6 uppercase text-xs tracking-[0.2em]">Servicios</h4>
                        <ul class="space-y-4">
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Infraestructura y Servicio de TI">Infraestructura y Servicio de TI</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Seguridad y Videovigilancia">Seguridad y Videovigilancia</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Redes y Telecomunicaciones">Redes y Telecomunicaciones</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Arrendamiento y Outsourcing de TI">Arrendamiento y Outsourcing de TI</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Aire Acondicionado y Climatización">Aire Acondicionado y Climatización</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Protección Eléctrica">Protección Eléctrica</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Soluciones Audiovisuales">Soluciones Audiovisuales</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Suministros y Papelería">Suministros y Papelería</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm text-left block w-full truncate" title="Equipamiento de Oficinas">Equipamiento de Oficinas</button></li>
                        </ul>
                    </div>

                    <div class="flex-none text-left md:text-right">
                        <h4 class="text-white font-semibold mb-6 uppercase text-xs tracking-[0.2em]">Legal</h4>
                        <ul class="space-y-4">
                            <li><button class="hover:text-amber-400 transition-all text-sm block md:text-right whitespace-nowrap">Términos de Servicio</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm block md:text-right whitespace-nowrap">Política de Privacidad</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm block md:text-right whitespace-nowrap">Cookies</button></li>
                            <li><button class="hover:text-amber-400 transition-all text-sm block md:text-right whitespace-nowrap">Aviso Legal</button></li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="py-12 border-t border-slate-800/50">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div>
                        <h4 class="text-white font-semibold text-lg mb-2 text-left">Suscríbete a nuestro newsletter</h4>
                        <p class="text-slate-500 text-sm text-left">Recibe las últimas noticias y promociones que tenemos para ti.</p>
                    </div>
                    <form class="flex gap-3 w-full md:w-auto">
                        <input type="email" placeholder="tu@email.com" class="flex-1 md:w-64 h-12 px-5 rounded-xl bg-slate-900 border border-slate-800 text-white focus:border-amber-500 outline-none transition-colors">
                        <button class="h-12 px-6 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-slate-900 font-bold hover:brightness-110 shadow-lg shadow-amber-500/20 transition-all">
                            Suscribirse
                        </button>
                    </form>
                </div>
            </div>

            <div class="py-8 border-t border-slate-800/50 flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-slate-500 text-sm">
                    © <span x-text="currentYear"></span> Hecho por TecnoPatas en Perú ❤️
                </p>

                <div class="flex items-center gap-4">
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-amber-400 hover:border-amber-500/30 transition-all group">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-amber-400 hover:border-amber-500/30 transition-all group">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-amber-400 hover:border-amber-500/30 transition-all group">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31 0 2.591.215 3.794.611V5.64a5.13 5.13 0 0 1-2.027-.412v10.3c0 2.441-1.979 4.42-4.42 4.42s-4.42-1.979-4.42-4.42c0-2.441 1.979-4.42 4.42-4.42.507 0 .991.085 1.44.242V6.362a9.426 9.426 0 0 0-5.234 8.528c0 5.214 4.227 9.44 9.44 9.44s9.44-4.226 9.44-9.44V0h-3.794c0 2.405-1.275 4.515-3.189 5.723V.02h-3.44z" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-amber-400 hover:border-amber-500/30 transition-all group">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.63 1.438h.004c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>