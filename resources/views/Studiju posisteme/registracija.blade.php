@extends('Studiju posisteme.isdestymas')
@section('title', 'Registracija')
@section('content')
    <h2>Registracija</h2>
    <form>
        @csrf
        <div class="form-group">
            <label for="prisijungimo_vardas">Prisijungimo vardas</label>
            <input type="text" class="form-control" id="prisijungimo_vardas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="email">El.paštas</label>
            <input type="email" class="form-control" id="email" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="slaptazodis">Slaptažodis</label>
            <input type="password" class="form-control" id="slaptazodis" style="width:15vw">
        </div>
        <button class="btn btn-primary">Registruotis</button>
    </form>
@endsection