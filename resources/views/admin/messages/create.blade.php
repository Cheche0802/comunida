@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.messages.store']) !!}

            <div class="form-group">
                {!! Form::label('recipient_id', 'Usuario') !!}
                {!! Form::select('recipient_id', $users, ['class' => 'form-control']) !!}

                @error('recipient_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('grupo_id', 'Grupo') !!}
                {!! Form::select('grupo_id', $roles, ['class' => 'form-control']) !!}

                @error('grupo_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>


            <div class="form-group">
                {!! Form::label('body', 'Contenido:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Crear mensaje', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')
     <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
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

    </script>
@endsection
