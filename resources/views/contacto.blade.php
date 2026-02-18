@extends('layouts.app')

@section('title', 'Contacto')

@push('styles')
<style>
    .contact-hero {
        background: linear-gradient(120deg, rgba(74,48,32,0.88) 0%, rgba(125,94,69,0.82) 100%), url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1600&q=80') center/cover no-repeat;
        padding: 2.5rem 1.5rem;
        text-align: center;
        color: var(--cream);
    }
    .contact-hero h1 { font-size: 2.25rem; margin-bottom: 0.5rem; }
    .contact-hero p { opacity: 0.9; }

    .contact-wrap { padding: 3rem 0 4rem; }
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.5rem;
        align-items: start;
    }
    @media (max-width: 768px) {
        .contact-grid { grid-template-columns: 1fr; gap: 2rem; }
        .contact-hero { padding: 2rem 1.25rem; }
        .contact-hero h1 { font-size: 1.9rem; }
        .contact-wrap { padding: 2rem 0 3rem; }
        .form-box { padding: 1.5rem; }
        .map-wrap iframe { height: 250px; }
    }
    @media (max-width: 480px) {
        .contact-hero { padding: 1.5rem 1rem; }
        .contact-hero h1 { font-size: 1.65rem; }
        .contact-wrap { padding: 1.5rem 0 2.5rem; }
        .contact-info { padding: 1.25rem; }
        .form-box { padding: 1.25rem; }
        .form-group { margin-bottom: 1rem; }
        .btn-submit { min-height: 44px; padding: 0.75rem 1.5rem; width: 100%; }
        .map-wrap { margin-top: 1.5rem; }
        .map-wrap iframe { height: 220px; }
    }

    .contact-info { background: var(--wood-bg); padding: 1.5rem; border-radius: 10px; border-left: 3px solid var(--gold); }
    .contact-info h3 { font-family: 'Cormorant Garamond', serif; color: var(--wood-dark); margin-bottom: 1rem; font-size: 1.35rem; }
    .contact-info p { margin-bottom: 0.5rem; color: var(--text); }
    .contact-info a { color: var(--gold); font-weight: 500; text-decoration: none; }
    .contact-info a:hover { text-decoration: underline; }
    .horarios { margin-top: 1.5rem; }
    .horarios li { list-style: none; padding: 0.25rem 0; color: var(--text-muted); }

    .form-box {
        background: #fff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(74,48,32,0.08);
        border: 1px solid rgba(212,168,74,0.12);
    }
    .form-box h3 { font-family: 'Cormorant Garamond', serif; color: var(--wood-dark); margin-bottom: 1.25rem; font-size: 1.35rem; }
    .form-group { margin-bottom: 1.25rem; }
    .form-group label { display: block; font-weight: 600; margin-bottom: 0.4rem; color: var(--wood-dark); }
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.65rem 0.85rem;
        border: 1px solid #d4c4b0;
        border-radius: 6px;
        font-family: inherit;
        font-size: 1rem;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--gold);
        box-shadow: 0 0 0 2px rgba(184,134,11,0.2);
    }
    .form-group textarea { min-height: 120px; resize: vertical; }
    .btn-submit {
        background: linear-gradient(135deg, var(--gold) 0%, var(--wood-light) 100%);
        color: var(--wood-dark);
        border: none;
        padding: 0.75rem 1.75rem;
        font-weight: 600;
        font-size: 1rem;
        border-radius: 6px;
        cursor: pointer;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        box-shadow: 0 2px 8px rgba(184,134,11,0.2);
    }
    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 6px 18px rgba(184,134,11,0.35); }

    .alert { padding: 1rem 1.25rem; border-radius: 4px; margin-bottom: 1.5rem; }
    .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    .alert-error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

    .map-wrap {
        margin-top: 2rem;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(74,48,32,0.08);
    }
    .map-wrap iframe { width: 100%; height: 280px; border: 0; display: block; }
</style>
@endpush

@section('content')
    <section class="contact-hero">
        <div class="container">
            <h1>Contacto</h1>
            <p>¿Dudas, pedidos o sugerencias? Estamos para atenderte.</p>
        </div>
    </section>

    <div class="container contact-wrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-error">
                <ul style="margin: 0; padding-left: 1.2rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="contact-grid">
            <div>
                <div class="contact-info">
                    <h3>Dónde estamos</h3>
                    <p><strong>Dirección:</strong> Calle Ejemplo 123, Local 4</p>
                    <p><strong>Teléfono:</strong> <a href="tel:+573172479723">3172479723</a></p>
                    <p><strong>WhatsApp:</strong> <a href="https://wa.me/573172479723" target="_blank" rel="noopener">Escribir por WhatsApp</a></p>
                    <div class="horarios">
                        <h3 style="margin-bottom: 0.5rem;">Horarios</h3>
                        <ul>
                            <li>Lunes a Viernes: 4:00 AM - 12:00 AM</li>
                            <li>Sábados y Domingos: 3:00 PM - 12:00 AM</li>
                        </ul>
                    </div>
                </div>

                <div class="map-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.289850779!2d-74.072249!3d4.710989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85b2c5c5c5c5%3A0x5c5c5c5c5c5c5c5c!2sBogot%C3%A1!5e0!3m2!1ses!2sco!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación Pikaditos"></iframe>
                </div>
            </div>

            <div class="form-box">
                <h3>Envíanos un mensaje</h3>
                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" placeholder="Ej: Pedido, consulta...">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" required>{{ old('mensaje') }}</textarea>
                    </div>
                    <button type="submit" class="btn-submit">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
@endsection
