@extends('layouts.content')
@section('template_title')
    {{ __('Create') }} Insumos Medico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Insumos Medico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insumos-medicos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('insumos-medico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
