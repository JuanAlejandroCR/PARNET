<!--Incluir esta en su pagina para heredar los css y javascript-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PARNET | @yield('title') </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="csrf" name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- LINKS CSS -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}">
    <!-- LINKS JAVASCRIPTS -->
    {{-- IMPORTACION FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/01ccc90188.js" crossorigin="anonymous"></script>
    <!-- IMPORTACION JQUERY -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}" defer></script>
    <!-- IMPORTACION BOOTSTRAP -->
    <script src="{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
    <!-- IMPORTACION SWEETALERT 2 -->
    <script src="{{ asset('lib/sweetalert/sweetalert2.all.min.js')}}" defer></script>
    <!-- Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>

    <style>
        .offcanvas {
            visibility: visible !important;
            position:static;
        }
    </style>
    @stack('styles')
</head>
<body style="background-color: white;">
    @yield("body")
</body>
    @stack("scripts")
</html>
