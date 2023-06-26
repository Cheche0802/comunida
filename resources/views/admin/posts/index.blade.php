@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">Nuevo Post</a>
    <h1>Listado de Post</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-success">
            <strong>{{ session('danger') }}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        
    </script>
@stop
