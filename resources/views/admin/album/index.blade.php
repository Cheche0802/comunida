@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.album.create') }}">Nuevo Album</a>
    <h1>Galeria</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    @if ('danger')
        <div class="alert alert-success">
            <strong>
                {{ session('danger') }}
            </strong>
        </div>
    @endif

    @livewire('admin.album-index')
@stop

@section('css')
    <link rel="stylesheet" type="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop