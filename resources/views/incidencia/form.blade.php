<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('incidencia') }}
            {{ Form::text('incidencia', $incidencia->incidencia, ['class' => 'form-control' . ($errors->has('incidencia') ? ' is-invalid' : ''), 'placeholder' => 'Incidencia']) }}
            {!! $errors->first('incidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        @if ($incidencia->ordenador_id)
        <div class="form-group" style="display: none">
            {{ Form::label('aula_id', 'Aula') }}
            {{ Form::select('aula_id', $aulas, $incidencia->aula_id, ['class' => 'form-control' . ($errors->has('aula_id') ? ' is-invalid' : ''), 'placeholder' => 'Aula']) }}
            {!! $errors->first('aula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" id="form-group-ordenador-id" style="display: none">
            {{ Form::label('ordenador_id', 'Ordenador') }}
            {{ Form::text('ordeandor_id', $incidencia->ordenador_id, ['class' => 'form-control' . ($errors->has('incidencia') ? ' is-invalid' : ''), 'placeholder' => 'Incidencia']) }}
            {!! $errors->first('ordenador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @else
        <div class="form-group">
            {{ Form::label('aula_id', 'Aula') }}
            {{ Form::select('aula_id', $aulas, $incidencia->aula_id, ['class' => 'form-control' . ($errors->has('aula_id') ? ' is-invalid' : ''), 'placeholder' => 'Aula']) }}
            {!! $errors->first('aula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" id="form-group-ordenador-id" style="display:none">
            {{ Form::label('ordenador_id', 'Ordenador') }}
            {{ Form::select('ordenador_id', [], null, ['class' => 'form-control' . ($errors->has('ordenador_id') ? ' is-invalid' : ''), 'id' => 'ordenador_id']) }}
            {!! $errors->first('ordenador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
        <div class="form-group" style="display:none">
            {{ Form::label('usuario_id') }}
            {{ Form::text('usuario_id', auth()->id(),  ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id' ]) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#aula_id').addEventListener('change', function() {
                var aulaId = this.value;
                if (aulaId) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', "../aulas/" + aulaId + "/ordenadores", true);
                    xhr.responseType = 'json';
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            var data = xhr.response;
                            // console.log(data);
                            var ordenadorSelect = document.querySelector('#ordenador_id');
                            ordenadorSelect.innerHTML =
                                '<option value="">Seleccione un ordenador</option>';
                            data.forEach(element => {
                                var option = document.createElement('option');
                                console.log(element);
                                option.value = element.aula_id;
                                option.textContent = element.numero;
                                console.log(option);
                                ordenadorSelect.appendChild(option);
                            });
                            document.querySelector('#form-group-ordenador-id').style.display = 'block';
                        } else {
                            console.error(xhr.statusText);
                        }
                    };
                    xhr.onerror = function() {
                        console.error(xhr.statusText);
                    };
                    xhr.send();
                } else {
                    var ordenadorSelect = document.querySelector('#ordenador_id');
                    ordenadorSelect.innerHTML = '';
                    document.querySelector('#form-group-ordenador-id').style.display = 'none';
                }
            });
        });
    </script>
</div>
