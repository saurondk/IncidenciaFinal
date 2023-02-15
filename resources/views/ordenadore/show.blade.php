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
                            <span class="card-title">Show Ordenadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $ordenadore->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Aula Id:</strong>
                            {{ $ordenadore->aula_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
