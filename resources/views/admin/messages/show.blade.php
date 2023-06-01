@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Comunidad de Gracia</h1>
@stop

@section('content')
    <h1>Mensajes</h1>
    <p>{{$message->body}}</p>
    <small>Enviado por {{$message->sender->name}}</small>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


