@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Crear Centro de Formación</h1>

    <form action="{{ route('trainingcenter.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Ubicación:</label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success btn-sm">Guardar centro</button>
        <a href="{{ route('trainingcenters.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
    </form>
@endsection
