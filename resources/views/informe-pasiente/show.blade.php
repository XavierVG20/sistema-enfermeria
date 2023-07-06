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
                            <span class="card-title">{{ __('Detalle') }} Informe Pasiente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('informe-pasientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $informePasiente->estudiante->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Causa:</strong>
                            {{ $informePasiente->is_asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Insumo:</strong>
                            {{ $informePasiente->insumosMedico->nombre }}
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
