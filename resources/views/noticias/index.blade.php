@extends('sidebar-admin')
@section('title', 'Noticias')
@section('content')
    <div class="row text-white">
        <div class="col-12 d-flex justify-content-between">
            <h1>Noticias</h1>
            <a href="{{ route('noticias.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>

    <div class="row text-white">
        <div class="col-12">
            <table id="news" class="table table-success table-striped w-100">
                <thead>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Activa</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/noticias/index.js') }}"></script>
@endpush
