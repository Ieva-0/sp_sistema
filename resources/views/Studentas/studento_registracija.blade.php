@extends('Studentas.studento_isdestymas')
@section('title', 'Registracija')
@section('content')
    <h2>Registracija</h2>
    @if($errors->first())
        <div class="alert alert-danger" >
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/studentas/registracija" method="post">
        @csrf
        <div class="form-group">
            <label for="email">El. Paštas</label>
            <input type="text" class="form-control" id="email" name="email" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="vardas">Vardas</label>
            <input type="text" class="form-control" id="vardas" name="vardas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="pavarde">Pavarde</label>
            <input type="text" class="form-control" id="pavarde" name="pavarde" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="Akademine_grupe">Akedemine grupe</label>
            <input type="text" class="form-control" id="Akademine_grupe" name="Akademine_grupe" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="Kursas">Kursas</label>
            <input type="text" class="form-control" id="Kursas" name="Kursas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="Studiju_programa">Studiju programa</label>
            <input type="text" class="form-control" id="Studiju_programa" name="Studiju_programa" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="Gimimo_data">Gimimo metai</label>
            <input type="date" class="form-control" id="Gimimo_data" name="Gimimo_data" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="Stojimo_metai">Stojimo metai:</label>
            <input type="number" min="2015" max="2030"  class="form-control" id="Stojimo_metai" name="Stojimo_metai" style="width:15vw">
        </div>


        <div class="form-group">
            <label for="slaptazodis">Slaptažodis</label>
            <input type="password" class="form-control" id="slaptazodis" name="slaptazodis" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="slaptazodis_confirmation">Slaptažodis</label>
            <input type="password" class="form-control" id="slaptazodis_confirmation" name="slaptazodis_confirmation" style="width:15vw">
        </div>
        <button class="btn btn-dark">Registruotis</button>
    </form>
@endsection