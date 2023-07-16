@extends('layouts.content')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiante') }}
                            </span>

                             <div class="float-right">
                              
                                <div class="dropdown">
                          <button  type="button" data-coreui-toggle="dropdown" aria-expanded="false" class="btn btn-primary btn-sm float-right"  data-placement="left">Accion</button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('estudiantes.create') }}">Registrar</a></li>
                            <li><a class="dropdown-item" href="{{ route('reporte.estudiantes') }}">Generar Reportes</a></li>
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

                   
 
                    <form method="GET" action="{{ route('estudiantes.index') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                            <select class="form-control" name="criterio">
                                <option value="nombres">Estudiante</option>
                                <option value="nivel">Curso</option>
                                <option value="n_representante">Representante</option>

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
										<th>Representante</th>
										<th>Celular-Representant</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudiante->nombres }}</td>
											<td>{{ $estudiante->nivel }}</td>
											<td>{{ $estudiante->n_representante }}</td>
											<td>{{ $estudiante->celular }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
