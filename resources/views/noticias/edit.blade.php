@extends('sidebar-admin')
@section('title', 'Actualizar noticia')
@section('content')
    @include('noticias.form')
    <button type="button" class="btn btn-success" onclick="updateNews({{ $news->id }});">Editar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/noticias/createUpdate.js') }}"></script>
@endpush
