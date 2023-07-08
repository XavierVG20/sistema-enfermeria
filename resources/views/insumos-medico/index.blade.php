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
                                <a href="{{ route('insumosmedicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar') }}
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
                            <table class="table table-striped table-hover" id="example">
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
    
new DataTable('#example');
</script>

@endpush