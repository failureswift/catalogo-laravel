@extends('layouts.app')

@section('title', $movie->title)

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header bg-dark text-white">
                <h2 class="h4 mb-0">
                    {{ $movie->title }}
                </h2>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4 text-center mb-3">
                        <img
                            src="{{ $movie->cover }}"
                            alt="{{ $movie->title }}"
                            class="img-fluid rounded"
                            style="max-height: 400px;"
                        >
                    </div>

                    <div class="col-md-8">

                        <p>
                            <strong>ID:</strong>
                            {{ $movie->id }}
                        </p>

                        <p>
                            <strong>Año:</strong>
                            {{ $movie->year }}
                        </p>

                        <p>
                            <strong>Sinopsis:</strong>
                        </p>

                        <p>
                            {{ $movie->synopsis }}
                        </p>

                    </div>

                </div>

                <div class="d-flex justify-content-between mt-4">

                    <a
                        href="{{ route('movies.index') }}"
                        class="btn btn-secondary"
                    >
                        Volver
                    </a>

                    <a
                        href="{{ route('movies.edit', $movie) }}"
                        class="btn btn-warning"
                    >
                        Editar película
                    </a>

                </div>

            </div>
        </div>

    </div>
</div>

@endsection