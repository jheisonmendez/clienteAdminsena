@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Instructores</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher['id'] }}</td>
                    <td>{{ $teacher['name'] }}</td>
                    <td>{{ $teacher['email'] }}</td>
                    <td>
                        <a href="{{ route('teacher.show', $teacher['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay instructores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
