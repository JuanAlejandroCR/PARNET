@extends('sidebar-admin')
@section('title', 'Crear servicio')
@section('content')
    @include('servicios.form');
    <button type="button" class="btn btn-success" onclick="createServices();">Agregar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/servicios/createUpdate.js') }}"></script>
@endpush