<!-- resources/views/eventos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Eventos</h1>

        <!-- Si el usuario está autenticado, se muestra el enlace para crear un nuevo evento -->
        @auth
            <a href="{{ route('eventos.create') }}" class="btn btn-success mb-3">Crear Evento</a>
        @endauth

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del Evento</th>
                    <th>Fecha de Inicio</th>
                    <th>Tipo</th>
                    @auth
                        <th>Acciones</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <!-- Enlace al evento individual -->
                        <td><a href="{{ route('eventos.show', $evento->id) }}">{{ $evento->nombreEvento }}</a></td>
                        <td>{{ $evento->fechaInicio }}</td>
                        <td>{{ $evento->tipo }}</td>
                        
                        @auth
                            <td>
                                <!-- Botones solo visibles para usuarios autenticados -->
                                <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                
                                <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación de los eventos -->
        {{ $eventos->links() }}
    </div>
@endsection
