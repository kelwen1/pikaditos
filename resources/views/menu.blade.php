@extends('layouts.app')

@section('title', 'Menú')

@push('styles')
<style>
    .menu-hero {
        background: linear-gradient(120deg, rgba(61,41,20,0.9) 0%, rgba(92,64,51,0.8) 100%), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1600&q=80') center/cover no-repeat;
        padding: 3rem 1.5rem;
        text-align: center;
        color: #faf6f0;
    }
    .menu-hero h1 { font-size: 2.5rem; margin-bottom: 0.5rem; }
    .menu-hero p { opacity: 0.9; }

    .menu-section { padding: 3rem 0; }
    .menu-section:nth-child(even) { background: var(--wood-bg); }
    .category-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.75rem;
        color: var(--wood-dark);
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--gold);
    }
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }
    .menu-card {
        display: flex;
        flex-direction: column;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(61,41,20,0.06);
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        border: 1px solid rgba(92,64,51,0.06);
    }
    .menu-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(61,41,20,0.1); border-color: rgba(212,175,55,0.2); }
    .menu-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        flex-shrink: 0;
    }
    .menu-card .body {
        display: flex;
        flex-direction: column;
        flex: 1;
        padding: 1.25rem;
        min-height: 0;
    }
    .menu-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; color: var(--wood-dark); margin-bottom: 0.35rem; flex-shrink: 0; }
    .menu-card .desc { font-size: 0.9rem; color: var(--text-muted); flex: 1; margin-bottom: 0.75rem; }
    .menu-card .foot { display: flex; justify-content: space-between; align-items: center; margin-top: auto; flex-shrink: 0; padding-top: 0.25rem; }
    .menu-card .price { font-weight: 700; color: var(--gold); }
    .menu-card .btn-pedir {
        background: linear-gradient(180deg, var(--wood-dark) 0%, var(--wood) 100%);
        color: var(--gold-pale);
        padding: 0.4rem 1rem;
        border-radius: 6px;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 600;
        transition: background 0.25s ease, box-shadow 0.25s ease;
    }
    .menu-card .btn-pedir:hover { background: var(--wood); box-shadow: 0 2px 10px rgba(61,41,20,0.25); }
    .menu-card .btn-pedir { min-height: 44px; display: inline-flex; align-items: center; }

    @media (max-width: 768px) {
        .menu-hero { padding: 2.5rem 1.25rem; }
        .menu-hero h1 { font-size: 2rem; }
        .menu-section { padding: 2.5rem 0; }
        .category-title { font-size: 1.5rem; margin-bottom: 1.25rem; }
        .menu-grid { gap: 1.25rem; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); }
    }
    @media (max-width: 480px) {
        .menu-hero { padding: 2rem 1rem; }
        .menu-hero h1 { font-size: 1.75rem; }
        .menu-hero p { font-size: 0.95rem; }
        .menu-section { padding: 2rem 0; }
        .category-title { font-size: 1.35rem; }
        .menu-grid { grid-template-columns: 1fr; gap: 1rem; }
        .menu-card .body { padding: 1rem; }
    }
</style>
@endpush

@section('content')
    <section class="menu-hero">
        <div class="container">
            <h1>Nuestro menú</h1>
            <p>Elige tu favorito y pide por WhatsApp. Todo recién preparado.</p>
        </div>
    </section>

    <div class="container">
        <section class="menu-section">
            <h2 class="category-title">Hamburguesas</h2>
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600&q=80" alt="Hamburguesa clásica">
                    <div class="body">
                        <h3>Hamburguesa Pikaditos</h3>
                        <p class="desc">Carne res, queso, lechuga, tomate, salsa especial.</p>
                        <div class="foot">
                            <span class="price">$18.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20una%20Hamburguesa%20Pikaditos" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1553979459-d2229ba7433b?w=600&q=80" alt="Hamburguesa doble">
                    <div class="body">
                        <h3>Doble carne</h3>
                        <p class="desc">Doble carne, doble queso, tocineta, cebolla caramelizada.</p>
                        <div class="foot">
                            <span class="price">$22.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20una%20Doble%20carne" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?w=600&q=80" alt="Hamburguesa pollo">
                    <div class="body">
                        <h3>Pollo crispy</h3>
                        <p class="desc">Pechuga empanizada, lechuga, tomate, salsa ranch.</p>
                        <div class="foot">
                            <span class="price">$17.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20una%20Pollo%20crispy" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section">
            <h2 class="category-title">Sándwiches y wraps</h2>
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=600&q=80" alt="Sándwich">
                    <div class="body">
                        <h3>Sándwich clásico</h3>
                        <p class="desc">Pollo o carne, tocineta, queso, pan tostado.</p>
                        <div class="foot">
                            <span class="price">$15.500</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20un%20Sándwich%20clásico" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1626700051175-6818013e1d4f?w=600&q=80" alt="Wrap">
                    <div class="body">
                        <h3>Wrap de pollo</h3>
                        <p class="desc">Pollo, verduras frescas, queso y aderezo. Tortilla de harina.</p>
                        <div class="foot">
                            <span class="price">$14.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20un%20Wrap%20de%20pollo" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1606755962773-d324e0a13086?w=600&q=80" alt="Perro caliente">
                    <div class="body">
                        <h3>Perro especial</h3>
                        <p class="desc">Salchicha, papas, queso, salsa y toppings a elección.</p>
                        <div class="foot">
                            <span class="price">$12.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20un%20Perro%20especial" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section">
            <h2 class="category-title">Complementos y bebidas</h2>
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1573080496219-bb080dd4f877?w=600&q=80" alt="Papas fritas">
                    <div class="body">
                        <h3>Papas fritas</h3>
                        <p class="desc">Porción crujiente. Opción con queso o bacon.</p>
                        <div class="foot">
                            <span class="price">$6.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20Papas%20fritas" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=80" alt="Ensalada">
                    <div class="body">
                        <h3>Ensalada fresca</h3>
                        <p class="desc">Mix de verduras, pollo opcional, aderezo a elección.</p>
                        <div class="foot">
                            <span class="price">$14.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20Ensalada%20fresca" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=600&q=80" alt="Bebidas">
                    <div class="body">
                        <h3>Bebidas</h3>
                        <p class="desc">Gaseosa, jugo natural, agua, café. Variedad de sabores.</p>
                        <div class="foot">
                            <span class="price">$3.500</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20agregar%20bebidas%20a%20mi%20pedido" class="btn-pedir" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="cta-block" style="background: linear-gradient(135deg, var(--wood-dark) 0%, var(--wood) 100%); color: #f4e4bc; text-align: center; padding: 2.5rem;">
        <div class="container">
            <p style="margin-bottom: 1rem;">¿Listo para ordenar? Escríbenos por WhatsApp con tu pedido.</p>
            <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20hacer%20un%20pedido" class="btn btn-primary" target="_blank" rel="noopener">Ordenar por WhatsApp</a>
        </div>
    </section>
@endsection
