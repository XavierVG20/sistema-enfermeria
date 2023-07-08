<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('htmlheader')
@include('partials.htmlheader')
@show
<body>
    <div id="app" class="bg-light min-vh-100 d-flex flex-row align-items-center">
   


        <div class="container">
            <main class="py-4">
            @yield('content')
            </main>
        </div>
    </div>
</body>
@include('partials.scripts')
</html>