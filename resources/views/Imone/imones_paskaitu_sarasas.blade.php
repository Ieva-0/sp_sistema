@extends('Imone.imones_navigavimo_meniu')

@section('content')+
<div class="content">
    <div class="links">
        <a href="{{ url('imone/create') }}">Paskaitos sukūrimas</a>
    </div>
</div>
<br>

<!-- Fonts Testas-->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<div class="container">
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
            {{ session()->get('message') }}
        </div>
        @endif
    </div>
    <table id="customers" style="width:80%" class="content" align="center">
        <tr>
            <th>Pavadinimas</th>
            <th>Modulis</th>
            <th>Data</th>
            <th>Veiksmai:</th>
        </tr>

        @foreach($paskaitos_list as $paskaita)
        <tr>
            <td>{{ $paskaita->vieta}}</td>
            <td>{{ $paskaita->tema}}</td>
            <td>{{ $paskaita->data}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('paskaita-edit',['id' => $paskaita->id]) }}">Edit</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>
@endsection