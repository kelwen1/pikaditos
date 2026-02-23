@extends('layouts.app')

@section('title', 'Menú')

@push('styles')
<style>
    .menu-scroll { -webkit-overflow-scrolling: touch; }
    .menu-scroll::-webkit-scrollbar { height: 6px; }
    .menu-scroll::-webkit-scrollbar-track { background: #f8f0d8; border-radius: 3px; }
    .menu-scroll::-webkit-scrollbar-thumb { background: #d4af37; border-radius: 3px; }
</style>
@endpush

@section('content')
    {{-- Header --}}
    <section class="bg-black text-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-3xl sm:text-4xl font-bold mb-2">Nuestro menú</h1>
            <p class="text-white/80">Todo lo que tenemos para ti. Desliza para ver cada sección.</p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-12 -mt-8">
        @foreach($secciones as $slug => $seccion)
        <section class="mb-14">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-ink">{{ $seccion['titulo'] }}</h2>
                <a href="{{ route('menu.seccion', $slug) }}" class="text-sm font-semibold text-gold hover:text-gold-light">Ver todo →</a>
            </div>
            <div class="menu-scroll flex gap-4 overflow-x-auto pb-4">
                @foreach(array_slice($seccion['items'], 0, 5) as $item)
                <a href="https://wa.me/573172479723?text=Hola,%20quiero%20{{ urlencode($item['nombre']) }}" class="flex-shrink-0 w-44 bg-white rounded-xl overflow-hidden shadow-sm border border-wood/10 hover:shadow-md hover:border-gold/40 transition-all group" target="_blank" rel="noopener">
                    <div class="aspect-square overflow-hidden">
                        <img src="{{ $seccion['img'] }}" alt="{{ $item['nombre'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-3">
                        <h3 class="font-semibold text-ink text-sm truncate">{{ $item['nombre'] }}</h3>
                        <p class="text-gold font-bold text-sm mt-1">{{ $item['precio'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
        @endforeach
    </div>

    {{-- CTA --}}
    <section class="py-12 bg-wood-bg">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <a href="https://wa.me/573172479723?text=Hola%20Pikaditos,%20quiero%20ordenar" class="inline-flex items-center gap-2 px-8 py-4 bg-[#25D366] text-white font-bold rounded-full hover:bg-[#20BD5A] transition-colors" target="_blank" rel="noopener">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16"><path d="M13.6 2.3A7.9 7.9 0 0 0 8 0C3.6 0 .06 3.6.06 7.9c0 1.4.4 2.8 1 4L0 16l4.2-1.1a7.9 7.9 0 0 0 3.8 1h.004c4.4 0 7.9-3.6 7.9-7.9z"/></svg>
                Ordenar por WhatsApp
            </a>
        </div>
    </section>
@endsection
