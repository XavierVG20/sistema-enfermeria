@extends('layouts.content')

@section('template_title')
    {{ $informePasiente->name ?? "{{ __('Show') Informe Pasiente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Informe Pasiente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('informe-pasientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Estudiante:</strong>
                            {{ $informePasiente->id_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo Emergecia:</strong>
                            {{ $informePasiente->motivo_emergecia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Insumo:</strong>
                            {{ $informePasiente->id_insumo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $informePasiente->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
