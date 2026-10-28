@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-success">Detalles del Curso</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Número de Curso</th>
                <th>Día</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['course_number'] }}</td>
                <td>{{ $course['day'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('courses') }}" class="btn btn-secondary btn-sm">Volver</a>
@endsection
