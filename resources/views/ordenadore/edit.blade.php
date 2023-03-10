@extends('layouts.app')

@section('template_title')
    Update Ordenadore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">

                        <span class="card-title">Editar Ordenador</span>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ordenadores.update', $ordenadore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ordenadore.form')

                            <div class="box-footer mt-3">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
