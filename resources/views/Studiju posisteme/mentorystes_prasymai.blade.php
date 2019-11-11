@extends('Studiju posisteme.isdestymas')
@section('title', 'Erasmus+')
@section('content')
<h2>Karjeros mentorystės prašymai</h2>
<form action="/studijos/mentoryste/laisvi" style="float:left;margin:10px 10px 15px 0">
    @csrf
    <button class="btn btn-primary" type="submit">Laisvi mentoriai</button>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Fakultetas</th>
        <th scope="col">Studijų programa</th>
        <th scope="col">Kursas</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Vardenis</td>
        <td>Pavardenis</td>
        <td>Informatikos</td>
        <td>Programų sistemos</td>
        <td>2</td>
        <td><form action="/studijos/mentoryste/1">@csrf<button class="btn btn-primary">Plačiau</button></form></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jonas</td>
        <td>Jonaitis</td>
        <td>Chemijos</td>
        <td>Taikomoji chemija</td>
        <td>3</td>
        <td><form action="/studijos/mentoryste/1">@csrf<button class="btn btn-primary">Plačiau</button></form></td>
    </tr>
    </tbody>
</table>
@endsection