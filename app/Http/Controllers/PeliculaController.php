<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        // Valida y guarda la película
    }

    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.show', compact('pelicula'));
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.edit', compact('pelicula'));
    }

    public function update(Request $request, $id)
    {
        // Valida y actualiza la película
    }

    public function destroy($id)
    {
        // Elimina la película
    }
}
