@extends('layouts.content')

@section('template_title')
    {{ __('Update') }} Informe Pasiente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Informe Pasiente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('informe-pasientes.update', $informePasiente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('informe-pasiente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
