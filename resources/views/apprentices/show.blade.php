@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-success">Detalles del Aprendiz</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $apprentice['id'] }}</td>
                <td>{{ $apprentice['name'] }}</td>
                <td>{{ $apprentice['email'] }}</td>
                <td>{{ $apprentice['cell_number'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('apprentices') }}" class="btn btn-secondary btn-sm">Volver</a>
@endsection
