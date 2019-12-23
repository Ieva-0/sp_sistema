<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 1000;
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
            font-size: 84px;
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
    </style>
    <div class="content">
        <div class="title m-b-md">
            Įmonės posistemė
        </div>
        <div class="links">
            <a href="{{ URL::previous() }}">Atgal</a>
            @if (Auth::guest())
            <a href="{{ url('imone/prisijungimas ') }}">Prisijungti</a>
            <a href="{{ url('imone/registracija ') }}">Registruotis</a>
            @endif
            @if (Auth::check())
            <a href="{{ url('imone/paskaitos ') }}">Paskaitu sąrašas</a>
            <a href="{{ url('imone/praktikos ') }}">Praktikų sąrašas</a>
            <a href="{{ url('/studijos/atsijungti') }}">Atsijungti</a>
            <a href="{{ url('aplikacija-praktikai') }}">Prašymo pateikimas praktikai</a>
        </div>
    </div>
</head>

<body>
    <div class="container">
        @if(count($errors)) > 0 )
        <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="fa fa-coffee"></i>

            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </div>
        @endif
        @if(session()->has('message'))

        <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="fa fa-coffee"></i>
            {{ session()->get('message') }}
        </div>
        @endif
    </div>
    <div>
        <br>
        @yield('content')
    </div>
    @endif
</body>

</html>