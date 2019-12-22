@extends('Imone.imones_navigavimo_meniu')

@section('content')

<br>

<!-- Fonts Testas-->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=9; text/html; charset=utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="include/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
</head>
<span style="display:inline-block; width:WIDTH;"></span>

<div>

    <div>
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
            <b>
                <p style="font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">
                    {{ session()->get('message') }} </p>
            </b>
        </div>
        @endif
    </div>
    @if(count($student_list)!=0)
    <h1 align="center" style="font-weight: bold;">Į praktiką prisiregistravę studentai</h1>
    <br>

    <h3 id="noitems" style="display:none">Tuščia</h3>

    <table class="table" id="tasktable" style="width:80%" class="content" align="center">
        <thead>
            <tr>
                <th>
                    Vardas:
                    <input type="text" id="myInput0" class="myInput" size="8" onkeyup="myFunction(0,'myInput0')" placeholder="" title="Type in a name">
                </th>
                <th>
                    Pavardė:
                    <input type="text" id="myInput1" class="myInput" size="8" onkeyup="myFunction(1,'myInput1')" placeholder="" title="Type in a name">
                </th>
                <th>
                    Paštas:
                    <input type="text" id="myInput2" class="myInput" size="8" onkeyup="myFunction(2,'myInput2')" placeholder="" title="Type in a name">
                </th>
                <th>
                    Studijų baigimo data:
                    <input type="text" id="myInput3" class="myInput" size="8" onkeyup="myFunction(3,'myInput3')" placeholder="" title="Type in a name">
                </th>
                <th>
                    Kursas:
                    <input type="text" id="myInput4" class="myInput" size="8" onkeyup="myFunction(4,'myInput4')" placeholder="" title="Type in a name">
                </th>
                <th>
                    Aukštasis išsilavinimas:
                    <input type="text" id="myInput5" class="myInput" size="8" onkeyup="myFunction(5,'myInput5')" placeholder="" title="Type in a name">
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach($student_list as $student)
            <tr style="font-style: italic;  font-weight: bold;">
                <td>{{ $student->vardas }}</td>
                <td>{{ $student->pavarde}}</td>
                <td>{{ $student->pastas}}</td>
                <td>{{ $student->baigimo_laikas}}</td>
                <td>{{ $student->kursas}}</td>
                <td>{{ $student->pareigos}}</td>

            </tr>
            @endforeach
        </tbody>


    </table>
    @else
    <tbody>
        <div style="font-style: italic;  font-weight: bold;   margin: auto;
  width: 50%;
  padding: 10px;" class="container">

            <table id="customers" style="width:80%" class="content" align="center">

                <table id="customers" style="width:80%" class="content" align="center">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee">
                            Prisiregistravusių studentų į jūsų praktiką nėra!</i>
                    </div>

                </table>
        </div>
    </tbody>
    @endif
</div>

<script>
    function myFunction(index, input) {
        var input, filter, table, tr, td, i, txtValue, tre;
        input = document.getElementById(input);
        filter = input.value.toUpperCase();
        table = document.getElementById("tasktable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[index];
            if (td) {
                tre = document.getElementById("noitems").style;
                tre.display = "";
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            } else {
                tre = document.getElementById("noitems").style;
                tre = "display: none;";
            }
        }
    }
</script>

<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection