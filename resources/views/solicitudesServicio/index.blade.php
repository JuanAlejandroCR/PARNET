@extends('sidebar-admin')
@section('title', 'Solicitudes de servicio por área')
@section('content')
    <div class="row mb-3">
        <div class="col-12 d-flex justify-content-between text-white ">
            <h1>Solicitudes de servicio por área</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="servicesRequests" class="table w-100 table table-striped table-success">
                <thead>
                    <th>Área sugerida</th>
                    <th>Correo del que lo sugiere</th>
                    <th>Sugerencia de servicio</th>
                    <th>Fecha</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/solicitudesServicio/index.js') }}"></script>
@endpush
