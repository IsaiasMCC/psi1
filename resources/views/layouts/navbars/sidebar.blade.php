<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a class="simple-text logo-normal">
      {{ __('GIMNASIO BIDELGI') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">



      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link " data-toggle="collapse" href="#laravelExample1" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Adm. de Servicios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample1">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'grupos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('grupos.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Grupo de Entrenamiento') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'horarios' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('horarios.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Horario') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'disciplinas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('disciplinas.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Disciplina') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'categorias' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categorias.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Categoria') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'descuentos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('descuentos.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-noirmal"> {{ __('Descuento') }} </span>
              </a>
            </li>


          </ul>
        </div>
      </li>



      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample2" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Mantenimiento') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample2">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'casilleros' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('casilleros.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Casillero') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'salas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('salas.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Sala') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'aparatos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('aparatos.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Aparato') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management3') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample3" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Inscripcion') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample3">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'alquilercasilleros' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('alquileres.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Alquiler Casillero') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'inscripciones' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('inscripciones.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Inscripcion') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample4" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Adm. General') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample4">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'clientes' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('clientes.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Cliente') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'instructores' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('instructores.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal"> {{ __('Instructor') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'administradores' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('administradores.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal"> {{ __('Administrador') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'usuarios' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Usuario') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample6" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/logo1.jpg') }}"></i>
          <p>{{ __('Control General') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample6">
          <ul class="nav">

          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>