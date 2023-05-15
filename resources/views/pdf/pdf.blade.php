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
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Sugerencia</p>
            </th>
            <th class="table">
                <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">Fecha</p>
            </th>
        </thead>
        <tbody>
            @foreach ($suggestions as $suggestion)
                <tr>
                    <td class="table">
                        <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">{{ $suggestion->name }}</p>
                    </td>
                    <td class="table">
                        <p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">{{ $suggestion->suggestion }}</p>
                    </td class="table">
                    <td class="table"><p style="line-height: 0px; text-align: left; margin-left: 0.5rem;">{{ $suggestion->created_at }}</p></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
