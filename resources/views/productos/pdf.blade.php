<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .table {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>{{ $product->name }} | Ficha técnica</h1>
    <hr>
    <h3>Detalles del producto</h3>
    <table width="100%" class="table">
        <tbody>
            <td style="text-align: center;" width="50%">
                <img src="{{ asset('storage/images/productos/' . $product->image) }}" width="50%" />
                <h4>Precio</h4>
                <h1>${{ $product->price }}</h1>
            </td>
            <td width="50%">
                <h4>Descripción</h4>
                <p>{{ $product->description }}</p>
                <h4>Ficha tecnica</h4>
                <ul>
                    @foreach ($dataSheet as $i => $data)
                    @if ($i != sizeOf($dataSheet) - 1)
                        <li>{{ $data }}</li>
                    @endif
                    @endforeach
                </ul>
            </td>
        </tbody>
    </table>
</body>

</html>
