@extends('Studiju posisteme.isdestymas')
@section('title', 'Registracija')
@section('content')
    <h2>Registracija</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/studijos/registracija" method="post">
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
            <label for="pavarde">Pavardė</label>
            <input type="text" class="form-control" id="pavarde" name="pavarde" style="width:15vw">
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