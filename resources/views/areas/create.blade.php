@extends('sidebar-admin')
@section('title', 'Áreas')
@section('content')
    @include('areas.form')
    <button type="button" class="btn btn-success" onclick="createField();">Agregar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/areas/createUpdate.js') }}"></script>
@endpush