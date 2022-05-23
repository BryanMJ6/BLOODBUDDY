<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $donante->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $donante->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $donante->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $donante->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $donante->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $donante->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('donante') }}
            {{ Form::text('donante', $donante->donante, ['class' => 'form-control' . ($errors->has('donante') ? ' is-invalid' : ''), 'placeholder' => 'Donante']) }}
            {!! $errors->first('donante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $donante->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_sangre') }}
            {{ Form::text('tipo_sangre', $donante->tipo_sangre, ['class' => 'form-control' . ($errors->has('tipo_sangre') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Sangre']) }}
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dui') }}
            {{ Form::text('dui', $donante->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('padecimiento') }}
            {{ Form::text('padecimiento', $donante->padecimiento, ['class' => 'form-control' . ($errors->has('padecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Padecimiento']) }}
            {!! $errors->first('padecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>