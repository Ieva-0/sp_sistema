@extends('Studiju posisteme.isdestymas')
@section('title', 'Projekto dalyviai')
@section('content')
    <h2>Nariai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Fakultetas</th>
            <th scope="col">Kursas</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Jonas</td>
            <td>Petraitis</td>
            <td>Informatikos</td>
            <td>2</td>
            <td><form action="/studijos/grupes/1/nariai">@csrf<button class="btn btn-primary">Pašalinti</button></form></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Adomas</td>
            <td>Adomaitis</td>
            <td>Chemijos</td>
            <td>3</td>
            <td><form action="/studijos/grupes/1/nariai">@csrf<button class="btn btn-primary">Pašalinti</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection