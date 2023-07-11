@extends('layouts.content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
           

            <div class="card col-md-12 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                   
                  <img decoding="async" src="https://uecec.edu.ec/wp-content/uploads/2023/07/Bienvenidos.svg" width="1009" height="401" data-no-retina="" data-src-rs-ref="https://uecec.edu.ec/wp-content/uploads/2023/07/Bienvenidos.svg" style="height: 100%; width: 100%; text-align: left; line-height: 15px; letter-spacing: 0px; font-weight: 400; font-size: 9px; border-color: rgb(255, 255, 255); border-style: none; margin: 0px; border-radius: 0px; padding: 0px;" data-stylerecorder="true">
                    <h1>{{ auth()->user()->name }} </h1>
                  </div>
                </div>
              </div>
        
    </div>
</div>
@endsection
