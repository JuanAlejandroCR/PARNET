@extends('sidebar-admin')
@section('title', 'Editar servicio')
@section('content')
    @include('servicios.form');
    <button type="button" class="btn btn-success" onclick="updateServices({{ $service->id }});">Editar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/servicios/createUpdate.js') }}"></script>
@endpush
