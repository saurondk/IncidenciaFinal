<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $alumno->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $alumno->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aula_id', 'Aula') }}
            {{ Form::select('aula_id', $aulas, $alumno->aula_id, ['class' => 'form-control' . ($errors->has('aula_id') ? ' is-invalid' : ''), 'placeholder' => 'Aula']) }}
            {!! $errors->first('aula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group" id="form-group-ordenador-id" style="display:none">
            {{ Form::label('ordenador_id', 'Ordenador') }}
            {{ Form::select('ordenador_id', [], null, ['class' => 'form-control' . ($errors->has('ordenador_id') ? ' is-invalid' : ''), 'id' => 'ordenador_id']) }}
            {!! $errors->first('ordenador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt-2 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var aulaSelect = document.querySelector("select[name='aula_id']");
            var ordenadorDiv = document.querySelector(".form-group:nth-child(5)");

            ordenadorDiv.style.display = "none";

            aulaSelect.addEventListener("change", function() {
                if (this.value) {
                    ordenadorDiv.style.display = "block";
                } else {
                    ordenadorDiv.style.display = "none";
                }
            });
        });
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
