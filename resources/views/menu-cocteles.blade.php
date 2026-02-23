@extends('layouts.app')

@section('title', 'Cócteles — Menú')

@section('content')
    <section class="relative bg-wood-dark/90 text-cream py-8 sm:py-10">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=1600&q=80')] bg-cover bg-center -z-10 opacity-60"></div>
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="font-serif text-xl sm:text-2xl font-bold">Cócteles</h1>
            <p class="text-sm text-cream/90 mt-0.5">Normales, cremosos y refrescantes.</p>
            <p class="text-xs text-cream/80 mt-2"><a href="{{ route('menu') }}" class="hover:underline">Menú</a> › Cócteles</p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 py-8 space-y-8">
        <section>
            <h2 class="font-serif text-sm font-semibold text-wood-dark pb-1.5 border-b-2 border-gold mb-4">Cócteles normales</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col bg-white rounded-lg overflow-hidden border border-wood/10 hover:border-gold/25 hover:shadow-md transition-all">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=600&q=80" alt="Cóctel clásico" class="w-full h-32 object-cover">
                    <div class="p-3 flex flex-col flex-1">
                        <h3 class="font-serif font-semibold text-wood-dark text-sm">Cóctel clásico</h3>
                        <p class="text-muted text-xs mt-0.5 flex-1">Sabor tradicional, ingredientes selectos.</p>
                        <div class="flex items-center justify-between mt-2 pt-2 border-t border-wood/10">
                            <span class="font-bold text-gold text-sm">$12.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20un%20Cóctel%20clásico" class="px-3 py-1.5 text-xs font-semibold rounded bg-wood-dark text-gold-pale hover:bg-wood transition-colors" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-wood-bg/50 -mx-4 px-4 py-6 rounded-lg">
            <h2 class="font-serif text-sm font-semibold text-wood-dark pb-1.5 border-b-2 border-gold mb-4">Cócteles cremosos</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col bg-white rounded-lg overflow-hidden border border-wood/10 hover:border-gold/25 hover:shadow-md transition-all">
                    <img src="https://images.unsplash.com/photo-1551538827-9c037cb4f32a?w=600&q=80" alt="Cóctel cremoso" class="w-full h-32 object-cover">
                    <div class="p-3 flex flex-col flex-1">
                        <h3 class="font-serif font-semibold text-wood-dark text-sm">Cóctel cremoso especial</h3>
                        <p class="text-muted text-xs mt-0.5 flex-1">Textura suave y cremosa.</p>
                        <div class="flex items-center justify-between mt-2 pt-2 border-t border-wood/10">
                            <span class="font-bold text-gold text-sm">$14.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20Cóctel%20cremoso%20especial" class="px-3 py-1.5 text-xs font-semibold rounded bg-wood-dark text-gold-pale hover:bg-wood transition-colors" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="font-serif text-sm font-semibold text-wood-dark pb-1.5 border-b-2 border-gold mb-4">Cócteles refrescantes</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col bg-white rounded-lg overflow-hidden border border-wood/10 hover:border-gold/25 hover:shadow-md transition-all">
                    <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=600&q=80" alt="Cóctel refrescante" class="w-full h-32 object-cover">
                    <div class="p-3 flex flex-col flex-1">
                        <h3 class="font-serif font-semibold text-wood-dark text-sm">Cóctel refrescante</h3>
                        <p class="text-muted text-xs mt-0.5 flex-1">Ideal para el calor. Fresco y delicioso.</p>
                        <div class="flex items-center justify-between mt-2 pt-2 border-t border-wood/10">
                            <span class="font-bold text-gold text-sm">$11.000</span>
                            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20Cóctel%20refrescante" class="px-3 py-1.5 text-xs font-semibold rounded bg-wood-dark text-gold-pale hover:bg-wood transition-colors" target="_blank" rel="noopener">Pedir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-3 bg-wood-dark text-gold-pale">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <p class="text-xs mb-1.5">¿Listo para ordenar?</p>
            <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20hacer%20un%20pedido" class="inline-flex px-3 py-1.5 rounded text-xs font-semibold bg-gold text-wood-dark hover:bg-gold-light transition-colors" target="_blank" rel="noopener">WhatsApp</a>
        </div>
    </section>
@endsection
