@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Comunidad de Gracia</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.categories.store']) !!}

        <div class="form-group">
            {!! Form::label('user_id', 'Usuario') !!}
            {!! Form::select('user_id', $users, ['class' => 'form-control']) !!}

            @error('user_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            {!! Form::label('extract', 'Extracto:') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

            @error('extract')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>




        {!! Form::submit('Crear Mensaje', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
