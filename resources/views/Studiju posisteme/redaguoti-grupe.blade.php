@extends('Studiju posisteme.isdestymas')
@section('title', 'Redaguoti grupę')
@section('content')
    <h2>Redaguoti mokslo grupę</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/studijos/grupes/{{$grupe->id}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="pavadinimas">Pavadinimas</label>
            <input type="text" class="form-control" id="pavadinimas" name="pavadinimas" value="{{$grupe->Pavadinimas}}" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="fakultetas">Fakultetas</label>
            <input type="text" class="form-control" id="fakultetas" name="fakultetas" value="{{$grupe->Pavadinimas}}" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="nariu_kiekis">Narių kiekis</label>
            <input type="number" class="form-control" id="nariu_kiekis" name="nariu_kiekis" value={{$grupe->Nariu_kiekis}} style="width:15vw">
        </div>
        <div class="form-group">
            <label for="aprasymas">Aprašymas (iki 1000 simbolių)</label>
            <textarea class="form-control" id="aprasymas" name="aprasymas"  style="width:30vw;height:30vh">{{$grupe->Aprasymas}}</textarea>
        </div>
        <div class="form-group" style="width:15vw">
            <label for="vadovas">Grupės vadovas</label>
            <select class="form-control" id="vadovas" name="vadovas">
                @foreach($destytojai as $destytojas)
                    <option value={{ $destytojas->fk_destytojas_user }} {{ $grupe->vadovas == $destytojas->fk_destytojas_user ? 'selected' : '' }}>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-dark" type="submit" style="float:left">Patvirtinti</button>
    </form>
    <form action="/studijos/grupes/{{$grupe->id}}/nariai" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-dark" type="submit">Nariai</button>
    </form>
    <form action="/studijos/grupes/{{$grupe->id}}/prasymai" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-dark" type="submit">Prašymai</button>
    </form>
    <form action="/studijos/grupes" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-dark" type="submit">Atšaukti</button>
    </form>
@endsection