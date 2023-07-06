<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Estudiante') }}
            {{ Form::select('id_estudiante',$estudiantes, $informePasiente->id_estudiante, ['class' => 'form-control' . ($errors->has('id_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Nombres estudiantes']) }}
            {!! $errors->first('id_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Causa') }}
            {{ Form::text('is_asunto', $informePasiente->is_asunto, ['class' => 'form-control' . ($errors->has('is_asunto') ? ' is-invalid' : ''), 'placeholder' => 'Causa visita']) }}
            {!! $errors->first('is_asunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('insumo') }}
            {{ Form::select('id_insumo', $insumosMedicos,$informePasiente->id_insumo, ['class' => 'form-control' . ($errors->has('id_insumo') ? ' is-invalid' : ''), 'placeholder' => 'Insumo']) }}
            {!! $errors->first('id_insumo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $informePasiente->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>