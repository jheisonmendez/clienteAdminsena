@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-success">Detalles del Centro de Formación</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $trainingcenter['id'] }}</td>
                <td>{{ $trainingcenter['name'] }}</td>
                <td>{{ $trainingcenter['location'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('trainingcenters.index') }}" class="btn btn-secondary btn-sm">Volver</a>
@endsection
