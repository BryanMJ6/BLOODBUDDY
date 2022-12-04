<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

<div class="box box-info padding-1 servicio">
    <div class="box-body">
        
    <h5>
    <div class="select">
                Me Registro como
                <label id="soy" for="soy"></label>
                <div class="input-group mb-3">
                    <select id="soy" name="soy" class="form-control form-select" aria-label="Registrandome como">
                        <option>Donante</option>
                        <option>Paciente</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('nombres') }}
                {{ Form::text('nombres', $donante->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa tus Nombres']) }}
                {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('apellidos') }}
                {{ Form::text('apellidos', $donante->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa tusApellidos']) }}
                {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('edad') }}
                {{ Form::text('edad', $donante->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa tu Edad']) }}
                {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $donante->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa tu Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('email') }}
                {{ Form::text('email', $donante->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa tu Email']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="select">
                Soy donante de
                <label id="donante" for="donante"></label>
                <div class="input-group mb-3">
                    <select id="donante" name="donante" class="form-control form-select" aria-label="donante">
                        <option>Sangre</option>
                        <option>Plasma</option>
                        <option>Otro</option>
                    </select>
                </div>
            </div>
            <div class="select">
                Sexo
                <label id="sexo" for="sexo"></label>
                <div class="input-group mb-3">
                    <select id="sexo" name="sexo" class="form-control form-select" aria-label="sexo">
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>
            <div class="select">
                Tipo de Sangre
                <label id="tipo_sangre" for="tipo_sangre"></label>
                <div class="input-group mb-3">
                    <select id="tipo_sangre" name="tipo_sangre" class="form-control form-select"
                        aria-label="tipo_sangre">
                        <option>A+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('dui') }}
                {{ Form::text('dui', $donante->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa tu numero de Dui']) }}
                {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('padecimiento') }}
                {{ Form::text('padecimiento', $donante->padecimiento, ['class' => 'form-control' . ($errors->has('padecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Padecimiento']) }}
                {!! $errors->first('padecimiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </h5>

    </div>

    <div class="box-footer mt20 ">
        <button type="submit" class="btn btn-danger">Registrarme Como donante</button>
        <a class="btn btn-dark" href="http://127.0.0.1:8000/">Ya estoy registrado Volver a Inicio</a>
    </div>
</div>