<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>parnet@mail.com</title>
</head>

<body>

    <h1>{{ $details->company }}</h1>
    <p>Hola, me pongo en contacto somos la empresa {{ $details->company }}, mi nombre es {{ $details->name }} con el
        sigguiente asunto {{ $details->message }}.</p>
    <small>{{$details->phone}} | </small>
    <small>{{$details->mail}}</small>


</body>

</html>
