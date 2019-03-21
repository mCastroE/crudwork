@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 style="position: absolute;"><strong>Profesores</strong></h4>
            <a href="{{ URL::to('profesores/create') }}">
                <button type="button" class="btn btn-primary float-right">Añadir Profesor</button>
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Profesor</th>
                    {{-- <th>Grado</th> --}}
                    {{-- <th>Año de Contratacion</th> --}}
                    <th>Publicaciones</th>
                    <th>Opciones</th>
                </tr>
                @foreach ($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->nombre }}</td>
                        {{-- <td>{{ $profesor->grado }}</td> --}}
                        {{-- <td>{{ $profesor->year }}</td> --}}
                        <td>
                            <ul class="list-group">
                                @foreach ($profesor->publicaciones as $publicacion)
                                    @if ($loop->iteration > 0)
                                        <li class="list-group-item">
                                            {{ $publicacion->referencia }}
                                        </li>
                                    @endif
                                @endforeach
                                @if (count($profesor->publicaciones) < 1)
                                    <li class="list-group-item">
                                        Sin publicaciones.
                                    </li>
                                @endif
                            </ul>
                        </td>
                        <td>
                            <div style="float: right">
                                {!! Form::open(['route'=>['profesores.destroy', $profesor->id], 'method'=>'DELETE']) !!}
                                    <button name="submit" type="submit" class="btn btn-sm btn-danger pull-right">Borrar</button>
                                {!! Form::close() !!}
                            </div>
                            <a href="{{ route("profesores.edit", $profesor->id) }}" class="btn btn-sm btn-info pull-right" style="margin: 5px">Editar</span></a>
                            <a href="{{ route("publicaciones.index1", $profesor->id) }}" class="btn btn-sm btn-success pull-right" style="margin: 5px">Ir a publicaciones</span></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
