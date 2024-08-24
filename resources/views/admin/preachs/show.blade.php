@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Editar predica</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
            <h1 class="text-center">
                <strong>
                    {{ $preach->title }}
                </strong>
            </h1>

            <h2 class="text-center">
                <strong>
                    {{ $preach->name }}
                </strong>
            </h2>

            <h3 class="text-center">
                <strong>
                    {{ $preach->date }}
                </strong>
            </h3>
            
            <div class="text-center">
                {!! $preach->iframe !!}
            </div>

            <h4 class="text-center">
                <strong>
                    {!! $preach->extract !!}
                </strong>
            </h4>
    </div>
@stop