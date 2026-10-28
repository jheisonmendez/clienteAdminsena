@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-success">Detalles del Computador</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $computer['id'] }}</td>
                <td>{{ $computer['number'] }}</td>
                <td>{{ $computer['brand'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('computers.index') }}" class="btn btn-secondary btn-sm">Volver</a>
@endsection
