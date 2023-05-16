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
            <marquee>
                <p class="mensaje">Bienvenido a <span style="color:yellow">PARNET Ingeniería S.A. de C.V.</span>
                    Continuamente
                    actualizamos el Sitio. Revisa nuestros estándares de calidad <span style="color:yellow">ISO 9000.</span>
                </p>
            </marquee>
        </div>
        <div class="row">
            <div class="wrapper">
                <!-- Sidebar  -->
                <nav id="sidebar" class="bg-blue">
                    <ul class="list-unstyled components">
                        <li class="noticias align-items-center d-flex">
                            <img src="{{ asset('assets/mapa-mundo_left.png') }}" alt="mundo"><span
                                class="p-noticias ms-2 me-2">Noticias</span><img
                                src="{{ asset('assets/mapa-mundo_left.png') }}" alt="mundo">
                        </li>
                        <!--@fore
                            -->
                        <li class="mt-3">
                            <a href="#" class="control-panel d-flex align-items-center justify-content-center"><span
                                    class="p-control">Control Panel Parnet</span></a>
                        </li>

                        <li class="areas mt-3">
                            <div class="areas2 text-center w-100">Areas ParNet</div>
                            <a href="{{ route('certificaciones') }}" class="btn btn-area mt-3">Certificaciones</a>
                            <a class="btn btn-area">Telecomunicaciones</a>
                            <a class="btn btn-area">Redes Eléctricas</a>
                            <a class="btn btn-area">Circuito Cerrado TV</a>
                            <a class="btn btn-area">Corriente Regulada</a>
                            <a class="btn btn-area">Data Centers</a>
                            <a class="btn btn-area">Fibra Óptica</a>
                            <a class="btn btn-area">Cables Estructurados</a>
                            <a class="btn btn-area">Pólizas</a>
                            <a class="btn btn-area">Outsourcing</a>
                            <a href="{{ route('login') }}" class="btn btn-area">Administración</a>
                        </li>

                        <li class="mt-3">
                            <a href="#" class="control-panel d-flex align-items-center justify-content-center"><span
                                    class="p-control" style="text-decoration: none">Marcas y proveedores</span></a>
                        </li>
                        <li class="px-3 mt-3 bg-blue" style="line-height: 12px;">
                            <span class="mensaje" style="font-size: 10px; font-style:italic;"><span
                                    style="color:yellow">PANDUIT™</span> es líder mundial en el diseño y fabricación de
                                productos para cableado y comunicaciones. [leer más...]</span>
                        </li>
                        <li class="px-3 mt-3 bg-blue mb-3" style="line-height: 12px;">
                            <span class="mensaje" style="font-size: 10px; font-style:italic;"><span
                                    style="color:yellow">Cisco Systems</span> es líder mundial en redes para internet.[Leer
                                más...]</span>
                        </li>

                        <li class="px-3 mt-3 bg-blue">
                            <img src="{{ asset('assets/img_conect.png') }}" alt="conectados"><span
                                class="mensaje ms-2 me-2"
                                style="font-size: 10px; font-style:italic; color:white; font-size:15px;">Conectados:</span>

                        </li>
                        <li class="px-3 bg-blue">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="{{ asset('assets/img_visitas.png') }}" alt="visitas"><span class="mensaje ms-2 me-2"
                                style="font-size: 10px; font-style:italic; color:white; font-size:15px;">Visitas:</span>
                                </div>
                                <div class="col-md-1">
                                    <input type="text" value="1" style="border: none; background:transparent; color:white;" disabled>
                                </div>
                            </div>
                        </li>
                        <li class="px-3 bg-blue mb-3  text-center">
                            <span class="p-contol ms-2 me-2" style="font-size: 10px; font-style:italic;">© Copyright
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
                                        <a class="nav-link menu-tabs me-2" aria-current="page" href="{{ route('principal') }}">Página
                                            principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('quienes_somos') }}">¿Quiénes
                                            somos?</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('clientes') }}">Clientes</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('servicios') }}">Servicios</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('productos') }}">Productos</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="#">Casos de
                                            Éxito</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2"
                                            href="{{ route('contactanos') }}">Contactos</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link menu-tabs me-2" href="{{ route('sugerencias.create') }}">Sugerencias</a>
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

        <div class="row">
            <footer class="text-white text-center footer d-flex align-items-center ">
                <!-- Grid container -->
                <div class="container">
                    <section>

                        <img src="{{ asset('assets/PARNET_LOGO3_blanco.png') }}" alt="logo"
                            class="d-none d-md-inline me-4" width="98px">
                        <a class="btn btn-sm ms-md-5 p-control border-end d-none d-md-inline " href="{{ route('principal') }}"
                            role="button">Página
                            principal</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="{{ route('principal') }}"
                            role="button"><i class="fas fa-home"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="{{ route('quienes_somos') }}"
                            role="button">¿Quiénes
                            somos?</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="{{ route('quienes_somos') }}"
                            role="button"><i class="fas fa-user-tie"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="{{ route('clientes') }}"
                            role="button">Clientes</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="{{ route('clientes') }}"
                            role="button"><i class="fas fa-people-arrows"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="{{ route('servicios') }}"
                            role="button">Servicios</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="{{ route('servicios') }}"
                            role="button"><i class="fas fa-people-carry"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="{{ route('productos') }}"
                            role="button">Productos</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="{{ route('productos') }}"
                            role="button"><i class="fas fa-server"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="#!"
                            role="button">Casos de
                            Éxito</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="#!"
                            role="button"><i class="fas fa-check-circle"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="{{ route('contactanos') }}"
                            role="button">Contacto</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="{{ route('contactanos') }}"
                            role="button"><i class="far fa-envelope"></i></a>
                        <a class="btn btn-sm  p-control border-end d-none d-md-inline" href="#!"
                            role="button">Soporte</a>
                        <a class="btn btn-sm ms-md-5 d-inline d-md-none btn-link btn-floating" href="#!"
                            role="button"><i class="fas fa-headset"></i></a>

                        <img src="{{ asset('assets/Vista (158).png') }}" alt="logo" class="d-none d-md-inline"
                            width="60px">
                        {{-- <img src="{{ asset('assets/linea.png') }}" alt="linea" class="d-none d-md-inline"
                            > --}}
                    </section>
                </div>
                <!-- Grid container -->
            </footer>
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
