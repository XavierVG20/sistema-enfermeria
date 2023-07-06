@extends('layouts.content')

@section('template_title')
    {{ __('Update') }} Insumos Medico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Insumos Medico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insumosmedicos.update', $insumosMedico->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('insumos-medico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
