@extends('sidebar')
@section('title', 'Noticias del momento')
@section('content')
    <div class="row mx-3">
        <table class="table table-success table-striped mt-3">
            <thead>
                <th>Titulo</th>
                <th>Detalle</th>
            </thead>
            <tbody>
                @foreach ($news as $n)
                    @if ($n->active == 1)
                        <tr>
                            <td>{{ $n->title }}</td>
                            <td>{{ $n->description }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
