@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-success">Detalles del Instructor</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $teacher['id'] }}</td>
                <td>{{ $teacher['name'] }}</td>
                <td>{{ $teacher['email'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('teachers') }}" class="btn btn-secondary btn-sm">Volver</a>
@endsection
