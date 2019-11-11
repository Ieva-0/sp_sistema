@extends('Studiju posisteme.isdestymas')
@section('title', 'Laisvi mentoriai')
@section('content')
    <h2>Laisvi mentoriai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Fakultetas</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Jonas</td>
            <td>Petraitis</td>
            <td>Informatikos</td>
            <td><form action="/studijos/laisvi/1">@csrf<button class="btn btn-primary">Plačiau</button></form></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Adomas</td>
            <td>Adomaitis</td>
            <td>Chemijos</td>
            <td><form action="/studijos/mentoryste/laisvi/1">@csrf<button class="btn btn-primary">Plačiau</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection