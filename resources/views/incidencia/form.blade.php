<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('incidencia') }}
            {{ Form::text('incidencia', $incidencia->incidencia, ['class' => 'form-control' . ($errors->has('incidencia') ? ' is-invalid' : ''), 'placeholder' => 'Incidencia']) }}
            {!! $errors->first('incidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ordenador_id') }}
            {{ Form::text('ordenador_id', $incidencia->ordenador_id, ['class' => 'form-control' . ($errors->has('ordenador_id') ? ' is-invalid' : ''), 'placeholder' => 'Ordenador Id']) }}
            {!! $errors->first('ordenador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aula_id') }}
            {{ Form::text('aula_id', $incidencia->aula_id, ['class' => 'form-control' . ($errors->has('aula_id') ? ' is-invalid' : ''), 'placeholder' => 'Aula Id']) }}
            {!! $errors->first('aula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::text('usuario_id', $incidencia->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>