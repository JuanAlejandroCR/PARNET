@extends('layouts.base')
@section('title', 'Agregar sugerencia')
@section('body')
    @include('solicitudesServicio.form');
    <button type="button" class="btn btn-success" onclick="createServiceRequest();">Enviar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/solicitudesServicio/createUpdate.js') }}"></script>
@endpush