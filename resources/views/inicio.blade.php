@extends('layouts.app')

@section('title', 'Inicio')

@push('styles')
<style>
    .hero {
        background: linear-gradient(120deg, rgba(74,48,32,0.88) 0%, rgba(125,94,69,0.78) 50%), url('https://images.unsplash.com/photo-1550547660-d9450f859349?w=1600&q=80') center/cover no-repeat;
        min-height: 75vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--cream);
        padding: 3rem 1.5rem;
    }
    .hero h1 { font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 700; margin-bottom: 0.75rem; letter-spacing: 0.02em; text-shadow: 0 2px 20px rgba(0,0,0,0.2); }
    .hero .gold { color: var(--gold-light); }
    .hero p { font-size: 1.15rem; margin-bottom: 2rem; max-width: 520px; margin-left: auto; margin-right: auto; opacity: 0.95; }
    .hero p::after { content: ''; display: block; width: 40px; height: 2px; background: rgba(212,175,55,0.6); margin: 1.25rem auto 0; }
    .hero .btn { margin: 0 0.4rem; }

    .section { padding: 4rem 0; }
    .section-alt { background: var(--wood-bg); }
    .destacados-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    .destacado-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(74,48,32,0.08);
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        border: 1px solid transparent;
    }
    .destacado-card:hover { transform: translateY(-4px); box-shadow: 0 10px 32px rgba(74,48,32,0.12); border-color: rgba(212,168,74,0.3); }
    .destacado-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .destacado-card .body { padding: 1.5rem; }
    .destacado-card h3 { font-family: 'Cormorant Garamond', serif; color: var(--wood-dark); margin-bottom: 0.5rem; font-size: 1.35rem; }
    .destacado-card p { color: var(--text-muted); font-size: 0.95rem; }
    .destacado-card .precio { color: var(--gold); font-weight: 700; margin-top: 0.75rem; }

    .cta-block {
        background: linear-gradient(135deg, var(--wood-dark) 0%, var(--wood) 100%);
        color: var(--gold-pale);
        text-align: center;
        padding: 3.5rem 1.5rem;
        position: relative;
    }
    .cta-block::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, rgba(212,175,55,0.3), transparent); }
    .cta-block h2 { font-size: 1.9rem; margin-bottom: 0.5rem; }
    .cta-block p { margin-bottom: 1.5rem; opacity: 0.9; }
    .cta-block .btn-primary { background: linear-gradient(135deg, var(--gold-light) 0%, var(--gold) 100%); color: var(--wood-dark); }

    @media (max-width: 768px) {
        .hero { min-height: 65vh; padding: 2.5rem 1.25rem; }
        .hero p { font-size: 1.05rem; }
        .hero .btn { margin: 0.35rem; }
        .section { padding: 3rem 0; }
        .destacados-grid { gap: 1.5rem; margin-top: 1.5rem; }
        .destacado-card .body { padding: 1.25rem; }
        .cta-block { padding: 2.5rem 1.25rem; }
        .cta-block h2 { font-size: 1.6rem; }
    }
    @media (max-width: 480px) {
        .hero { min-height: 60vh; padding: 2rem 1rem; }
        .hero h1 { font-size: 1.85rem; }
        .hero p { font-size: 1rem; margin-bottom: 1.5rem; }
        .hero .btn { display: inline-block; margin: 0.4rem 0.25rem; min-height: 44px; line-height: 44px; padding-top: 0; padding-bottom: 0; }
        .section { padding: 2.5rem 0; }
        .destacados-grid { grid-template-columns: 1fr; gap: 1.25rem; }
        .section-title { font-size: 1.65rem; }
        .cta-block { padding: 2rem 1rem; }
        .cta-block h2 { font-size: 1.45rem; }
        .cta-block .btn-primary { min-height: 44px; padding: 0.65rem 1.25rem; }
    }
</style>
@endpush

@section('content')
    <section class="hero">
        <div>
            <h1>Bienvenidos a <span class="gold">Pikaditos</span></h1>
            <p>Comida rápida con sabor casero. Ingredientes frescos, preparaciones que nos distinguen y un servicio que te hace sentir en casa.</p>
            <a href="{{ route('menu') }}" class="btn btn-primary">Ver menú</a>
            <a href="{{ route('contacto') }}" class="btn btn-outline" style="color:var(--gold-pale);border-color:var(--gold-light);">Contacto</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">Lo más <span>pedido</span></h2>
            <div class="destacados-grid">
                <article class="destacado-card">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600&q=80" alt="Hamburguesa clásica">
                    <div class="body">
                        <h3>Hamburguesa Pikaditos</h3>
                        <p>Carne 100% res, queso, lechuga, tomate y nuestra salsa especial.</p>
                        <p class="precio">$18.000</p>
                    </div>
                </article>
                <article class="destacado-card">
                    <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=600&q=80" alt="Sándwich">
                    <div class="body">
                        <h3>Sándwich del día</h3>
                        <p>Pollo o carne, tocineta, queso y pan tostado. Sencillo y delicioso.</p>
                        <p class="precio">$15.500</p>
                    </div>
                </article>
                <article class="destacado-card">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=80" alt="Ensalada">
                    <div class="body">
                        <h3>Ensalada fresca</h3>
                        <p>Mix de verduras, pollo grillé y aderezo a elección. Opción ligera y sabrosa.</p>
                        <p class="precio">$14.000</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container" style="text-align: center;">
            <h2 class="section-title">¿Por qué <span>Pikaditos</span>?</h2>
            <div class="destacados-grid" style="max-width: 900px; margin: 0 auto;">
                <div style="text-align: center;">
                    <p style="font-size: 2rem; margin-bottom: 0.5rem;">🍔</p>
                    <h3 style="font-family: 'Cormorant Garamond', serif; color: var(--wood-dark);">Rápido y fresco</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">Preparamos tu pedido al momento, con ingredientes de calidad.</p>
                </div>
                <div style="text-align: center;">
                    <p style="font-size: 2rem; margin-bottom: 0.5rem;">🏠</p>
                    <h3 style="font-family: 'Cormorant Garamond', serif; color: var(--wood-dark);">Delivery</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">Llevamos tu comida hasta la puerta de tu casa.</p>
                </div>
                <div style="text-align: center;">
                    <p style="font-size: 2rem; margin-bottom: 0.5rem;">💬</p>
                    <h3 style="font-family: 'Cormorant Garamond', serif; color: var(--wood-dark);">Pedidos por WhatsApp</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem;">Ordena fácil por WhatsApp y listamos tu pedido.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-block">
        <div class="container">
            <h2>¿Listo para pedir?</h2>
            <p>Revisa nuestro menú y escríbenos por WhatsApp para tu pedido.</p>
            <a href="{{ route('menu') }}" class="btn btn-primary">Ver menú completo</a>
        </div>
    </section>
@endsection
