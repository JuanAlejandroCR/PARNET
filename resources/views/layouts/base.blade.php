<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PARNET | @yield('title')</title>

    {{-- CSRF Token meta tag --}}
    <meta id='csrf' name='csrf-token' content='{{ csrf_token() }}'>
    {{-- LIBRARIES --}}
    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset('css/style.css') }}'>
    <link rel='stylesheet' href='{{ asset('lib/bootstrap/bootstrap.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('lib/dataTables/dataTables.bootstrap5.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('lib/dataTables/responsive.dataTables.min.css') }}'>
    <!-- JAVASCRIPT -->
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ae5d17b983.js" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src='{{ asset('lib/jquery/jquery.min.js') }}' defer></script>
    <!-- BOOTSTRAP -->
    <script src='{{ asset('lib/bootstrap/bootstrap.bundle.min.js') }}' defer></script>
    <!-- SWEETALERT 2 -->
    <script src='{{ asset('lib/sweetalert/sweetalert2.all.min.js') }}' defer></script>
    {{-- CHART JS --}}
    <script src="{{ asset('lib/chartjs/chart.js') }}" defer></script>
    <!-- Datatables -->
    <script src='{{ asset('lib/dataTables/datatables.min.js') }}' defer></script>
    <!-- Datatables Bootstrap 5-->
    <script src='{{ asset('lib/dataTables/dataTables.bootstrap5.min.js') }}' defer></script>
    <!-- DATATABLES SPANISH -->
    <script src='{{ asset('lib/dataTables/jquery.dataTables.spanish.js') }}' defer></script>
    <!-- Datatables Responsive-->
    <script src='{{ asset('lib/dataTables/dataTables.responsive.min.js') }}' defer></script>
    <!-- SCRIPT TABLE EDIT -->
    <script src='{{ asset('lib/tabledit/jquery.tabledit.min.js') }}' defer></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js" defer></script>
    {{-- lordicon --}}
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</head>

<body class="vh-100">
    @yield('body')
</body>

@stack('scripts')

</html>
