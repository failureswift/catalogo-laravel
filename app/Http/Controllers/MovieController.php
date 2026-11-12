<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // GET: obtener todas las películas
    public function index()
    {
        return response()->json(Movie::all(), 200);
    }

    // GET: obtener una película por ID
    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'message' => 'Película no encontrada'
            ], 404);
        }

        return response()->json($movie, 200);
    }

    // POST: crear una película
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string|max:255',
        ]);

        $movie = Movie::create($validated);

        return response()->json($movie, 201);
    }

    // PUT: actualizar una película
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'message' => 'Película no encontrada'
            ], 404);
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string|max:255',
        ]);

        $movie->update($validated);

        return response()->json([
            'message' => 'Película actualizada correctamente',
            'movie' => $movie
        ], 200);
    }

    // DELETE: eliminar una película
    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'message' => 'Película no encontrada'
            ], 404);
        }

        $movie->delete();

        return response()->json([
            'message' => 'Película eliminada correctamente'
        ], 200);
    }
}