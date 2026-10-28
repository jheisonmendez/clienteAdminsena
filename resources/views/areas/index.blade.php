@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Áreas</h1>

    <a href="{{ route('area.create') }}" class="btn btn-success btn-sm mb-3">Nueva área</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ver más</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($areas as $area)
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>
                    <td>
                        <a href="{{ route('area.show', $area['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                    </td>
                    <td>
                        <a href="{{ route('area.edit', $area['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('area.destroy', $area['id']) }}" method="POST"
                              style="display: inline-block;"
                              onsubmit="return confirm('¿Estás seguro de eliminar esta área?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay áreas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
