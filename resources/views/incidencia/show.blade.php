@extends('layouts.app')

@section('template_title')
    {{ $incidencia->name ?? 'Show Incidencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Incidencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('incidencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Incidencia:</strong>
                            {{ $incidencia->incidencia }}
                        </div>
                        <div class="form-group">
                            <strong>Ordenador Id:</strong>
                            {{ $incidencia->ordenador_id }}
                        </div>
                        <div class="form-group">
                            <strong>Aula Id:</strong>
                            {{ $incidencia->aula_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $incidencia->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
