@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Computadores</h1>

    <a href="{{ route('computer.create') }}" class="btn btn-success btn-sm mb-3">Nuevo computador</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($computers as $computer)
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['number'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                    <td>
                        <a href="{{ route('computer.show', $computer['id']) }}"
                           class="btn btn-info btn-sm">Ver más</a>
                        <a href="{{ route('computer.edit', $computer['id']) }}"
                           class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('computer.destroy', $computer['id']) }}"
                              method="POST" style="display:inline"
                              onsubmit="return confirm('¿Deseas eliminar este computador?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay computadores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
