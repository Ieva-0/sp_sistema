@extends('Studiju posisteme.isdestymas')
@section('title', 'Erasmus+ prašymai')
@section('content')
    <h2>Erasmus+ prašymai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vardas, pavardė</th>
            <th scope="col">Semestras</th>
            <th scope="col">Šalis</th>
            <th scope="col">Mokymo įstaiga</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Vardenis Pavardenis</th>
            <td>Pavasario 2019/2020</td>
            <td>Slovakija</td>
            <td>Technologijų kolegija</td>
            <td><form action="/studijos/projektai/prasymai/1">@csrf<button class="btn btn-primary">Plačiau</button></form></td>
        </tr>
        <tr>
            <th scope="row">Vardenis Pavardenis</th>
            <td>Rudens 2020/2021</td>
            <td>Norvegija</td>
            <td>Komunikacijų universitetas</td>
            <td><form action="/studijos/projektai/prasymai/1">@csrf<button class="btn btn-primary">Plačiau</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection