@extends('sidebar-admin')
@section('title', 'Dashboard')
@section('content')
    <div style="height: 100vh;">
        <div class="row text-white">
            <div class="col-12 col-md-6">
                {{-- Chart 1 Tickets by status --}}
                <div style="width: 25rem; height: 25rem" class="my-5">
                    <h3 class="text-center fs-4">Servicios por area</h3>
                    <canvas id="services" style="width: inherit; height: inherit; color:white;"></canvas>
                </div>
            </div>

            <div class="col-12 col-md-6">
                {{-- Chart 2 Tickets by cities --}}
                <div style="width: 25rem; height: 25rem" class="my-5">
                    <h3 class="text-center fs-4">Productos stock</h3>
                    <canvas id="products" style="width: inherit; height: inherit; color:white;"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ @asset('js/graficas/index.js') }}"></script>
@endpush
