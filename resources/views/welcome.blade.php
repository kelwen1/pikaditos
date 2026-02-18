<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Food Demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        /* --- ESTILOS GENERALES --- */
        :root {
            --primary: #ff4757; /* Rojo comida */
            --dark: #2f3542;
            --light: #f1f2f6;
            --white: #ffffff;
        }
        
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Poppins', sans-serif; }
        body { background-color: var(--light); color: var(--dark); }

        /* --- HERO SECTION --- */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=1350&q=80'); /* Imagen de fondo genérica */
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            padding: 20px;
        }
        .hero h1 { font-size: 3.5rem; text-transform: uppercase; margin-bottom: 15px; }
        .hero p { font-size: 1.2rem; margin-bottom: 30px; }
        .btn-cta {
            background-color: var(--primary);
            color: var(--white);
            padding: 15px 40px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 50px;
            transition: 0.3s;
        }
        .btn-cta:hover { transform: scale(1.05); box-shadow: 0 5px 15px rgba(255, 71, 87, 0.4); }

        /* --- MENU GRID --- */
        .menu-section { padding: 60px 20px; max-width: 1200px; margin: 0 auto; }
        .section-title { text-align: center; margin-bottom: 40px; font-size: 2.5rem; color: var(--dark); }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .card:hover { transform: translateY(-5px); }
        
        .card-img {
            height: 200px;
            width: 100%;
            background-color: #ddd; /* Color gris mientras carga imagen */
            object-fit: cover;
        }
        
        .card-body { padding: 20px; }
        .card-title { font-size: 1.2rem; font-weight: bold; margin-bottom: 10px; }
        .card-desc { font-size: 0.9rem; color: #777; margin-bottom: 15px; }
        .card-footer { display: flex; justify-content: space-between; align-items: center; }
        .price { font-size: 1.3rem; font-weight: 800; color: var(--primary); }
        .btn-add { 
            background: var(--dark); color: white; padding: 8px 15px; 
            border-radius: 20px; text-decoration: none; font-size: 0.9rem; 
        }

        /* --- WHATSAPP FLOTANTE --- */
        .float-ws {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.3s;
        }
        .float-ws:hover { transform: scale(1.1); }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div>
            <h1>La Mejor Burger <br> <span style="color:var(--primary)">De La Ciudad</span></h1>
            <p>Ingredientes frescos, sabor auténtico y entrega rápida.</p>
            <a href="#menu" class="btn-cta">Ver Menú</a>
        </div>
    </section>

    <section id="menu" class="menu-section">
        <h2 class="section-title">Nuestro Menú</h2>
        
        <div class="grid-container">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=800&q=60" alt="Hamburguesa" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Hamburguesa Clásica</h3>
                    <p class="card-desc">Carne 100% res, queso cheddar, lechuga y salsa especial.</p>
                    <div class="card-footer">
                        <span class="price">$18.000</span>
                        <a href="#" class="btn-add">Pedir</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?auto=format&fit=crop&w=800&q=60" alt="Sandwich" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Sándwich Gourmet</h3>
                    <p class="card-desc">Pollo desmechado, tocineta y pan artesanal tostado.</p>
                    <div class="card-footer">
                        <span class="price">$15.500</span>
                        <a href="#" class="btn-add">Pedir</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1541745537411-b8096dc29c42?auto=format&fit=crop&w=800&q=60" alt="Pizza" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Pizza Pepperoni</h3>
                    <p class="card-desc">Masa delgada, salsa de tomate casera y mucho queso.</p>
                    <div class="card-footer">
                        <span class="price">$22.000</span>
                        <a href="#" class="btn-add">Pedir</a>
                    </div>
                </div>
            </div>
            
            </div>
    </section>

    <a href="https://wa.me/573001234567?text=Hola!%20Quiero%20hacer%20un%20pedido" class="float-ws" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z"/>
        </svg>
    </a>

</body>
</html>