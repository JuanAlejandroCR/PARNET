@extends('sidebar-admin')
@section('title', 'Áreas')
@section('content')
    <div class="row text-white">
        <div class="col-12 d-flex justify-content-between mt-3">
            <h1>Áreas</h1>
            <a href="{{ route('areas.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row text-white">
        <div class="col-12">
            <table id="fields" class="table w-100 table-striped table-success">
                <thead>
                    <th>Área</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/areas/index.js') }}"></script>
@endpush
