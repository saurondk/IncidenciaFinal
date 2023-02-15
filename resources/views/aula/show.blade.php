@extends('layouts.app')

@section('template_title')
    {{ $aula->name ?? 'Show Aula' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Listado detallado del aula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aulas.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $aula->nombre }} <br>
                            <strong>Id:</strong>
                            {{ $aula->id }} <br>
                            <strong>Fecha de creacion:</strong>
                            {{ $aula->created_at }}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
