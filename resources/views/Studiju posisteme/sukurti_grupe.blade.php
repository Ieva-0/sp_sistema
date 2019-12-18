@extends('Studiju posisteme.isdestymas')
@section('title', 'Nauja mokslo grupė')
@section('content')
    <h2>Sukurti mokslo grupę</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/studijos/grupes" method="post">
        @csrf
        <div class="form-group">
            <label for="pavadinimas">Pavadinimas</label>
            <input type="text" class="form-control" id="pavadinimas" name="pavadinimas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="fakultetas">Fakultetas</label>
            <input type="text" class="form-control" id="fakultetas" name="fakultetas" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="nariu_kiekis">Narių kiekis</label>
            <input type="number" class="form-control" id="nariu_kiekis" name="nariu_kiekis" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="aprasymas">Aprašymas (iki 1000 simbolių)</label>
            <textarea class="form-control" id="aprasymas" name="aprasymas" style="width:30vw;height:30vh"></textarea>
        </div>
        <div class="form-group" style="width:15vw">
            <label for="vadovas">Grupės vadovas</label>
            <select class="form-control" id="vadovas" name="vadovas">
                @foreach($destytojai as $destytojas)
                    <option value={{ $destytojas->fk_destytojas_user }}>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Sukurti</button>
    </form>
@endsection