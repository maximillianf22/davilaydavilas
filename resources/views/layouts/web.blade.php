<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>{{ config('app.name', 'Inmobiliaria Davila & Davila') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app">
        <!-- Navegacion-->
        @guest
        <div class="container-fluid bg-primary d-none d-sm-none d-md-block p-1">
            <ul class="nav">
              <li class="nav-item border-white border-right">
                <a class="nav-link active text-white" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contacto@davila&davila.com</a>
              </li>
              <li class="nav-item border-white border-right">
                <a class="nav-link text-white" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 3564254</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> 3005264875</a>
              </li>
            </ul>
        </div>

        <div class="container-fluid d-none d-sm-none d-md-block p-0">
            <ul class="nav justify-content-end">
                <li class="nav-item border-right">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Inicia Sesion') }}</a>
                </li>
            </ul>
        </div>
        @else
        <div class="container-fluid d-none d-sm-none d-md-block p-0" id="nav-border-login">
            <ul class="nav nav-border-login justify-content-end">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>   
            </ul>
        </div>
        @endguest


         <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand p-0" href="#">
            <div class="col-8 d-block d-sm-block d-md-none p-0">
            <img src="{{asset('img/titulodyd.png')}}" class="img-fluid">
            </div>
            <div class="col-5 text-lg-center d-none d-sm-none d-md-block pt-0 pb-0">
            <img src="{{asset('img/logodavila.jpg')}}" class="img-fluid">
            <img src="{{asset('img/titulodyd.png')}}" class="img-fluid">
             </div>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarText">
                <ul class="navbar-nav ml-auto p-1 border-primary border-bottom">
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark" href="{{ route('register') }}">Ventas</a>
                  </li>
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark" href="{{ route('arriendos') }}">Arriendos</a>
                  </li>
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark" href="{{ route('servicios') }}">Servicios</a>
                  </li>
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark" href="{{ route('proyectos') }}">Proyectos</a>
                  </li>
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark" href="{{ route('blog') }}">Blog</a>
                  </li>
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark text-nowrap" href="{{ route('quienes-somos') }}">¿Quienes Somos?</a>
                  </li>
                  <li class="nav-item pl-5">
                    <a class="nav-link text-dark" href="{{ route('Contacto') }}">Contactanos</a>
                  </li>
                </ul>
              </div>
        </nav>
      <!-- #Navegacion -->

        <main>
            @yield('content')
        </main>
    </div>
    <footer class="footer">
        <section class="div-1">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-12 text-center btn-wrapper p-2 mt-4 d-none d-sm-none d-md-block">
                <h1 class="redes sociales text-light"><big><strong style="font-family: Century Gothic">¿Eres Agente? </strong>¡Suscribete!</big></h1>
              </div>
              <div class="col-lg-12 text-center btn-wrapper p-2 mt-4  d-block d-sm-block d-md-none">
                <h4 class="redes sociales text-light"><big><strong style="font-family: Century Gothic">¿Eres Agente? </strong>¡Suscribete!</big></h4>
              </div>
            </div>
          </div>
        </section>
      <div class="container mt-4">
        <div class="row row-grid align-items-center mb-5 text-center">
          <div class="col text-center btn-wrapper p-2">
            <div class="text-center d-block d-sm-block d-md-none">
            <img src="{{asset('img/titulodyd.png')}}" class="img-fluid">
            </div>
            <div class="col-8 text-center d-none d-sm-none d-md-block">
            <img src="{{asset('img/logodavila.jpg')}}" class="img-fluid">
            <img src="{{asset('img/titulodyd.png')}}" class="img-fluid">
             </div>
          </div>
          <div class="col-lg-4 text-center btn-wrapper p-2">
            <h4 class="redes sociales text-primary"><big><strong class="font-italic">¡Siguenos!</strong></big></h4><hr>
            <button target="_blank" href="https://instagram.com/" class="btn btn-social-icon btn-instagram" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-instagram fa-4x"></i></span>
            </button>
            <button target="_blank" href="https://www.facebook.com/" class="btn btn-social-icon btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fa fa-facebook fa-4x"></i></span>
            </button>
            <button target="_blank" href="https://www.youtube.com/" class="btn btn-social-icon btn btn-youtube" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fa fa-youtube-play fa-4x"></i></span>
            </button>
          </div>
          <div class="col-lg-4 text-center btn-wrapper">
            <h5 class="text-primary"><i class="fa fa-map-signs fa-fw" aria-hidden="true"></i><b>Dirección</b></h5>
            <h6>Carrera 52 #76-167</h6><hr>
            <h5 class="text-primary"><i class="fa fa-calendar-o fa-fw" aria-hidden="true"></i><b>Horario de Atención</b></h5>
            <h6>De 8:00am a 6:30pm</h6><hr>
            <h5 class="text-primary"><i class="fa fa-phone fa-fw" aria-hidden="true"></i><b>Contáctanos</b></h5>
            <h6>356-4567 - (304)567-3425</h6>
          </div>
        </div>
        <hr><hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              &copy; 2020 <a href="" target="_blank">Inmobiliaria Davila & Davila S.A.S.</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://blog.creative-tim.com/" class="nav-link" target="_blank">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/style.js') }}" defer></script>

</body>

</html>