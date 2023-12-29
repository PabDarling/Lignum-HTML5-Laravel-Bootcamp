<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        $actores = Actor::all();
        return view('actors.index', compact('actores'));
    }

    public function create()
    {
        return view('actors.create');
    }

    public function store(Request $request)
    {
        // Valida y guarda el actor
    }

    public function show($id)
    {
        $actor = Actor::findOrFail($id);
        return view('actors.show', compact('actor')); // Corregido: 'actor' en lugar de 'actores'
    }

    public function edit($id)
    {
        $actor = Actor::findOrFail($id);
        return view('actors.edit', compact('actor')); // Corregido: 'actor' en lugar de 'actores'
    }

    public function update(Request $request, $id)
    {
        // Valida y actualiza el actor
    }

    public function destroy($id)
    {
        // Elimina el actor
    }
}
