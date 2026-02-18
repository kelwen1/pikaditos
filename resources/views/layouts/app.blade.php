<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pikaditos - Comida rápida con sabor casero. Menú, promociones y delivery.">
    <title>@yield('title', 'Pikaditos') — Comida rápida</title>
    {{-- Favicon temporal (P de Pikaditos). Cuando tengas el logo del negocio, reemplaza por: <link rel="icon" href="{{ asset('favicon.ico') }}"> --}}
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' fill='%235c4033' rx='4'/%3E%3Ctext x='16' y='22' font-size='18' text-anchor='middle' fill='%23d4af37' font-family='Georgia' font-weight='bold'%3EP%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --wood-dark: #3d2914;
            --wood: #5c4033;
            --wood-light: #8b6914;
            --wood-bg: #f5ebe0;
            --gold: #b8860b;
            --gold-light: #d4af37;
            --gold-pale: #f4e4bc;
            --cream: #faf6f0;
            --text: #2c1810;
            --text-muted: #6b5344;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Source Sans 3', sans-serif;
            color: var(--text);
            background: linear-gradient(180deg, #fdfbf8 0%, var(--cream) 100%);
            line-height: 1.6;
        }
        h1, h2, h3, .font-display { font-family: 'Cormorant Garamond', serif; }

        /* Nav */
        .site-nav {
            background: linear-gradient(180deg, #352510 0%, var(--wood-dark) 100%);
            color: var(--gold-pale);
            padding: 0.75rem 1.5rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 16px rgba(61,41,20,0.25);
            border-bottom: 1px solid rgba(212,175,55,0.15);
        }
        .nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--gold-light);
            text-decoration: none;
            letter-spacing: 0.04em;
            transition: color 0.25s ease;
        }
        .logo:hover { color: var(--gold-pale); text-shadow: 0 0 20px rgba(212,175,55,0.3); }
        .nav-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }
        .nav-links a {
            color: var(--gold-pale);
            text-decoration: none;
            font-weight: 500;
            padding: 0.35rem 0.5rem;
            border-bottom: 2px solid transparent;
            transition: border-color 0.25s ease, color 0.25s ease;
        }
        .nav-links a:hover,
        .nav-links a.active { border-bottom-color: var(--gold); color: #fff; }

        /* Botones */
        .btn {
            display: inline-block;
            padding: 0.65rem 1.5rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            letter-spacing: 0.02em;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--gold) 0%, var(--wood-light) 100%);
            color: var(--wood-dark);
            box-shadow: 0 2px 8px rgba(184,134,11,0.2);
        }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 18px rgba(184,134,11,0.35); }
        .btn-outline {
            border: 2px solid var(--gold);
            color: var(--wood-dark);
        }
        .btn-outline:hover { background: var(--gold-pale); }

        /* Footer */
        .site-footer {
            background: linear-gradient(180deg, var(--wood-dark) 0%, #2a1c0e 100%);
            color: var(--gold-pale);
            padding: 2.5rem 1.5rem 1.5rem;
            margin-top: 4rem;
            border-top: 1px solid rgba(212,175,55,0.12);
        }
        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .footer-inner h4 {
            font-family: 'Cormorant Garamond', serif;
            color: var(--gold-light);
            margin-bottom: 0.75rem;
            font-size: 1.1rem;
        }
        .site-footer a { color: var(--gold-pale); text-decoration: none; }
        .site-footer a:hover { text-decoration: underline; color: #fff; }
        .footer-bottom {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(212,175,55,0.2);
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* Utilidades */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
        .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.25rem;
            color: var(--wood-dark);
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 48px;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), var(--gold-light));
            margin: 0.75rem auto 0;
            border-radius: 2px;
        }
        .section-title span { color: var(--gold); }

        /* WhatsApp flotante */
        .float-wa {
            position: fixed;
            width: 56px;
            height: 56px;
            bottom: 24px;
            right: 24px;
            background: #25d366;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
            z-index: 99;
            text-decoration: none;
            transition: transform 0.2s;
        }
        .float-wa:hover { transform: scale(1.08); }
        .float-wa svg { width: 28px; height: 28px; }

        /* Responsive: tablet */
        @media (max-width: 768px) {
            .nav-inner { padding: 0.5rem 1rem; }
            .logo { font-size: 1.5rem; }
            .nav-links { gap: 1rem; }
            .nav-links a { padding: 0.5rem; font-size: 0.95rem; }
            .container { padding: 0 1.25rem; }
            .site-footer { padding: 2rem 1.25rem 1.25rem; margin-top: 3rem; }
            .footer-inner { gap: 1.5rem; margin-bottom: 1.5rem; }
            .section-title { font-size: 1.9rem; margin-bottom: 1.5rem; }
        }

        /* Responsive: móvil */
        @media (max-width: 480px) {
            .nav-inner { flex-direction: column; align-items: center; text-align: center; }
            .nav-links { justify-content: center; }
            .nav-links a { min-height: 44px; display: inline-flex; align-items: center; justify-content: center; }
            .container { padding: 0 1rem; }
            .float-wa { width: 50px; height: 50px; bottom: 20px; right: 20px; }
            .float-wa svg { width: 26px; height: 26px; }
        }
    </style>
    @stack('styles')
</head>
<body>
    <header class="site-nav">
        <nav class="nav-inner">
            <a href="{{ route('inicio') }}" class="logo">Pikaditos</a>
            <ul class="nav-links">
                <li><a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a></li>
                <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menú</a></li>
                <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div>
                <h4>Pikaditos</h4>
                <p>Comida rápida con sabor casero.</p>
            </div>
            <div>
                <h4>Horarios</h4>
                <p>Lun – Vie: 4:00 PM – 12:00 AM</p>
                <p>Sáb - Dom: 3:00 PM – 12:00 AM</p>
            </div>
            <div>
                <h4>Pedidos</h4>
                <p><a href="https://wa.me/573172479723" target="_blank" rel="noopener">WhatsApp</a> — Escríbenos para ordenar</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; {{ date('Y') }} Pikaditos. Todos los derechos reservados.
        </div>
    </footer>

    <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quisiera%20hacer%20un%20pedido" class="float-wa" target="_blank" rel="noopener" aria-label="WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z"/></svg>
    </a>

    @stack('scripts')
</body>
</html>
