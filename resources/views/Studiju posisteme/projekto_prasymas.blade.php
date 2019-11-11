@extends('Studiju posisteme.isdestymas')
@section('title', 'Projekto prašymas')
@section('content')
    <h2>Projekto prašymas</h2>
    <h6 style="margin-top:10px">Vardas, pavardė</h6>
    <p>Jonas Jonaitis</p>
    <h6 style="margin-top:10px">Fakultetas</h6>
    <p>Informatikos</p>
    <h6 style="margin-top:10px">Studijų programa</h6>
    <p>Programų sistemos</p>
    <h6 style="margin-top:10px">Kursas</h6>
    <p>2</p>
    <h6 style="margin-top:10px">Motyvacinis</h6>
    <p>Motyvacinis tekstas.</p>
    <h6 style="margin-top:10px">Pažangumas</h6>
    <p>Pažangus</p>
    <h6 style="margin-top:10px">Šalis</h6>
    <p>Slovakija</p>
    <h6 style="margin-top:10px">Įstaiga</h6>
    <p>Technologijų universitetas</p>
    <h6 style="margin-top:10px">Semestras</h6>
    <p>Pavasario 2019/2020</p>
    <form action="/studijos/projektai/prasymai" style="float:left;margin:10px 10px 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Patvirtinti</button>
    </form>
    <form action="/studijos/projektai/prasymai" style="float:left;margin:10px 0 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Atmesti</button>
    </form>
@endsection