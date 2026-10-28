@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-success">Detalles del Área</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $area['id'] }}</td>
                <td>{{ $area['name'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('areas.index') }}" class="btn btn-secondary btn-sm">Volver</a>
@endsection
