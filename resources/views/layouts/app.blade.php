<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pikaditos - Comida rápida con sabor casero. Pide por WhatsApp, delivery disponible.">
    <title>@yield('title', 'Pikaditos')</title>
    <link rel="icon" href="{{ asset('images/Favicon.png') }}?v={{ file_exists(public_path('images/Favicon.png')) ? filemtime(public_path('images/Favicon.png')) : time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        /* Paleta del logo: dorado metálico, negro, blanco */
                        'wood-dark': '#000000',
                        'wood': '#1a1a1a',
                        'wood-light': '#333333',
                        'wood-bg': '#fafafa',
                        'gold': '#d4af37',
                        'gold-light': '#e5c04d',
                        'gold-dark': '#a77d00',
                        'gold-pale': '#f8f0d8',
                        'cream': '#ffffff',
                        'ink': '#000000',
                        'muted': '#6b7280',
                    },
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        img.logo-pikaditos { background: transparent !important; object-fit: contain; }
        .logo-inicio { width: 54px; height: 54px; border-radius: 50%; overflow: hidden; flex-shrink: 0; }
        .logo-inicio img { width: 100%; height: 100%; object-fit: cover; }
    </style>
    @stack('styles')
</head>
<body class="font-sans antialiased text-ink bg-white">
    {{-- Nav --}}
    <header class="sticky top-0 z-50 bg-white border-b border-gold/40">
        <nav class="max-w-6xl mx-auto px-4 h-14 flex items-center justify-between">
            <a href="{{ route('inicio') }}" class="logo-inicio flex items-center justify-center">
                <img src="{{ asset('images/Logo.png') }}" alt="Pikaditos" class="logo-pikaditos">
            </a>
            <div class="flex items-center gap-4 sm:gap-8">
                <a href="{{ route('inicio') }}" class="text-sm font-medium text-muted hover:text-gold {{ request()->routeIs('inicio') ? 'text-gold' : '' }}">Inicio</a>
                <a href="{{ route('menu') }}" class="text-sm font-medium text-muted hover:text-gold {{ request()->routeIs('menu*') ? 'text-gold' : '' }}">Menú</a>
                <a href="{{ route('contacto') }}" class="text-sm font-medium text-muted hover:text-gold {{ request()->routeIs('contacto') ? 'text-gold' : '' }}">Contacto</a>
                <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20ordenar" class="text-sm font-semibold px-4 py-2 bg-[#25D366] text-white rounded-full hover:bg-[#20BD5A] transition-colors whitespace-nowrap" target="_blank" rel="noopener">Ordenar</a>
            </div>
        </nav>
    </header>

    <main>@yield('content')</main>

    {{-- Footer --}}
    <footer class="bg-black text-white py-8 mt-16">
        <div class="max-w-6xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <img src="{{ asset('images/Logo.png') }}" alt="Pikaditos" class="logo-pikaditos h-6 w-auto opacity-90">
            <div class="flex items-center gap-6 text-sm text-gray-300">
                <span>Lun–Vie 4pm–12am · Sáb–Dom 3pm–12am</span>
                <a href="https://wa.me/573172479723" class="text-[#25D366] hover:text-[#20BD5A]" target="_blank" rel="noopener">WhatsApp</a>
            </div>
            <span class="text-xs text-gray-500">© {{ date('Y') }} Pikaditos</span>
        </div>
    </footer>

    {{-- WhatsApp flotante --}}
    <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20ordenar" class="fixed bottom-5 right-5 w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-lg hover:scale-105 transition-transform z-50" target="_blank" rel="noopener" aria-label="WhatsApp">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 16 16"><path d="M13.6 2.3A7.9 7.9 0 0 0 8 0C3.6 0 .06 3.6.06 7.9c0 1.4.4 2.8 1 4L0 16l4.2-1.1a7.9 7.9 0 0 0 3.8 1h.004c4.4 0 7.9-3.6 7.9-7.9a7.9 7.9 0 0 0-2.3-5.6zM8 14.5a6.6 6.6 0 0 1-3.4-.9l-.2-.2-2.5.7.7-2.4-.2-.3a6.6 6.6 0 0 1-1-3.5c0-3.6 3-6.6 6.6-6.6a6.6 6.6 0 0 1 4.7 1.9 6.6 6.6 0 0 1 1.9 4.7c0 3.7-3 6.6-6.6 6.6z"/></svg>
    </a>

    @stack('scripts')
</body>
</html>
