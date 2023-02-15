@extends('layouts.app')

@section('template_title')
    Ordenadore
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordenadores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ordenadores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Aula') }}
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
                                        
										<th>Numero</th>
										<th>Nombre de Aula</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenadores as $ordenadore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ordenadore->numero }}</td>
											<td>{{ $ordenadore->aula->nombre }}</td>

                                            <td>
                                                <form action="{{ route('ordenadores.destroy',$ordenadore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ordenadores.show',$ordenadore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ordenadores.edit',$ordenadore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ordenadores->links() !!}
            </div>
        </div>
    </div>
@endsection
