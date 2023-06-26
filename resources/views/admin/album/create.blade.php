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
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@stop

@section('js')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script> --}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone-amd-module.min.js" integrity="sha512-oQq8uth41D+gIH/NJvSJvVB85MFk1eWpMK6glnkg6I7EdMqC1XVkW7RxLheXwmFdG03qScCM7gKS/Cx3FYt7Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
    <script src="{{ asset('adminlte/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    {{-- <script src="{{ asset('adminlte/plugins/select2/dist/js/select2.js') }}"></script> --}}
    <script src="{{ asset('adminlte/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    {{-- <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.js') }}"></script>
    <script>
        let myDropzone = new Dropzone('.dropzone', {
            url: '/admin/album/testing/photos',
            method: "post",
            acceptedFiles:'image/*',
            maxFilesize: 2,
            paramName: 'photo',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dictDefaultMessage: 'Arrastra las fotos aqui para subirlas...',
        });

        myDropzone.on('errors', function(file, res) {
            // console.log(res.errors.photo[0]);
            var msg = res.errors.photo[0];
            $('.dz-error-message:last > span').text(msg);
            // $('.dz-error-message:last > span').text(msg);
        });

        Dropzone.autoDiscover = false;
    </script>
@stop