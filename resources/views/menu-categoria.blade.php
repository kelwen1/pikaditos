@extends('layouts.app')

@section('title', $titulo . ' — Menú')

@section('content')
    <section class="relative bg-wood-dark/90 text-cream py-8 sm:py-10">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1600&q=80')] bg-cover bg-center -z-10 opacity-60"></div>
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="font-serif text-xl sm:text-2xl font-bold">{{ $titulo }}</h1>
            <p class="text-sm text-cream/90 mt-0.5">Catálogo completo. Elige y pide por WhatsApp.</p>
            <p class="text-xs text-cream/80 mt-2"><a href="{{ route('menu') }}" class="hover:underline">Menú</a> › {{ $titulo }}</p>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 py-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($productos as $p)
            <div class="flex flex-col bg-white rounded-lg overflow-hidden border border-wood/10 hover:border-gold/25 hover:shadow-md transition-all">
                <img src="{{ $p['img'] }}" alt="{{ $p['nombre'] }}" class="w-full h-36 object-cover">
                <div class="p-3 flex flex-col flex-1">
                    <h3 class="font-serif font-semibold text-wood-dark text-sm">{{ $p['nombre'] }}</h3>
                    <p class="text-muted text-xs mt-0.5 flex-1">{{ $p['desc'] }}</p>
                    <div class="flex items-center justify-between mt-2 pt-2 border-t border-wood/10">
                        <span class="font-bold text-gold text-sm">{{ $p['precio'] }}</span>
                        <a href="https://wa.me/573172479723?text=Hola,%20quiero%20{{ urlencode($p['nombre']) }}" class="px-3 py-1.5 text-xs font-semibold rounded bg-wood-dark text-gold-pale hover:bg-wood transition-colors" target="_blank" rel="noopener">Pedir</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <section class="py-3 bg-wood-dark text-gold-pale">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <p class="text-xs mb-1.5">¿Listo para ordenar?</p>
            <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20hacer%20un%20pedido" class="inline-flex px-3 py-1.5 rounded text-xs font-semibold bg-gold text-wood-dark hover:bg-gold-light transition-colors" target="_blank" rel="noopener">WhatsApp</a>
        </div>
    </section>
@endsection
