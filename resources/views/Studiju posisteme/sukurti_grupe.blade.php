@extends('Studiju posisteme.isdestymas')
@section('title', 'Nauja mokslo grupė')
@section('content')
    <h2>Sukurti mokslo grupę</h2>
    <form action="/studijos/grupes">
        @csrf
        <div class="form-group">
            <label for="pavadinimas">Pavadinimas</label>
            <input type="text" class="form-control" id="pavadinimas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="nariu_kiekis">Narių kiekis</label>
            <input type="text" class="form-control" id="nariu_kiekis" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="fakultetas">Fakultetas</label>
            <input type="text" class="form-control" id="salis" style="width:15vw">
        </div><div class="form-group">
            <label for="aprasymas">Aprašymas</label>
            <textarea class="form-control" id="aprasymas" style="width:15vw"></textarea>
        </div>
        <button class="btn btn-primary">Sukurti</button>
    </form>
@endsection