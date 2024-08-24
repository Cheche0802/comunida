@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Editar predica</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($preach, ['route' => ['admin.preachs.update', $preach],'method' => 'PUT', 'autocomplete' => 'on', 'files' => true ])!!}

            @include('admin.preachs.partials.form')

            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close()!!}
    
    </div>
@stop