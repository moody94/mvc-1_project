<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Notes</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1441/1441035.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>

</head>
<script>
    jQuery(document).ready(function($) {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("i", this).toggleClass("fa-arrow-circle-right fa-arrow-circle-down");
        });

    })
</script>

<body class="d-flex flex-column min-vh-100" style="background: #6a11cb; background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)); background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))">
    <div id="app">
        @include('navbar')
        <main class="py-4">
            <div>
                <div>
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('footer')
</body>

</html>