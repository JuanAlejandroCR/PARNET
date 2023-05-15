@extends('sidebar')
@section('title', 'Productos')
@section('content')
    <div class="row text-white mb-3">
        <div class="col-5 col-md-3 titulos">
            <p style="titulos" class="ms-3">Productos</p>
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

    <script src="{{ @asset('js/productos/publico.js')}}"></script>
@endsection
