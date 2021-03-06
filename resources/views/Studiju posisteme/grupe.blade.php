@extends('Studiju posisteme.isdestymas')
@section('title', 'Projekto prašymas')
@section('content')
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <h2>Apie mokslo grupę</h2>
    <h6 style="margin-top:10px">Pavadinimas</h6>
    <p>{{ $grupe->Pavadinimas }}</p>
    <h6 style="margin-top:10px">Fakultetas</h6>
    <p>{{ $grupe->Fakultetas }}</p>
    <h6 style="margin-top:10px">Nariai</h6>
    <p>{{ $nariai->where('grupe', $grupe->id)->count() }}/{{ $grupe->Nariu_kiekis }}</p>
    <h6 style="margin-top:10px">Aprašymas</h6>
    <p style="width:40vw">{{ $grupe->Aprasymas }}</p>
    <h6 style="margin-top:10px">Vadovas</h6>
    <p>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</p>
    <h6 style="margin-top:10px">Vadovo el. paštas</h6>
    <p>{{ $destytojas->el_pastas }}</p>
    <form action="/studijos/grupes/{{ $grupe->id }}/prasymai/sukurti" method="get" style="float:left;">
        @csrf
        @method('delete')
        <button class="btn btn-dark" type="submit">Pateikti prašymą</button>
    </form>
    <form action="/studijos/grupes" method="get" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
@endsection