@extends('layouts.app')

@section('content')
    <br>
    <div class="card">
        <div class="card-header title">
            <h4><strong>Añadir profesor</strong></h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(['route'=>['profesores.store'], 'method'=>'POST']) !!}
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            {!! Form::label('nombre', 'Nombre:') !!}
                            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'value'=>old('nombre')]) !!}

                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('grado') ? ' has-error' : '' }}">
                            {!! Form::label('grado', 'Grado:') !!}
                            {!! Form::text('grado', null, ['class'=>'form-control', 'placeholder'=>'Grado', 'value'=>old('grado')]) !!}

                            @if ($errors->has('grado'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('grado') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            {!! Form::label('year', 'Año de contratacion:') !!}
                            {!! Form::text('year', null, ['class'=>'form-control input-lg', 'placeholder'=>'Año de contratacion del profesor', 'value'=>old('year')]) !!}

                            @if ($errors->has('year'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('year') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="text-right">
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary btn-md']) !!}

                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
