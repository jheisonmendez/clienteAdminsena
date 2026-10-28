@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Centros de Formación</h1>

    <a href="{{ route('trainingcenter.create') }}" class="btn btn-success btn-sm mb-3">Nuevo centro</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($trainingcenters as $trainingcenter)
                <tr>
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                    <td>
                        <a href="{{ route('trainingcenter.show', $trainingcenter['id']) }}"
                           class="btn btn-info btn-sm">Ver más</a>
                        <a href="{{ route('trainingcenter.edit', $trainingcenter['id']) }}"
                           class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('trainingcenter.destroy', $trainingcenter['id']) }}"
                              method="POST" style="display:inline"
                              onsubmit="return confirm('¿Deseas eliminar este centro?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay centros registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
