@extends('sidebar-admin')
@section('title', 'Productos')
@section('content')
    <div class="row text-white">
        <div class="col-12 d-flex justify-content-between">
            <h1>Productos</h1>
            <a href="{{ route('productos_reporte.get') }}" target="_blank" class="btn btn-success">Reporte</a>
            <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12">
            <table id="products" class="table w-100 table-striped table-success">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Ficha técnica</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/productos/index.js') }}"></script>
@endpush
