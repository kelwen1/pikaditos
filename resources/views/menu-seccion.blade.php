@extends('layouts.app')

@section('title', $titulo . ' — Menú')

@section('content')
    <section class="bg-black text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <a href="{{ route('menu') }}" class="text-white/80 hover:text-white text-sm mb-4 inline-block">← Menú</a>
            <h1 class="text-2xl sm:text-3xl font-bold">{{ $titulo }}</h1>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($items as $item)
            <a href="https://wa.me/573172479723?text=Hola,%20quiero%20{{ urlencode($item['nombre']) }}" class="block bg-white rounded-xl overflow-hidden shadow-sm border border-wood/10 hover:shadow-md hover:border-gold/40 transition-all group" target="_blank" rel="noopener">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ $img }}" alt="{{ $item['nombre'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-ink">{{ $item['nombre'] }}</h3>
                    @if(!empty($item['desc']))
                    <p class="text-muted text-sm mt-1">{{ $item['desc'] }}</p>
                    @endif
                    <p class="text-gold font-bold text-lg mt-3">{{ $item['precio'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
