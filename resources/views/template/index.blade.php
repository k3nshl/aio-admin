<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
    <title>AIO | Panel Administrativo</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo-img.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text"><a href="{{route('user.index')}}">Dashboard</a></h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Administrativo</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="fadeIn animated bx bx-group"></i>Usuarios</a>
                        </li>
                        <li> <a href="#"><i class="lni lni-website"></i>Sitios Web</a>
                        </li>
                        <li> <a href="#"><i class="fadeIn animated bx bx-bar-chart-alt-2"></i>Aliados
                                Estratégicos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Contenido</div>
                    </a>
                    <ul>
                        <li> <a href="#"><i class="fadeIn animated bx bx-news"></i>Noticias</a>
                        </li>
                        <li> <a href="#"><i class="fadeIn animated bx bx-calendar-event"></i>Eventos</a>
                        </li>
                        <li> <a href="#"><i class="fadeIn animated bx bx-slider-alt"></i>Sliders</a>
                        </li>
                        <li> <a href="#"><i class="fadeIn animated bx bx-grid-alt"></i>Categorias</a>
                        </li>
                        <li> <a href="#"><i class="fadeIn animated bx bx-info-square"></i>Cuadros Informativos</a>
                        </li>
                        <li> <a href="#"><i class="fadeIn animated bx bx-copy-alt"></i>Páginas de Información</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="profile.html" title="Presiona para ver tu perfil">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Mi Perfil</div>
                    </a>
                </li>

            </ul>
            <!--end navigation-->
            <li class="logout-container metismenu">
                <a href="login.html" title="Presiona para cerrar tu sesión">
                    <div class="parent-icon"><i class="bx bx-log-out-circle"></i>
                    </div>
                    <div class="menu-title">Cerrar Sesión</div>
                </a>
            </li>
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>

            @include('livewire.layout.navigation')

        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!--end page wrapper -->
        <!--start notifications-->

        <!--end notifications -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © <span id="current-date"></span>. Todos los derechos reservados <b>AIO</b>.
            </p>
            <div
                class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2 show-alerts">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-success">Usuario Registrado</h6>
                        <div>Se ha registrado exitosamente el usuario</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <!--<div class="switcher-wrapper">
  <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
  </div>
  <div class="switcher-body">
   <div class="d-flex align-items-center">
    <h5 class="mb-0 text-uppercase">Personalizar Tema</h5>
    <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
   </div>
   <hr />
   <h6 class="mb-0">Estilos</h6>
   <hr />
   <div class="d-flex align-items-center justify-content-between">
    <div class="form-check">
     <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
     <label class="form-check-label" for="lightmode">Modo Claro</label>
    </div>
    <div class="form-check">
     <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
     <label class="form-check-label" for="darkmode">Modo Oscuro</label>
    </div>
    <div class="form-check">
     <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
     <label class="form-check-label" for="semidark">Semi Oscuro</label>
    </div>
   </div>
   <hr />
   <div class="form-check">
    <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
    <label class="form-check-label" for="minimaltheme">Minimalista</label>
   </div>
   <hr />
   <h6 class="mb-0">Colores para el header</h6>
   <hr />
   <div class="header-colors-indigators">
    <div class="row row-cols-auto g-3">
     <div class="col">
      <div class="indigator headercolor1" id="headercolor1"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor2" id="headercolor2"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor3" id="headercolor3"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor4" id="headercolor4"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor5" id="headercolor5"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor6" id="headercolor6"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor7" id="headercolor7"></div>
     </div>
     <div class="col">
      <div class="indigator headercolor8" id="headercolor8"></div>
     </div>
    </div>
   </div>

   <hr />
   <h6 class="mb-0">Fondo de la barra lateral</h6>
   <hr />
   <div class="header-colors-indigators">
    <div class="row row-cols-auto g-3">
     <div class="col">
      <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
     </div>
     <div class="col">
      <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
     </div>
    </div>
   </div>

  </div>
 </div>-->
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>
