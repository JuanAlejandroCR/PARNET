@extends('sidebar-admin')
@section('title', 'Crear noticia')
@section('content')
    @include('noticias.form');
    <button type="button" class="btn btn-success" onclick="createNews();">Agregar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/noticias/createUpdate.js') }}"></script>
@endpush