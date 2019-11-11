<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body style="background-color: lightgrey;">
<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="height:7vh">
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
                <a class="nav-link" href="/studijos/mentoryste" style="color:white">Karjeros mentorystė</a>
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
</nav>
<div class="container" style="height:93vh;width:60vw;margin:0 auto; background-color: rgb(245, 245, 245);padding:50px">
    @yield('content')
</div>
</body>
</html>
