@extends('layouts.app')

@section('template_title')
    Incidencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Incidencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('incidencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Incidencia</th>
										<th>Nº Ordenador</th>
										<th>Aula</th>
										<th>Profesor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incidencias as $incidencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $incidencia->incidencia }}</td>
											<td>{{ $incidencia->ordenadore->numero }}</td>
											<td>{{ $incidencia->aula->nombre }}</td>
											<td>{{ $incidencia->user->name }}</td>

                                            <td>
                                                <form action="{{ route('incidencias.destroy',$incidencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('incidencias.show',$incidencia->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('incidencias.edit',$incidencia->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $incidencias->links() !!}
            </div>
        </div>
    </div>
@endsection
