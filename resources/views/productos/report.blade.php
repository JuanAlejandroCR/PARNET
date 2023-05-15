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
    <table width="100%" class="table">
        <thead>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Nombre</p>
            </th>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Descripcion</p>
            </th>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Imagen</p>
            </th>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Precio</p>
            </th>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Cantidad</p>
            </th>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Ficha Tecnica</p>
            </th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="table">
                        <p style="line-height: 0.9rem; text-align: left; margin-left: 0.5rem;">{{ $product->name }}</p>
                    </td>
                    <td class="table">
                        <p style="line-height: 0.9rem; text-align: left; margin-left: 0.5rem;">{{ $product->description }}</p>
                    </td>
                    <td style="text-align: center;" class="table">
                        <img src="{{ asset('storage/images/productos/' . $product->image) }}" width="50%" />
                    </td>
                    <td class="table">
                        <p style="line-height: 0.9rem; text-align: left; margin-left: 0.5rem;">${{ $product->price }}</p>
                    </td>
                    <td class="table" style="background-color: {{ $product->stock > 0 ? 'green' : 'red'}};">
                        <p style="line-height: 0.9rem; text-align: left; margin-left: 0.5rem;">{{ $product->stock }}</p>
                        <p style="line-height: 0.9rem; text-align: left; margin-left: 0.5rem;">{{ $product->available }}</p>
                    </td>
                    <td class="table">
                        <p style="line-height: 0.9rem; text-align: left; margin-left: 0.5rem;">{{ $product->data_sheet }}</p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
