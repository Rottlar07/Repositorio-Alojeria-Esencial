<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $reserva->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('Apellidos', $reserva->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dni') }}
            {{ Form::text('Dni', $reserva->Dni, ['class' => 'form-control' . ($errors->has('Dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni', 'maxlength' => '8']) }}
            {!! $errors->first('Dni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::email('Correo', $reserva->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $reserva->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular', 'maxlength' => '9']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Evento') }}
            {{ Form::select('Evento_id', $eventos, $reserva->Evento_id, ['class' => 'form-control' . ($errors->has('Evento_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Evento']) }}
            {!! $errors->first('Evento_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user_id">
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>