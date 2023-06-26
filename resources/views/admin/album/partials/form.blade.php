<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese titulo del post']) !!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

{{-- <div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div> --}}

{{-- <div class="form-group">
    <p class="font-weight-bold">Estatus</p>

    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    <hr>
    @error('status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div> --}}

<div class="form-group">
    {!! Form::label('Descripci&oacute;n', 'Descripcion:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

    @error('body')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
           @isset ($post->image)
            <img id="picture" src="{{ Storage::url($post->image->url)}}" alt="">
           @else
            <img id="picture" src="/storage/default/custom.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*', 'max' => '2048']) !!}
        </div>

        <p>la imagen no debe superar los dos 2MB</p>
        <div class="form-group">
            <label class="label-info">Image</label>
            <div class="dropzone" id="myDropzone"></div>
        </div>
    </div>
</div>