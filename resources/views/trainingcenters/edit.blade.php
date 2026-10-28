@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Centro de Formación</h1>

    <form action="{{ route('trainingcenter.update', $trainingcenter['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control"
                   value="{{ old('name', $trainingcenter['name'] ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Ubicación:</label>
            <input type="text" id="location" name="location" class="form-control"
                   value="{{ old('location', $trainingcenter['location'] ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-warning btn-sm">Actualizar centro</button>
        <a href="{{ route('trainingcenters.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
    </form>
@endsection
