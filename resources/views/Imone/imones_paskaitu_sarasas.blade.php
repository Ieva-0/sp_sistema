<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

        .full-height {
            height: 100vh;
        }

        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            table-layout: fixed;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
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

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <span style="display:inline-block; width:WIDTH;"></span>
    <div class="content">
        <div class="title m-b-md">
            Įmonės posistemė
        </div>
        <div class="links">
            <a href="{{ URL::previous() }}">Go Back</a>
            <a href="{{ url('imone/prisijungti ') }}">Prisijungti</a>
            <a href="{{ url('imone/registracija ') }}">Registruotis</a>
            <a href="{{ url('imone/paskaitos ') }}">Paskaitu sąrašas</a>
            <a href="{{ url('imone/paskaitos ') }}">Praktikų sąrašas</a>
        </div>
    </div>
</head>

<span style="display:inline-block; width:WIDTH;"></span>

<body>

    <div class="position-ref full-height">


        <table id="customers" style="width:80%" class="content" align="center">
            <tr>
                <th>Srities pavadinimas</th>
                <th>Modulis</th>
                <th>Data</th>
            </tr>
            <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
                <td>Įvadinė paskaita</td>
                <td>Duomenų bazės</td>
                <td>2019-12-01</td>
            </tr>
            <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
                <td>Įvadinė paskaita</td>
                <td>Duomenų bazės</td>
                <td>2019-12-01</td>
            </tr>
            <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
                <td>Įvadinė paskaita</td>
                <td>Duomenų bazės</td>
                <td>2019-12-01</td>
            </tr>
        </table>
    </div>
</body>

</html>