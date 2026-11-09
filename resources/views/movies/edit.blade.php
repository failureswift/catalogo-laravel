@extends('layouts.app')

@section('title', 'Editar película')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header bg-dark text-white">
                <h2 class="h5 mb-0">
                    Editar película
                </h2>
            </div>

            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    action="{{ route('movies.update', $movie) }}"
                    method="POST"
                >

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label
                            for="title"
                            class="form-label"
                        >
                            Título
                        </label>

                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control"
                            value="{{ old('title', $movie->title) }}"
                            required
                        >

                    </div>

                    <div class="mb-3">

                        <label
                            for="synopsis"
                            class="form-label"
                        >
                            Sinopsis
                        </label>

                        <textarea
                            name="synopsis"
                            id="synopsis"
                            class="form-control"
                            rows="4"
                            required
                        >{{ old('synopsis', $movie->synopsis) }}</textarea>

                    </div>

                    <div class="mb-3">

                        <label
                            for="year"
                            class="form-label"
                        >
                            Año
                        </label>

                        <input
                            type="number"
                            name="year"
                            id="year"
                            class="form-control"
                            value="{{ old('year', $movie->year) }}"
                            min="1900"
                            max="2100"
                            required
                        >

                    </div>

                    <div class="mb-3">

                        <label
                            for="cover"
                            class="form-label"
                        >
                            URL de portada
                        </label>

                        <input
                            type="url"
                            name="cover"
                            id="cover"
                            class="form-control"
                            value="{{ old('cover', $movie->cover) }}"
                            required
                        >

                    </div>

                    <div class="d-flex justify-content-between">

                        <a
                            href="{{ route('movies.index') }}"
                            class="btn btn-secondary"
                        >
                            Cancelar
                        </a>

                        <button
                            type="submit"
                            class="btn btn-warning"
                        >
                            Guardar cambios
                        </button>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection 