@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Área</h1>

    <form action="{{ route('area.update', $area['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control"
                   value="{{ old('name', $area['name'] ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-warning btn-sm">Actualizar área</button>
        <a href="{{ route('areas.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
    </form>
@endsection
