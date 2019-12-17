<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Studento prisijungimas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
            padding-bottom: 30px;
            padding-top: 40px;
        }

        .title {
            font-size: 40px;
            padding-bottom: 50px;
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

        .links>a {
            text-align: center;
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


<body>

    <div class="content">
        <div class="title">
            AKADEMINĖ INFORMACINĖ SISTEMA
        </div>

        <div class="links">
            @if (Auth::guest())
            <a href="{{ url('prisijungimas') }}">prisijungimas</a>
            @endif
            <a href="{{ url('studentas/tvarkarastis') }}">Tvarkaraštis</a>
            <a href="{{ url('studentas/uzsiemimu_registracija') }}">Registracija į užsiemimus</a>
            <a href="{{ url('studentas/karjeros_mentorius') }}">Registracija pas karjeros mentorių</a>
            <a href="{{ url('studentas/praktikos') }}">Registracija į praktiką</a>
            <a href="{{ url('studentas/Erasmus') }}">Registracija į Erasmus+</a>
            <a href="{{ url('studentas/mokslo_grupes') }}">Registracija į Mokslo grupes</a>


            @if (Auth::check())
            <a href="{{ url('atsijungimas') }}">atsijungti</a>
            @endif
        </div>
        <div class="top-right1">
            <a href="{{ url('studentas/profilis') }}">Profilis</a>
        </div>

        <div class="top-right2">
            <a href="{{ url('studentas/profilio_redagavimas') }}">Profilio redagavimas</a>
        </div>
    </div>



</body>

</html>