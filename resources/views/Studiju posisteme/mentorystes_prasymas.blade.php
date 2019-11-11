@extends('Studiju posisteme.isdestymas')
@section('title', 'Mentorystės prašymas')
@section('content')
    <h2>Mentorystės prašymas</h2>
    <h6 style="margin-top:10px">Studento vardas, pavardė</h6>
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
    <form action="/studijos/mentoryste" style="margin:10px 0 15px 0">
        @csrf
        <div class="form-group">
            <label for="mentorius">Mentorius</label>
            <select class="form-control" id="mentorius" style="width:15vw">
                <option>Destytojas1</option>
                <option>Destytojas2</option>
                <option>Destytojas3</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Priskirti</button>
    </form>
    <form action="/studijos/mentoryste" style="margin:10px 10px 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Atmesti</button>
    </form>
@endsection