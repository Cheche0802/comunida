@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Editar predica</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($prediac, ['route' => ['admin.preachs.update', $prediac],'method' => 'PUT', 'autocomplete' => 'on', 'files' => true ])!!}

            @include('admin.ppreach.partials.form')

            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close()!!}
    
    </div>
@stop