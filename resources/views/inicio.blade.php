@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    {{-- Hero estilo McDonald's: imagen grande + CTA --}}
    <section class="relative h-[70vh] min-h-[400px] overflow-hidden">
        <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?w=1600&q=85" alt="Comida Pikaditos" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-wood-dark/85 via-wood-dark/50 to-transparent"></div>
        <div class="relative h-full max-w-6xl mx-auto px-4 flex items-center">
            <div class="max-w-xl">
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-4 leading-tight">Rico, rápido y a tu casa</h1>
                <p class="text-lg text-white/95 mb-8">Hamburguesas, picadas, cócteles y más. Pide por WhatsApp y te lo llevamos.</p>
                <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20ordenar" class="inline-flex items-center gap-2 px-8 py-4 bg-[#25D366] text-white font-bold rounded-full text-lg hover:bg-[#20BD5A] transition-colors" target="_blank" rel="noopener">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16"><path d="M13.6 2.3A7.9 7.9 0 0 0 8 0C3.6 0 .06 3.6.06 7.9c0 1.4.4 2.8 1 4L0 16l4.2-1.1a7.9 7.9 0 0 0 3.8 1h.004c4.4 0 7.9-3.6 7.9-7.9a7.9 7.9 0 0 0-2.3-5.6z"/></svg>
                    Ordenar por WhatsApp
                </a>
            </div>
        </div>
    </section>

    {{-- Populares --}}
    <section class="py-16 bg-wood-bg">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-ink mb-2">Lo más pedido</h2>
            <p class="text-muted mb-10">Los favoritos de nuestros clientes</p>
            <div class="grid sm:grid-cols-3 gap-6">
                <a href="https://wa.me/573172479723?text=Hola,%20quiero%20una%20Hamburguesa%20PK" class="block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-wood/10" target="_blank" rel="noopener">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600&q=85" alt="Hamburguesa PK" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-ink text-lg">Hamburguesa PK</h3>
                        <p class="text-muted text-sm mt-1">Carne, lechuga, tomate, brevas, papas</p>
                        <p class="text-gold font-bold text-lg mt-3">$22.000</p>
                    </div>
                </a>
                <a href="https://wa.me/573172479723?text=Hola,%20quiero%20Fusión%20PK" class="block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-wood/10" target="_blank" rel="noopener">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=600&q=85" alt="Fusión PK" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-ink text-lg">Fusión PK</h3>
                        <p class="text-muted text-sm mt-1">Desmechada, butifarra, salchicha, pollo, queso</p>
                        <p class="text-gold font-bold text-lg mt-3">$25.000</p>
                    </div>
                </a>
                <a href="https://wa.me/573172479723?text=Hola,%20quiero%20Piña%20Colada" class="block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-wood/10" target="_blank" rel="noopener">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551538827-9c037cb4f32a?w=600&q=85" alt="Piña Colada" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-ink text-lg">Piña Colada</h3>
                        <p class="text-muted text-sm mt-1">Ron, piña, crema de coco</p>
                        <p class="text-gold font-bold text-lg mt-3">$16.000</p>
                    </div>
                </a>
            </div>
            <div class="text-center mt-10">
                <a href="{{ route('menu') }}" class="inline-block px-8 py-3 bg-gold text-black font-semibold rounded-full hover:bg-gold-light transition-colors">Ver todo el menú</a>
            </div>
        </div>
    </section>

    {{-- Por qué Pikaditos --}}
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-ink mb-2">¿Por qué Pikaditos?</h2>
            <p class="text-muted mb-12">Simple, rápido y delicioso</p>
            <div class="grid sm:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gold/15 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">🍔</div>
                    <h3 class="font-bold text-ink">Rápido y fresco</h3>
                    <p class="text-muted text-sm mt-1">Preparamos tu pedido al momento</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gold/15 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">🚗</div>
                    <h3 class="font-bold text-ink">Delivery</h3>
                    <p class="text-muted text-sm mt-1">Te llevamos hasta la puerta</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gold/15 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">💬</div>
                    <h3 class="font-bold text-ink">Ordena por WhatsApp</h3>
                    <p class="text-muted text-sm mt-1">Fácil y sin complicaciones</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA final --}}
    <section class="py-16 bg-black">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-2">¿Listo para pedir?</h2>
            <p class="text-white/90 mb-8">Escríbenos por WhatsApp y en minutos está listo</p>
            <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20ordenar" class="inline-flex items-center gap-2 px-10 py-4 bg-gold text-black font-bold rounded-full text-lg hover:bg-gold-light transition-colors" target="_blank" rel="noopener">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16"><path d="M13.6 2.3A7.9 7.9 0 0 0 8 0C3.6 0 .06 3.6.06 7.9c0 1.4.4 2.8 1 4L0 16l4.2-1.1a7.9 7.9 0 0 0 3.8 1h.004c4.4 0 7.9-3.6 7.9-7.9a7.9 7.9 0 0 0-2.3-5.6z"/></svg>
                Ordenar ahora
            </a>
        </div>
    </section>
@endsection
