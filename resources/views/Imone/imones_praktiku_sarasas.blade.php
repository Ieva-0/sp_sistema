@extends('Imone.imones_navigavimo_meniu')

@section('content')+
<div class="content">
    <div class="links">
        <a href="{{ url('imone/create') }}">Praktikos sukūrimas</a>
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

    </table>
</div>
@endsection