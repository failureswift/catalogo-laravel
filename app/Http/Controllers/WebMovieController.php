<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class WebMovieController extends Controller
{
    // Mostrar todas las películas
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    // Mostrar formulario para crear película
    public function create()
    {
        return view('movies.create');
    }

    // Guardar nueva película
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string|max:255',
        ]);

        Movie::create($validated);

        return redirect()
            ->route('movies.index')
            ->with('success', 'Película agregada correctamente.');
    }

    // Mostrar una película
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    // Mostrar formulario para editar
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    // Actualizar película
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string|max:255',
        ]);

        $movie->update($validated);

        return redirect()
            ->route('movies.index')
            ->with('success', 'Película actualizada correctamente.');
    }

    // Eliminar película
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()
            ->route('movies.index')
            ->with('success', 'Película eliminada correctamente.');
    }
}