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
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres del estudiante</th>
										<th>Año Lectivo</th>
										<th>Nombres del Representante</th>
										<th>Celular del Representant</th>

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
