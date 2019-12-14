@extends('Imone.imones_navigavimo_meniu')

@section('content')+
<div class="content">
    <div class="links">
        <a href="{{ url('imone/create') }}">Paskaitos sukūrimas</a>
    </div>
</div>
<br>
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

<div>
    <table id="customers" style="width:80%" class="content" align="center">
        <tr>
            <th>Pavadinimas</th>
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


    </table>
</div>
@endsection