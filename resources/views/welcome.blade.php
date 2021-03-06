<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pradinis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
</head>

<body>
    <!--<div class="container" style="text-align: center;padding:50px">
        <h1>Pradinis puslapis</h1>
        <form style="margin:70px 0 15px 0" action="/imone">
            <button class="btn btn-primary" type="submit">Imonių posistemė</button>
        </form>
        <form style="margin:15px 0 15px 0" action="/studentas">
            <button class="btn btn-primary" type="submit">Studentų posistemė</button>
        </form>
        <form style="margin:15px 0 15px 0" action="/Destytojas">
            <button class="btn btn-primary" type="submit">Dėstytojų posistemė</button>
        </form>
        <form style="margin:15px 0 15px 0" action="/studijos">
            <button class="btn btn-primary" type="submit">Studijų posistemė</button>
        </form>
    </div>-->
    <div class="content" style="margin-top: 100px">
        <div class="title m-b-md">
            Studijų patirties sistema
        </div>
        <div class="links" >
                <a href="{{ url('/imone') }}">Imonės</a>
                <a href="{{ url('/studentas') }}">Studentai</a>
                <a href="{{ url('/destytojas') }}">Dėstytojai</a>
                <a href="{{ url('/studijos') }}">Studijų centras</a>
        </div>
    </div>
</body>

</html>