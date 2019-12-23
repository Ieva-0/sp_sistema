@extends('Studiju posisteme.isdestymas')
@section('title', 'Pateikti grupės prašymą')
@section('content')
    <h2>Grupės prašymas</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form method="post" action="/studijos/grupes/{{ $grupe->id }}/prasymai" method="post">
        @csrf
        <h6 style="margin-top:10px">Pavadinimas</h6>
        <p>{{ $grupe->Pavadinimas }}</p>
        <h6 style="margin-top:10px">Fakultetas</h6>
        <p>{{ $grupe->Fakultetas }}</p>
        <h6 style="margin-top:10px">Aprašymas</h6>
        <p style="width:40vw">{{ $grupe->Aprasymas }}</p>
        <h6 style="margin-top:10px">Vadovas</h6>
        <p>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</p>
        <h6 style="margin-top:10px">Vadovo el. paštas</h6>
        <p>{{ $destytojas->el_pastas }}</p>
        <div class="form-group">
            <label for="motyvacinis">Trumpas motyvacinis laiškas (iki 1000 simbolių)</label>
            <textarea class="form-control" id="motyvacinis" name="motyvacinis" style="width:30vw;height:30vh"></textarea>
        </div>
        @csrf
        <button class="btn btn-dark" type="submit" style="float:left">Pateikti</button>
    </form>
    <form action="/studijos/grupes" method="get" style="float:left;margin-left: 15px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
@endsection