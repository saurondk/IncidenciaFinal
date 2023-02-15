@extends('layouts.app')

@section('template_title')
    Create User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('user.form')
                            <div class="form-group">
                                {!! Form::label('password', 'Contraseña:') !!}
                                {!! Form::password('password' ,['class' => 'form-control']) !!}
                            </div>
                            <div class="box-footer mt-3">
                                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
