@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Crear una predica</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.preachs.store', 'autocomplete' => 'on', 'files' => true]) !!}

            {{-- @dump(Auth::user()->hasRole('Admin'))
            @Auth::user()->hasRole('Lider') --}}

            @include('admin.preachs.partials.form')

            {!! Form::submit('Crear predica', ['class' => 'btn btn-primary']) !!}

            {!! Form::close()!!}
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });


            document.getElementById("file").addEventListener('change', cambiarImagen)
            function cambiarImagen(event) {
                var file =event.target.files[0];

                var reader = new FileReader()
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }
    </script>
@stop