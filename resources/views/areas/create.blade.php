@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Crear Área</h1>

    <form action="{{ route('area.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success btn-sm">Guardar área</button>
        <a href="{{ route('areas.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
    </form>
@endsection
