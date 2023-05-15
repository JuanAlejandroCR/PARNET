@extends('sidebar')
@section('title', 'Inicio')
@section('content')
    <div class="row">
        <div class="col-5 col-md-3 titulos">
            <p style="titulos" class="ms-3">Página principal</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/representacion_flash.png') }}" style="height:257px;"
                            class="d-block w-100" alt="slide1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/Fibra-optica.jpeg') }}" style="height:257px; object-fit: cover;"
                            class="d-block w-100" alt="slide2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/5421.jpg') }}" style="height:257px;object-fit: cover;"
                            class="d-block w-100" alt="slide3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row mt-4 text-white">
        <div class="col-12 col-md-4 d-flex justify-content-center">
            <img src="{{ asset('assets/Callcentre.png') }}" alt="callcenter">
        </div>
        <div class="col-12 col-md-8 text-center">
            <p class="p-control" style="color: yellow; text-decoration:none !important;font-size:16px !important;">
                ¿Cual es el objetivo principal de PARNET?
            </p>
            <p style="text-align: justify; font-size:14px !important;">
                Nuestra empresa tiene como objetivo suministrar Soluciones
                Integrales en Telecomunicaciones (Voz y datos), eléctricas que
                resuelvan las necesidades empresariales con productos,
                aplicaciones, servicios y tecnología de punta, la cual simplifique
                el trabajo al usuario final obteniendo una comunicación eficiente,
                de alta confiabilidad, incrementando los índices de productividad
                y competitividad de su empresa y del personal de la misma.
            </p>
            <p style="text-align: justify; font-size:14px !important;">
                Las fibras ópticas y los sistemas de comunicaciones, constituyen
                el desarrollo tecnológico más importante de los últimos años.
            </p>
        </div>
    </div>

    <div class="row mt-4 text-white mb-4">
        <div class="col-12 col-md-4 d-flex justify-content-center">
            <img src="{{ asset('assets/Imax.png') }}" alt="callcenter">
        </div>
        <div class="col-12 col-md-8 text-center">
            <p class="p-control" style="color: yellow; text-decoration:none !important;font-size:16px !important;">
                ¿Hay buena energía dentro de su empresa?
            </p>
            <p style="text-align: justify; font-size:14px !important;">
                Normalmente, las personas y los encargados de la informática
                en las empresas ven en los virus a los principales enemigos a
                combatir en aras de no perder información del negocio.
                No obstante, según la empresa de seguridad energética APC,
                el 60 por ciento de los daños de los equipos y la desaparición
                de datos en los computadores es ocasionada por problemas
                asociados a la energía eléctrica.
            </p>
            <p style="text-align: justify; font-size:14px !important;">
                Picos, sobrevoltajes, trasientes, interrupciones, apagones y distorsiones, entre otros, son algunos de los males más comunes que sufre la energía eléctrica y que 
                pueden mandar a la basura todas las inversiones que usted o su empresa han hecho en computadores, 
                televisores planos, teatros caseros, etc.
                
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12" style="font-size: 16px;color: yellow;">
            Con el afán de brindarle soluciones integrales, Parnet Ingeniería le ofrece desarrollo de 
software tales como: 
        </div>
        <div class="col-12 text-white" id="lista-principal">
            <ul>
                <li>Aplicaciones a la Medida</li>
                <li>Aplicaciones Web</li>
                <li>Aplicaciones Cliente-Servidor </li>
                <li>Desarrollo de Aplicaciones Multimedia</li>
                <li>Software de Nómina para el control total de sus empleados</li>
                <li>Aplicaciones mòviles para celulares y PDA's </li>
                <li>Bases de Datos</li>
              </ul>
        </div>
    </div>
@endsection
