@extends('layouts.content')

@section('template_title')
    Insumos Medico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Insumos Medico') }}
                            </span>

                             <div class="float-right">
                               
                                <div class="dropdown">
                          <button  type="button" data-coreui-toggle="dropdown" aria-expanded="false" class="btn btn-primary btn-sm float-right"  data-placement="left">Accion</button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{  route('insumosmedicos.create') }}">Registrar</a></li>
                            <li><a class="dropdown-item" href="{{ route('reporte.insumos') }}">Generar Reporte</a></li>
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
                    <form method="GET" action="{{ route('insumosmedicos.index') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                            <select class="form-control" name="criterio">
                                <option value="nombre">Nombre</option>
                                <option value="descripcion">Descripcion</option>

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
                                        
										<th>Nombre</th>
										<th>Description</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($insumosMedicos as $insumosMedico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $insumosMedico->nombre }}</td>
											<td>{{ $insumosMedico->description }}</td>
											<td>{{ $insumosMedico->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('insumosmedicos.destroy',$insumosMedico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('insumosmedicos.edit',$insumosMedico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $insumosMedicos->links() !!}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        new DataTable('#example');
        $('#example').DataTable({
            "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
        })
    });
</script>

@endpush