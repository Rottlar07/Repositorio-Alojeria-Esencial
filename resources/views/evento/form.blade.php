<div class="box box-info padding-1">
    <div class="box-body ">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $evento->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::text('Categoria', $evento->Categoria, ['class' => 'form-control' . ($errors->has('Categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('Categoria', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Restriccion') }}
            {{ Form::text('Restriccion', $evento->Restriccion, ['class' => 'form-control' . ($errors->has('Restriccion') ? ' is-invalid' : ''), 'placeholder' => 'Restriccion']) }}
            {!! $errors->first('Restriccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('Fecha', $evento->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::time('Hora', $evento->Hora, ['class' => 'form-control' . ($errors->has('Hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('Hora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            {{ Form::text('Monto', $evento->Monto, ['class' => 'form-control' . ($errors->has('Monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('Monto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Aforo') }}
            {{ Form::number('Aforo', $evento->Aforo, ['class' => 'form-control' . ($errors->has('Aforo') ? ' is-invalid' : ''), 'placeholder' => 'Aforo']) }}
            {!! $errors->first('Aforo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <label for="Foto">Foto</label>
            @if(isset($evento->Foto))
            <img src="{{ asset('storage').'/'.$evento->Foto }}" width="200px" alt="">
            @endif
            <input type="file" name="Foto" id="Foto">
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>