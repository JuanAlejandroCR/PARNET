@extends('layouts.base')
@section('title', 'Actualizar sugerencia')
@section('body')
    @include('sugerencias.form')
    <button type="button" class="btn btn-success" onclick="updateSuggestions({{ $suggestion->id }});">Editar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/sugerencias/createUpdate.js') }}"></script>
@endpush
