@extends('Studiju posisteme.isdestymas')
@section('title', 'Grupė')
@section('content')
    <form action="/studijos/grupes">
        @csrf
        <div class="form-group">
            <label for="pavadinimas">Pavadinimas</label>
            <input type="text" class="form-control" id="pavadinimas" style="width:15vw" value="Molekulinė fizika">
        </div>
        <div class="form-group">
            <label for="nariu_kiekis">Narių kiekis</label>
            <input type="text" class="form-control" id="nariu_kiekis" style="width:15vw" value="Gamtos mokslų">
        </div>
        <div class="form-group">
            <label for="fakultetas">Fakultetas</label>
            <input type="text" class="form-control" id="salis" style="width:15vw" value="Jonas Jonaitis">
        </div><div class="form-group">
            <label for="aprasymas">Aprašymas</label>
            <textarea class="form-control" id="aprasymas" style="width:15vw" value="Mokslo grupės aprašymas."></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Patvirtinti</button>
    </form>
    <form action="/studijos/grupes" style="float:left;margin:10px 0 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Atšaukti</button>
    </form>
@endsection