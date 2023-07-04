@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Crear una predica</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.preachs.store', 'autocomplete' => 'on', 'files' => true]) !!}

            @include('admin.preach.partials.form')

            {!! Form::submit('Crear predica', ['class' => 'btn btn-primary']) !!}

            {!! Form::close()!!}
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop