<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            color: #636b6f;
            font-family: 'Raleway';
            height: 100vh;
            margin: 0;
        }

        .gfg {
            all: unset;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 40px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .top-right1>a {
            position: absolute;
            right: 10px;
            top: 18px;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .top-right2>a {
            position: absolute;
            right: 200px;
            top: 18px;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body style="background-color: rgb(245,245,245);">
<div class="content" style="background-color: rgb(230,230,230);padding:30px">
    <div class="title m-b-md">
        Studento posistemė
    </div>

    <div class="links">
        @if (Auth::guest())
            <a href="{{ url('/studentas/prisijungimas') }}">Prisijungimas</a>
            <a href="{{ url('/studentas/registracija') }}">Registracija</a>
        @endif
        @can('studentas')
        <a href="{{ url('studentas/tvarkarastis') }}">Tvarkaraštis</a>
        <a href="{{ url('studentas/uzsiemimai') }}">Registracija į užsiemimus</a>
        <a href="{{ url('/studijos/mentoryste/prasymai/create') }}">Registracija pas karjeros mentorių</a>
        <a href="{{ url('studentas/praktikos') }}">Registracija į praktiką</a>
        <a href="{{ url('/studijos/projektai') }}">Registracija į Erasmus+</a>
        <a href="{{ url('/studijos/mokslo_grupes') }}">Registracija į Mokslo grupes</a>

            <a href="{{ url('/studentas/atsijungti') }}">atsijungti</a>
        @endcan

    </div>

    @can('studentas')
        <div class="top-right1">
            <a href="{{ url('studentas/profilis') }}">Profilis</a>
        </div>
        <div class="top-right2">
            <a href="{{ url('studentas/pranesimai') }}">Pranešimai</a>

        </div>

    @endcan
 </div>

<div class="container" style="padding:50px">
    @yield('content')
</div>
</body>
</html>
