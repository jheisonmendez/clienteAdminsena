@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Aprendices</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice['id'] }}</td>
                    <td>{{ $apprentice['name'] }}</td>
                    <td>{{ $apprentice['email'] }}</td>
                    <td>{{ $apprentice['cell_number'] }}</td>
                    <td>
                        <a href="{{ route('apprentice.show', $apprentice['id']) }}"
                           class="btn btn-info btn-sm">Ver más</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay aprendices registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
