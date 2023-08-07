<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
     
      <div class="sidebar-brand d-none d-md-flex">
        <div class="sidebar-brand-full" width="100" height="36" alt="CoreUI Logo">
        <img decoding="async" src="https://i0.wp.com/uecec.edu.ec/wp-content/uploads/2020/09/cropped-logo-cec-por2.png?fit=32%2C32&#038;ssl=1"  width="60" height="46" >
</div>
        <div class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <img decoding="async" src="https://i0.wp.com/uecec.edu.ec/wp-content/uploads/2020/09/cropped-logo-cec-por2.png?fit=32%2C32&#038;ssl=1" >
</div>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        
        <li class="nav-title">Navegacion</li>
        <li class="nav-item {{ ! Route:: is('home') ?: 'active' }}"><a class="nav-link" href="{{ route('home') }}">
        <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/node_modules/@coreui/icons/sprites/free.svg#cil-speedometer ') }}"></use>
        </svg>
         Inicio</a></li>

        <li class="nav-item {{ ! Route:: is('estudiantes.index') ?: 'active' }}"><a class="nav-link" href="{{ route('estudiantes.index') }}">
        <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/node_modules/@coreui/icons/sprites/free.svg#cil-pencil ') }}"></use>
        </svg>
         Registro estudiantes</a></li>
            <li class="nav-item {{ ! Route:: is('insumos-medicos.index') ?: 'active' }}"><a class="nav-link" href="{{ route('insumos-medicos.index') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/node_modules/@coreui/icons/sprites/free.svg#cil-cursor ') }}"></use>
            </svg>
         Registro insumos</a></li>
            <li class="nav-item {{ ! Route:: is('informe-pasientes.index') ?: 'active' }}"><a class="nav-link" href="{{ route('informe-pasientes.index') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('admin/node_modules/@coreui/icons/sprites/free.svg#cil-notes ') }}"></use>
            </svg>
         Registro enfermeria</a></li>

       
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
