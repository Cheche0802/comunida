{!! Form::hidden('user_id', auth()->user()->id) !!}

<div class="form-group">
    {!! Form::label('title', 'Titulo')!!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el titulo de la predica'])!!}
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
    <div class="col">
        {!! Form::label('name', 'Nombre del predicardor')!!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el nombre del predicador'])!!}    
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col">
        {!! Form::label('date', 'Fecha de predica')!!}
        {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Ingresar la fecha'])!!}    
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
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
        <div class="form-group {{ $errors->has('iframe') ? 'has-error' : '' }}">

           {{--  <label>Contenido(iframe)</label>
            <textarea rows="2" name="iframe" id="ckeditor" class="form-control"
                placeholder="Ingresa contenido embebido (iframe) de audio o video">{{ $preach->iframe)}}</textarea> --}}

            {!! Form::label('iframe', 'Contenido(iframe):') !!}
            {!! Form::textarea('iframe', null, ['class' => 'form-control']) !!}

            {!! $errors->first('iframe', '<span class="help-block">:message</span>') !!}

        </div>
    </div>    
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>