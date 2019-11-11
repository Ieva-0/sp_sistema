<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Studento prisijungimas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
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
        .top-right > a{
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
        .top-left > a{
            position: absolute;
            left: 10px;
            top: 18px;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a {
            text-align: center;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
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
        .table {
            margin: auto;
        }

    </style>


</head>


<body>

<div class="content">
    <div class="title">
        Tvarkaraštis
    </div>

    <div class="top-right ">
        <a href="{{ url('studentas') }}">Pagrindinis puslapis</a>
    </div>
    <div class="top-left ">
        <a href="{{ url('Studentas/Tvarkarastis') }}">Naikinti užsiemimą</a>
    </div>

<div class="align-middle">
    <table class="table table-bordered " style="width: 80%" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">Laikas</th>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Vedantis asmuo</th>
            <th scope="col">Data</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">9:30</th>
            <td>Lygiagretus programavimas</td>
            <td>Barisas</td>
            <td>2019-11-22</td>
        </tr>
        <tr>
            <th scope="row">13:30</th>
            <td>Lygiagretus programavimas</td>
            <td>Barisas</td>
            <td>2019-11-22</td>
        </tr>
        <tr>
            <th scope="row">11:30</th>
            <td>Lygiagretus programavimas</td>
            <td>Barisas</td>
            <td>2019-11-22</td>
        </tr>
        </tbody>
    </table>
</div>

</div>



</body>

</html>
