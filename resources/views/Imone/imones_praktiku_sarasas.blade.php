@extends('Imone.imones_navigavimo_meniu')

@section('content')
<div class="content">
    <div class="links">
        <a href="{{ url('/imone/create-praktika') }}">Praktikos sukūrimas</a>
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

<span style="display:inline-block; width:WIDTH;"></span>

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
            <th>Projekto tema</th>
            <th>Įmonė</th>
            <th>Trukmė</th>
            <th>Data</th>
            <th>Kandidatuojančių skaičius:</th>
            <th>Valdymas:</th>
        </tr>
        <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
            <td>C# web-praktika</td>
            <td>Teltonika</td>
            <td>96 val.</td>
            <td>2019-12-01</td>
            <td>62</td>
            <td>
                <a class="btn btn-primary" href=" {{ url('/imone/redaguoti_paskaita/paskaita1') }}">Edit</a>
            </td>
        </tr>
        <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
            <td>PhotoShop - praktika</td>
            <td>Teltonika</td>
            <td>56 val.</td>
            <td>2019-12-02</td>
            <td>50</td>
            <td>
                <a class="btn btn-primary" href=" {{ url('/imone/redaguoti_paskaita/paskaita1') }}">Edit</a>
            </td>
        </tr>
        <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
            <td>BackEnd developer</td>
            <td>Teltonika</td>
            <td>108 val.</td>
            <td>2019-12-16</td>
            <td>29</td>
            <td>
                <a class="btn btn-primary" href=" {{ url('/imone/redaguoti_paskaita/paskaita1') }}">Edit</a>
            </td>
        </tr>
        <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
            <td>Embeded Systems developer</td>
            <td>Teltonika</td>
            <td>56 val.</td>
            <td>2019-12-16</td>
            <td>21</td>
            <td>
                <a class="btn btn-primary" href=" {{ url('/imone/redaguoti_paskaita/paskaita1') }}">Edit</a>
            </td>
        </tr>
        <tr onclick="window.location='redaguoti_paskaita/paskaita1';">
            <td>Embeded Systems developer</td>
            <td>Teltonika</td>
            <td>56 val.</td>
            <td>2019-12-16</td>
            <td>21</td>
            <td>
                <a class="btn btn-primary" href=" {{ url('/imone/redaguoti_paskaita/paskaita1') }}">Edit</a>
            </td>
        </tr>
        @foreach($praktiku_list as $praktika)
        <tr>
            <td>{{ $praktika->projekto_Tema }}</td>
            <td>{{ $imone}}</td>
            <td>{{ $praktika->trukme}} val.</td>
            <td>{{ $praktika->laikas}}</td>
            <td>{{ $praktika->dalyviu_Skaicius}} dal.</td>
            <td>
                <a class="btn btn-primary" href="{{ route('praktika-edit',['id' => $praktika->id]) }}">Edit</a>
            </td>
        </tr>
        @endforeach


    </table>
</div>
@endsection