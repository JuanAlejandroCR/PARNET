@extends('sidebar-admin')
@section('title', 'Sugerencias')
@section('content')
    <div class="row text-white">
        <div class="col-12 d-flex justify-content-between mt-3">
            <h1>Sugerencias</h1>
        </div>
    </div>
    <div class="row text-white mt-3">
        <div class="col-12 d-flex gap-2">
            <a class="btn btn-blue" href="{{ route('excel') }}">Exportar Excel</a>
            <a class="btn btn-blue" href="{{ route('pdf') }}" target="_blank">Exportar PDF</a>
        </div>
    </div>
    <div class="row text-white mt-3">
        <div class="col-12">
            <table id="suggestions" class="table w-100 table-striped table-success">
                <thead>
                    <th>Nombre</th>
                    <th>Sugerencia</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/sugerencias/index.js') }}"></script>
@endpush
