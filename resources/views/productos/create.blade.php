@extends('sidebar-admin')
@section('title', 'Productos')
@section('content')
    @include('productos.form')
    <button class="btn btn-success" onclick="createProduct();">Agregar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/productos/createUpdate.js') }}"></script>
@endpush
