@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Cursos</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Número de Curso</th>
                <th>Día</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['day'] }}</td>
                    <td>
                        <a href="{{ route('course.show', $course['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay cursos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
