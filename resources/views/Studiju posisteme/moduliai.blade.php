@extends('Studiju posisteme.isdestymas')
@section('title', 'Mokslo grupės')
@section('content')
    <h2>Moduliai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kodas</th>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Koordinuojantis dėstytojas</th>
            <th scope="col">Įvertinimų vidurkis</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">P111B125</th>
            <td>Molekulinė fizika</td>
            <td>Jonas Jonauskas</td>
            <td>8.5</td>
            <td><form action="/studijos/moduliai/1">@csrf<button class="btn btn-primary">Modulio įvertinimai</button></form></td>
        </tr>
        <tr>
            <th scope="row">P785B462</th>
            <td>Marketingo strategijos</td>
            <td>Petras Petrauskas</td>
            <td>7.3</td>
            <td><form action="/studijos/moduliai/1">@csrf<button class="btn btn-primary">Modulio įvertinimai</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection