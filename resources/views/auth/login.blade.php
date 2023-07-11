@extends('layouts.auth')

@section('content')

   
<div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
               
                        <h1>Login</h1>
                  <p class="text-medium-emphasis">Departamento de Enfermeria</p>
                  <form method="POST"  action="{{ route('login') }}">
                        @csrf
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="{{ asset('admin/node_modules/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
                      </svg></span>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="e-mail" autofocus>

                        @error('email')
                             <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror                 
                   </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="{{ asset('admin/node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked') }}"></use>
                      </svg></span>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                                         
                    </div>
                  <div class="row">

                  <div class="row mb-3">
                            <div class="col-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                    </button>
                    </div>
                    <div class="col-6 text-end">
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>NOSOTROS</h2>
                    <p>Somos una Unidad Educativa que trabaja sobre la base de una visión Humanista constructivista, en donde predomina la enseñanza de valores, dentro de un ambiente seguro, con respeto y buscando ser siempre el Segundo Hogar de nuestros estudiantes. </p>
                    <a class="btn btn-lg btn-outline-light mt-3" type="button" href="https://uecec.edu.ec/">Ver</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
 
   


@endsection 