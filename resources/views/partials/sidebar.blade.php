<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
     
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        
        <li class="nav-title">Navegacion</li>
        <li class="nav-item {{ ! Route:: is('estudiantes.index') ?: 'active' }}"><a class="nav-link" href="{{ route('estudiantes.index') }}"><span class="nav-icon"></span> Registro estudiantes</a></li>
            <li class="nav-item {{ ! Route:: is('insumosmedicos.index') ?: 'active' }}"><a class="nav-link" href="{{ route('insumosmedicos.index') }}"><span class="nav-icon"></span> Registro insumos</a></li>
            <li class="nav-item {{ ! Route:: is('informe-pasientes.index') ?: 'active' }}"><a class="nav-link" href="{{ route('informe-pasientes.index') }}"><span class="nav-icon"></span> Registro enfermeria</a></li>

       
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
