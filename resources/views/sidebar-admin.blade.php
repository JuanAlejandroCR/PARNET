@extends('layouts.base')
@section('title', 'sidebar')

@section('body')
    <div class="central-section">
        <div class="row head" style="z-index: 999; position: relative;">
            <div class="col-5 col-md-3 d-flex align-items-center">
                <img src="{{ asset('assets/imagen2.png') }}" alt="logotipo" class="logotipo">
                <img src="{{ asset('assets/linea.png') }}" alt="linea" class="linea">
            </div>
            <div class="col-7 col-md-7 text-center row ">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <p class="mt-1 titulo1">PARNET INGENIERÍA S.A DE C.V.</p>
                </div>
                <div class="col-12 d-none d-md-block">
                    <p class="mt-2 titulo2">Telecomunicaciones, Voz, Datos, Fibra Óptica.</p>
                </div>

            </div>
            <div class="col-md-2 d-md-flex align-items-md-end justify-content-md-end d-none d-md-block w-100">
                <img src="{{ asset('assets/antenas.png') }}" alt="antenas" class="antenas">
            </div>
        </div>
        <div class="row linea-mensajes text-center" style="z-index: 999; position: relative;">
        </div>
        <div class="row">
            <div class="wrapper">
                <!-- Sidebar  -->
                <nav id="sidebar" class="bg-blue">
                    <ul class="list-unstyled components">
                        <li class="mt-3">
                            <a href="{{ route('graphs') }}" class="btn">Dashboard</a>
                            <a href="{{ route('productos.index') }}" class="btn">Productos</a>
                            <a href="{{ route('areas.index') }}" class="btn">Áreas</a>
                            <a href="{{ route('sugerencias.index') }}" class="btn">Sugerencias</a>
                            <a href="{{ route('servicios.index') }}" class="btn">Servicios</a>
                            <a href="{{ route('noticias.index') }}" class="btn">Noticias</a>
                            <a href="{{ route('solicitudes_servicios.index') }}" class="btn">Solicitudes servicios</a>
                        </li>

                        <li class="px-3 bg-blue mb-3  text-center">
                            <span class="p-contol ms-2 me-2" style="font-size: 10px; font-style:italic;">Copyright
                                2012</span>
                        </li>
                    </ul>

                </nav>

                <!-- Page Content  -->
                <div id="content">

                    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
                        <div class="container-fluid">

                            <button type="button" id="sidebarCollapse" class="btn btn-blue ">
                                <i class="fas fa-align-left"></i>
                            </button>
                            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link menu-tabs me-2" aria-current="page" href="{{ route('pagina-principal') }}">Página
                                            principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menu-tabs me-2" href="#">¿Quiénes
                                            somos?</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="#">Clientes</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('servicios') }}">Servicios</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('productos') }}">Productos</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2">Casos de
                                            Éxito</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2"
                                            href="{{ route('contactanos') }}">Contactos</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2">Socios</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="content-p">
                        {{-- <h1>vista prueba</h1> --}}
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
@endpush
