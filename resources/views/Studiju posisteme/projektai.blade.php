@extends('Studiju posisteme.isdestymas')
@section('title', 'Erasmus+')
@section('content')
    <h2>Erasmus+ projektai</h2>
    <form action="/studijos/projektai/sukurti" style="float:left;margin:10px 10px 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Sukurti naują projektą</button>
    </form>
    <form action="/studijos/projektai/prasymai" style="float:left;margin:10px 0 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Žiūrėti prašymus</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Semestras</th>
            <th scope="col">Šalis</th>
            <th scope="col">Mokymo įstaiga</th>
            <th scope="col">Dalyvių tipas</th>
            <th scope="col">Vietos</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Pavasario 2019/2020</td>
            <td>Slovakija</td>
            <td>Technologijų kolegija</td>
            <td>Studentai</td>
            <td>13</td>
            <td><form action="/studijos/projektai/1">@csrf<button class="btn btn-primary">Plačiau/Redaguoti</button></form></td>
            <td><form action="/studijos/projektai/1/dalyviai">@csrf<button class="btn btn-primary">Dalyviai</button></form></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Rudens 2020/2021</td>
            <td>Norvegija</td>
            <td>Komunikacijų universitetas</td>
            <td>Dėstytojai</td>
            <td>20</td>
            <td><form action="/studijos/projektai/1">@csrf<button class="btn btn-primary">Plačiau/Redaguoti</button></form></td>
            <td><form action="/studijos/projektai/1/dalyviai">@csrf<button class="btn btn-primary">Dalyviai</button></form></td>
        </tr>
        </tbody>
    </table>
@endsection