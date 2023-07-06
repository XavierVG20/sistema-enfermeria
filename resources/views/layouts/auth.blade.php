<type html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('admin/css/rstilo.css') }}">
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.fondo{
    min-height: 100vh;
}
.fondo_menu{
    background-color: #212529;
}
.boton{
    color: white;
    border: 1px solid white;
    margin-left: 15px;
    text-decoration: none;
    padding: 6px 8px;
    border-radius: 8px;
    transition: .2s;
}
.boton:hover{
    border: 1px solid gray;
    color: gray;
}
.fondo-login{
    height: 400px;
    width: 100%;
    background-image: url(https://img.freepik.com/vector-gratis/antecedentes-medicos-limpios_53876-97927.jpg?w=2000);
    background-size: cover;
  background-repeat:no-repeat;
  background-position: center center;
}
.login{
    color: white;
    margin: auto;
    border: 1px solid gray;
    padding: 20px;
    border-radius: 6px;
    background-color: rgb(51, 47, 47);
}
.icon, .titulo{
    text-align: center;
    color: white;
}
.titulo{
    margin-bottom: 12px;
}
.icon .dog-icon{
    font-size: 50px;
    margin-bottom: 10px;
    color: white;
}
.box-eye{
    position: relative;
}
.box-eye button{
    border: none;
    position: absolute;
}
.changePassword{
    position: absolute;
    top: 12px;
    left: 270px;
    color: rgb(51, 47, 47);
    cursor: pointer;
}
</style>
</head>
<body>
    <div id="app" class='fondo-login' >
   



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@include('partials.scripts')
</html>