<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::orderBy('nombreEvento', 'asc')->paginate(10);
        return view('eventos.index', compact('eventos'));
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.show', compact('evento'));
    }

    public function create()
    {
        if (Auth::user()->eventos()->count() >= 5) {
            return response("<h1>Se han terminado el número máximo de creaciones por usuario, póngase en contacto con el administrador de la aplicación</h1>", 403);
        }
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreEvento' => 'required|string',
            'fechaInicio' => 'nullable|date',
            'fechaFin' => 'nullable|date',
            'tipo' => 'nullable|in:reunión,conferencia,taller,presentación,concierto',
            'participantes' => 'nullable|integer|min:1|max:15',
            'descripcion' => 'nullable|string'
        ]);

        Evento::create($request->all());
        return redirect('/eventos')->with('success', 'Evento creado exitosamente');
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombreEvento' => 'required|string|max:255',
            'fechaInicio' => 'nullable|date',
            'fechaFin' => 'nullable|date',
            'tipo' => 'nullable|string|in:reunión,conferencia,taller,presentación,concierto',
            'participantes' => 'nullable|integer|min:1|max:15',
            'descripcion' => 'nullable|string',
        ]);
        
        $evento = Evento::findOrFail($id);
        $evento->update($request->all());
        return redirect('/eventos')->with('success', 'Evento actualizado exitosamente');
    }

    public function destroy($id)
    {
        Evento::destroy($id);
        return redirect('/eventos')->with('success', 'Evento eliminado exitosamente');
    }
}
