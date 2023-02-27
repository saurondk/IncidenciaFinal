@extends('layouts.app')

@section('template_title')
    Create Ordenadore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">

                        <span class="card-title">Crear Ordenador</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ordenadores.store') }}"  role="form" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            @include('ordenadore.form')
                            <div class="box-footer mt-3">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
