@extends('layouts.app')

@section('template_title')
    {{ $ordenadore->name ?? 'Show Ordenadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">

                            <span class="card-title">Detalles del ordenador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenadores.index') }}">Volver</a>

                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">

                            <strong>Número:</strong>
                            {{ $ordenadore->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Creado en :</strong>
                            {{$ordenadore->created_at}}
                        </div>
                        <div class="form-group">
                            <strong>Editado en:</strong>
                            {{$ordenadore->updated_at}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
