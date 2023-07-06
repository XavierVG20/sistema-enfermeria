@extends('layouts.content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
           

            <div class="card col-md-12 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                   

                    <h1> {{ __('Bienvendi@') }}</h1>
                    <h2>{{ auth()->user()->name }} </h2>
                  </div>
                </div>
              </div>
        
    </div>
</div>
@endsection
