@extends('sidebar')
@section('title', 'Servicios')
@section('content')
<div class="row mb-3">
    <div class="col-5 col-md-3 titulos">
        <p style="titulos" class="ms-3">Servicios</p>
    </div>
</div>
    @include('solicitudesServicio.form');
    <div class="text-center">
    <button type="button" class="btn btn-success" onclick="createServiceRequest();">Enviar</button>
    </div>
    <script src="{{ @asset('js/solicitudesServicio/createUpdate.js') }}" defer></script>
@endsection
