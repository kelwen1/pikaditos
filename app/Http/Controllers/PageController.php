<?php

namespace App\Http\Controllers;

use App\Services\MenuData;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function menu()
    {
        return view('menu', ['secciones' => MenuData::secciones()]);
    }

    public function menuSeccion(string $slug)
    {
        $seccion = MenuData::getSeccion($slug);
        if (!$seccion) {
            abort(404);
        }
        return view('menu-seccion', $seccion);
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function enviarContacto(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'asunto' => 'nullable|string|max:150',
            'mensaje' => 'required|string|max:1000',
        ], [
            'nombre.required' => 'Escribe tu nombre.',
            'email.required' => 'Necesitamos tu correo.',
            'mensaje.required' => 'Escribe tu mensaje.',
        ]);

        // Aquí podrías enviar email o guardar en BD. Por ahora redirigimos con éxito.
        return redirect()->route('contacto')->with('success', 'Mensaje enviado. Te responderemos pronto.');
    }
}
