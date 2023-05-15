@extends('sidebar-admin')
@section('title', 'Actualizar area')
@section('content')
    @include('areas.form')
    <button type="button" class="btn btn-success" onclick="updateFields({{ $field->id }});">Editar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/areas/createUpdate.js') }}"></script>
@endpush
