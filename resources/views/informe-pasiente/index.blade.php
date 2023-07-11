@extends('layouts.content')

@section('template_title')
    Informe Pasiente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Informe Pasiente') }}
                            </span>

                             <div class="float-right">
                               

                                <div class="dropdown">
                          <button  type="button" data-coreui-toggle="dropdown" aria-expanded="false" class="btn btn-primary btn-sm float-right"  data-placement="left">Accion</button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('informe-pasientes.create') }}">Registrar</a></li>
                            <li><a class="dropdown-item" href="{{ route('reporte.pasientes') }}">Generar Reporte</a></li>
                          </ul>
                        </div>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                    <form method="GET" action="{{route('informe-pasientes.index') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                            <select class="form-control" name="criterio">
                                <option value="nombres">Nombre</option>
                                <option value="nivel">Curso</option>
                                <option value="nombre">Insumo</option>


    </select>
  <input type="text" class="form-control"  name="buscar" placeholder="Texto">
  <button class="btn btn-outline-info " type="submit" >Buscar</button>
  </div>

                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Estudiante</th>
                                        <th>Curso</th>
										<th>Motivo emergecia</th>
										<th>Insumo</th>
										<th>Cantidad</th>
                                        <th>Fecha de atencion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informePasientes as $informePasiente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $informePasiente->estudiante->nombres }}</td>
                                            <td>{{ $informePasiente->estudiante->nivel }}</td>
											<td>{{ $informePasiente->motivo_emergecia }}</td>
											<td>{{ $informePasiente->insumosMedico->nombre }}</td>
											<td>{{ $informePasiente->cantidad }}</td>
                                            <td>{{ $informePasiente->created_at }}</td>

                                            <td>
                                                <form action="{{ route('informe-pasientes.destroy',$informePasiente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('informe-pasientes.edit',$informePasiente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                  
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $informePasientes->links() !!}
            </div>
        </div>
    </div>
@endsection
