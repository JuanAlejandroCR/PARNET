@extends('sidebar-admin')
@section('title', 'Actualizar producto')
@section('content')
    @include('productos.form')
    <button type="button" class="btn btn-success" onclick="updateProducts({{ $products->id }});">Editar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/productos/createUpdate.js') }}"></script>
@endpush
