@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Crear Computador</h1>

    <form action="{{ route('computer.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="number" class="form-label">Número:</label>
            <input type="number" id="number" name="number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Marca:</label>
            <input type="text" id="brand" name="brand" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success btn-sm">Guardar computador</button>
        <a href="{{ route('computers.index') }}" class="btn btn-secondary btn-sm">Cancelar</a>
    </form>
@endsection
