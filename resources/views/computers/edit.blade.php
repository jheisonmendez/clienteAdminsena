@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar Computador</h1>

    <form action="{{ route('computer.update', $computer['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="number" class="form-label">Número:</label>
            <input type="number" id="number" name="number" class="form-control"
                   value="{{ old('number', $computer['number'] ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Marca:</label>
            <input type="text" id="brand" name="brand" class="form-control"
                   value="{{ old('brand', $computer['brand'] ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-warning btn-sm">Actualizar computador</button>
        <a href="{{ route('computers.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
    </form>
@endsection
