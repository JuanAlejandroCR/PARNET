@extends('sidebar-admin')
@section('title', 'Panel')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <a href="{{ route('productos.index') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-ethernet fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Productos</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de productos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="{{ route('areas.index') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-map fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Áreas</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de áreas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="{{ route('sugerencias.index') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-comment fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sugerencias</h5>
                                <p class="card-text">Búsqueda y exportación de sugerencias.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="{{ route('servicios.index') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-people-carry-box fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Servicios</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de servicios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="{{ route('noticias.index') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-newspaper fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Noticias</h5>
                                <p class="card-text">Alta, baja, edición y búsqueda de noticias.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="{{ route('solicitudes_servicios.index') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-comment fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Solicitudes servicios</h5>
                                <p class="card-text">Visualización de solicitudes de servicios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="{{ route('graphs') }}">
                <div class="card mb-3 rounded-5 bg-blue mt-3">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center mt-4 mt-md-0">
                            <i class="fa-solid fa-chart-line fa-3x" style="color: #387686"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Gráficas</h5>
                                <p class="card-text">Visualización de gráficas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    {{-- 
        <a href="{{ route('productos.index') }}">Productos</a>
        <a href="{{ route('areas.index') }}">Areas</a>
        <a href="{{ route('sugerencias.index') }}">Sugerencias</a>
        <a href="{{ route('servicios.index') }}">Servicios</a>
        <a href="{{ route('noticias.index') }}">Noticias</a>
        <a href="{{ route('solicitudes_servicios.index') }}">Solicitudes de servicio por área</a>
        <a href="{{ route('graphs') }}">Graficas</a> --}}
@endsection
