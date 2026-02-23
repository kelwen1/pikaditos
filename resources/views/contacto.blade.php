@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <section class="bg-black text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-2xl sm:text-3xl font-bold">Contacto</h1>
            <p class="text-white/80 mt-1">¿Dudas? Escríbenos</p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-12">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-xl">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="mb-6 p-4 bg-red-50 text-red-700 rounded-xl">
                <ul class="list-disc list-inside">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
            </div>
        @endif

        <div class="grid lg:grid-cols-2 gap-12">
            <div>
                <div class="bg-wood-bg rounded-2xl p-6 mb-6 border border-wood/10">
                    <h2 class="font-bold text-ink mb-4">Dónde estamos</h2>
                    <p class="text-muted">Calle Ejemplo 123, Local 4</p>
                    <p class="text-muted mt-1"><a href="tel:+573172479723" class="text-gold font-medium hover:text-gold-light">317 247 9723</a></p>
                    <a href="https://wa.me/573172479723" class="inline-flex items-center gap-2 mt-4 px-4 py-2 bg-[#25D366] text-white font-medium rounded-full hover:bg-[#20BD5A] transition-colors" target="_blank" rel="noopener">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16"><path d="M13.6 2.3A7.9 7.9 0 0 0 8 0C3.6 0 .06 3.6.06 7.9z"/></svg>
                        WhatsApp
                    </a>
                </div>
                <div class="text-sm text-muted">
                    <p class="font-medium text-ink">Horarios</p>
                    <p>Lun–Vie: 4pm – 12am</p>
                    <p>Sáb–Dom: 3pm – 12am</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-wood/20 p-6 shadow-sm">
                <h2 class="font-bold text-ink mb-4">Envíanos un mensaje</h2>
                <form action="{{ route('contacto.enviar') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-ink mb-1">Nombre *</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required class="w-full px-4 py-2 border border-wood/30 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-ink mb-1">Correo *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border border-wood/30 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-ink mb-1">Asunto</label>
                        <input type="text" name="asunto" value="{{ old('asunto') }}" placeholder="Ej: Pedido, consulta" class="w-full px-4 py-2 border border-wood/30 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-ink mb-1">Mensaje *</label>
                        <textarea name="mensaje" rows="4" required class="w-full px-4 py-2 border border-wood/30 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold">{{ old('mensaje') }}</textarea>
                    </div>
                    <button type="submit" class="w-full py-3 bg-gold text-black font-semibold rounded-lg hover:bg-gold-light transition-colors">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
