@extends('layouts.content')

@section('template_title')
    {{ $insumosMedico->name ?? "{{ __('Show') Insumos Medico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Insumos Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('insumosmedicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $insumosMedico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $insumosMedico->description }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $insumosMedico->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
