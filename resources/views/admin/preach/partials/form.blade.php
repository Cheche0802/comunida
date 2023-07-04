{!! Form::hidden('user_id', auth()->user()->id) !!}

<div class="form-group">
    {!! Form::label('title', 'Titulo')!!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el titulo de la predica'])!!}
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug')!!}
    {!! Form::textarea('slug', null, ['class' => 'form-control', 'readonly'])!!}
    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('name', 'Nombre del predicardor')!!}
    {!! Form::textarea('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el nombre del predicador'])!!}
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
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
            {!! Form::label('file', 'Audio o mp3 de la predica') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image</*', 'max' => '2048']) !!}
        </div>

        <p>la imagen no debe superar los dos 2MB</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>