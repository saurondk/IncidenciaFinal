<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Incidencias') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
</head>
<body>
   
    <div class="d-flex justify-content-between" style="height: 100%; margin:0; padding:0;">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" >
              <a href="{{route('incidencias.index')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              
                <span class="fs-4">Incidencias</span>
              </a>
      
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">

                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Inicar Sesión') }}</a>

                              </li>
                          @endif
      
                          @if (Route::has('register'))
                              <li class="nav-item">

                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>

                              </li>
                          @endif
                      @else
         
              <ul class="nav nav-pills flex-column mb-auto">
                
                
                <li class="nav-item">
                    <br>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('alumnos.index') }}">  <div class="d-grid gap-2"><button class="btn btn-secondary">Alumno</button></div></a>
                  </li>
                  <br>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('aulas.index') }}"><div class="d-grid gap-2"><button class="btn btn-secondary">Aula</button></div></a>
                  </li>
                  <br>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('incidencias.index') }}"><div class="d-grid gap-2"><button class="btn btn-secondary">Incidencia</button></div></a>
                  </li>
                  <br>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('ordenadores.index') }}"><div class="d-grid gap-2"><button class="btn btn-secondary">Ordenadores</button></div></a>
                  </li>
                  <br>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('users.index') }}"><div class="d-grid gap-2"><button class="btn btn-secondary">Usuarios</button></div></a>
                  </li>
                  <br>
                </li>
              </ul>
              
              <li class="dropdown ms-2" >
                  <a id="navbarDropdown" class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <button class="btn btn-danger">{{ Auth::user()->name }}</button>  
                  </a>
                  <br>
              
            
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </div>

        <main class=" mt-5" style="width: 100%;">
            @yield('content')
        </main>
    </div>
    
    
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
      
</body>
</html>




      <!-- Aquí va el contenido de la zona nav -->
   
    
    