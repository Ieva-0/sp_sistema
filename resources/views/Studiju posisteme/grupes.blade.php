@extends('Studiju posisteme.isdestymas')
@section('title', 'Mokslo grupės')
@section('content')
    <h2>Mokslo grupės</h2>
    <form action="/studijos/grupes/sukurti" style="float:left;margin:10px 10px 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Sukurti naują grupę</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Fakultetas</th>
            <th scope="col">Vadovas</th>
            <th scope="col">Narių kiekis</th>
            <th scope="col">Likę vietos</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Molekulinė fizika</td>
            <td>Gamtos mokslų</td>
            <td>Jonas Jonauskas</td>
            <td>10</td>
            <td>7</td>
            <td><form action="/studijos/grupes/1">@csrf<button class="btn btn-primary">Plačiau/Redaguoti</button></form></td>
            <td><form action="/studijos/grupes/1/nariai">@csrf<button class="btn btn-primary">Nariai</button></form></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Marketingo strategijos</td>
            <td>Ekonomikos</td>
            <td>Petras Petrauskas</td>
            <td>15</td>
            <td>2</td>
            <td><form action="/studijos/grupes/1">@csrf<button class="btn btn-primary">Plačiau/Redaguoti</button></form></td>
            <td><form action="/studijos/grupes/1/nariai">@csrf<button class="btn btn-primary">Nariai</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection