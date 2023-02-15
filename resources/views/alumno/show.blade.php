@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $alumno->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $alumno->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ordenador Id:</strong>
                            {{ $alumno->ordenador_id }}
                        </div>
                        <div class="form-group">
                            <strong>Aula Id:</strong>
                            {{ $alumno->aula_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
