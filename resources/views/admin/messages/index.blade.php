@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Lista de  Mensajes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">
            <strong>{{ session('danger') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">

                <a class="btn btn-success btn-sm" href="{{ route('admin.messages.create') }}">Agregar Mensaje</a>

        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>


            </table>
        </div>
    </div>
@stop
