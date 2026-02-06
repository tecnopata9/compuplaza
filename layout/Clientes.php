<section
    class="min-h-screen flex items-center py-24 lg:py-32 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
    
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(245, 158, 11, 0.3) 1px, transparent 0); background-size: 60px 60px;"></div>
    </div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative w-full">

        <div class="py-10 overflow-hidden"
            x-data="{ 
                logos: [
                    { name: 'Microsoft', url: 'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg' },
                    { name: 'Google', url: 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg' },
                    { name: 'Amazon', url: 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg' },
                    { name: 'Apple', url: 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg' },
                    { name: 'Meta', url: 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg' },
                    { name: 'Tesla', url: 'https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg' },
                    { name: 'Netflix', url: 'https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg' },
                    { name: 'Adobe', url: 'https://upload.wikimedia.org/wikipedia/commons/d/d3/Adobe_Corporate_logo.svg' },
                    { name: 'Slack', url: 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Slack_icon_2019.svg' },
                    { name: 'Spotify', url: 'https://upload.wikimedia.org/wikipedia/commons/2/26/Spotify_logo_with_text.svg' },
                    { name: 'Airbnb', url: 'https://upload.wikimedia.org/wikipedia/commons/6/69/Airbnb_Logo_Bélo.svg' },
                    { name: 'Uber', url: 'https://upload.wikimedia.org/wikipedia/commons/c/cc/Uber_logo_2018.svg' }
                ] 
            }">
            <p class="text-center text-slate-500 text-sm mb-10 tracking-widest uppercase font-medium">
                Clientes que confían en nosotros
            </p>
            <div class="relative flex overflow-hidden">
                <div class="flex whitespace-nowrap animate-infinite-scroll-reverse group py-4">
                    <div class="flex items-center justify-around gap-16 px-8">
                        <template x-for="logo in logos">
                            <img :src="logo.url" :alt="logo.name" class="h-8 w-auto max-w-[120px] object-contain brightness-0 invert opacity-40 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer">
                        </template>
                    </div>
                    <div class="flex items-center justify-around gap-16 px-8" aria-hidden="true">
                        <template x-for="logo in logos">
                            <img :src="logo.url" :alt="logo.name" class="h-8 w-auto max-w-[120px] object-contain brightness-0 invert opacity-40 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer">
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16 border-t border-white/10 overflow-hidden"
            x-data="{ logos: [ /* Mismo array de logos */
                { name: 'Microsoft', url: 'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg' },
                { name: 'Google', url: 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg' },
                { name: 'Amazon', url: 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg' },
                { name: 'Apple', url: 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg' },
                { name: 'Meta', url: 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg' },
                { name: 'Tesla', url: 'https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg' },
                { name: 'Netflix', url: 'https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg' },
                { name: 'Adobe', url: 'https://upload.wikimedia.org/wikipedia/commons/d/d3/Adobe_Corporate_logo.svg' },
                { name: 'Slack', url: 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Slack_icon_2019.svg' },
                { name: 'Spotify', url: 'https://upload.wikimedia.org/wikipedia/commons/2/26/Spotify_logo_with_text.svg' },
                { name: 'Airbnb', url: 'https://upload.wikimedia.org/wikipedia/commons/6/69/Airbnb_Logo_Bélo.svg' },
                { name: 'Uber', url: 'https://upload.wikimedia.org/wikipedia/commons/c/cc/Uber_logo_2018.svg' }
            ]}">
            <p class="text-center text-slate-500 text-sm mb-10 tracking-widest uppercase font-medium">
                Marcas que trabajamos
            </p>
            <div class="relative flex overflow-hidden">
                <div class="flex whitespace-nowrap animate-infinite-scroll group py-4">
                    <div class="flex items-center justify-around gap-16 px-8">
                        <template x-for="logo in logos">
                            <img :src="logo.url" :alt="logo.name" class="h-8 w-auto max-w-[120px] object-contain brightness-0 invert opacity-40 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer">
                        </template>
                    </div>
                    <div class="flex items-center justify-around gap-16 px-8" aria-hidden="true">
                        <template x-for="logo in logos">
                            <img :src="logo.url" :alt="logo.name" class="h-8 w-auto max-w-[120px] object-contain brightness-0 invert opacity-40 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer">
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @keyframes infinite-scroll {
                from { transform: translateX(0); }
                to { transform: translateX(-50%); }
            }
            @keyframes infinite-scroll-reverse {
                from { transform: translateX(-50%); }
                to { transform: translateX(0); }
            }
            .animate-infinite-scroll {
                animation: infinite-scroll 35s linear infinite;
                width: max-content;
            }
            .animate-infinite-scroll-reverse {
                animation: infinite-scroll-reverse 35s linear infinite;
                width: max-content;
            }
            .animate-infinite-scroll:hover,
            .animate-infinite-scroll-reverse:hover {
                animation-play-state: paused;
            }
        </style>
    </div>
</section>