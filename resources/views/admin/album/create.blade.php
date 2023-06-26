@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Crear nuevo album</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.album.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('admin.album.partials.form')

            {!! Form::submit('Crear album', ['class' => 'btn btn-primary']) !!}

            {!! Form::close()!!}
        </div>
    </div>
@stop

@section('css')
    <style>
        
    </style>
@stop