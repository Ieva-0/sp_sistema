<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">

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
    </style>
</head>
<body style="background-color: rgb(245,245,245);">
<div class="content" style="background-color: rgb(230,230,230);padding:30px">
    <div class="title m-b-md">
        Dėstytojų posistemė
    </div>
    <div class="links">
        @guest
            <a href="/Destytojas/Prisijungti">Prisijungti</a>
            <a href="/Destytojas/registracija">Registruotis</a>
        @endguest
        @auth

            <a href="/Destytojas/atsijungimas">Atsijungti</a>
        @endauth
    </div>
</div>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="height:7vh">
    <a class="navbar-brand" href="/studijos" style="color:white">Studijų patirties sistema</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/studijos" style="color:white">Pradinis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/studijos/projektai" style="color:white">Erasmus+</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/studijos/mentoryste/prasymai" style="color:white">Karjeros mentorystė</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/studijos/grupes" style="color:white">Mokslo grupės</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/studijos/moduliai" style="color:white">Modulių įvertinimai</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-right">
            @auth
                <li class="nav-item active">
                    <a class="nav-link" href="/studijos/paskyra" style="color:white">Mano paskyra</a>
                </li>
            @else
                <li class="nav-item active">
                    <a class="nav-link" href="/studijos/registracija" style="color:white">Registracija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/studijos/prisijungti" style="color:white">Prisijungti</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>-->
<div class="container" style="padding:50px">
    @yield('content')
</div>
</body>
</html>
