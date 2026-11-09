@extends('layouts.app')

@section('title', 'Películas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 mb-1">Películas</h1>
        <p class="text-muted mb-0">
            Consulta y administra los registros del catálogo.
        </p>
    </div>

    <a href="{{ route('movies.create') }}" class="btn btn-primary">
        + Agregar película
    </a>
</div>

@if($movies->isEmpty())

    <div class="alert alert-info">
        No hay películas registradas todavía.
    </div>

@else

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Portada</th>
                            <th>Título</th>
                            <th>Año</th>
                            <th>Sinopsis</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($movies as $movie)

                            <tr>

                                <td>
                                    {{ $movie->id }}
                                </td>

                                <td>
                                    <img
                                        src="{{ $movie->cover }}"
                                        alt="{{ $movie->title }}"
                                        style="width: 70px; height: 100px; object-fit: cover;"
                                        class="rounded"
                                    >
                                </td>

                                <td>
                                    <strong>{{ $movie->title }}</strong>
                                </td>

                                <td>
                                    {{ $movie->year }}
                                </td>

                                <td style="max-width: 350px;">
                                    {{ \Illuminate\Support\Str::limit($movie->synopsis, 100) }}
                                </td>

                                <td class="text-center">

                                    <a
                                        href="{{ route('movies.show', $movie) }}"
                                        class="btn btn-sm btn-info text-white"
                                    >
                                        Ver
                                    </a>

                                    <a
                                        href="{{ route('movies.edit', $movie) }}"
                                        class="btn btn-sm btn-warning"
                                    >
                                        Editar
                                    </a>

                                    <form
                                        action="{{ route('movies.destroy', $movie) }}"
                                        method="POST"
                                        class="d-inline"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Seguro que deseas eliminar esta película?')"
                                        >
                                            Eliminar
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>

@endif

@endsection