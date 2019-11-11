@extends('Studiju posisteme.isdestymas')
@section('title', 'Prisijungti')
@section('content')
    <h2>Prisijungti</h2>
    <form>
        @csrf
        <div class="form-group">
            <label for="prisijungimo_vardas">Prisijungimo vardas</label>
            <input type="text" class="form-control" id="prisijungimo_vardas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="slaptazodis">Slaptažodis</label>
            <input type="password" class="form-control" id="slaptazodis" style="width:15vw">
        </div>
        <button class="btn btn-primary">Prisijungti</button>
    </form>
@endsection