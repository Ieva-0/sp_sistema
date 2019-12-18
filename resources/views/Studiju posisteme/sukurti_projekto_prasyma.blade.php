@extends('Studiju posisteme.isdestymas')
@section('title', 'Pateikti projekto prašymą')
@section('content')
    <h2>Projekto prašymas</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form method="post" action="/studijos/projektai/{{ $projektas->id }}/prasymai" method="post">
        @csrf
        <h6 style="margin-top:10px">Šalis</h6>
        <p>{{ $projektas->salis }}</p>
        <h6 style="margin-top:10px">Įstaiga</h6>
        <p>{{ $projektas->mokymo_istaiga }}</p>
        <h6 style="margin-top:10px; margin-bottom: 10px">Semestras</h6>
        <p>@foreach($semestro_tipai as $tipas) @if($tipas->id == $projektas->semestras) {{ $tipas->name }} @endif @endforeach {{ $projektas->metai }}</p>
        <div class="form-group">
            <label for="motyvacinis">Trumpas motyvacinis laiškas (iki 1000 simbolių)</label>
            <textarea class="form-control" id="motyvacinis" name="motyvacinis" style="width:30vw;height:30vh"></textarea>
        </div>
        @csrf
        <button class="btn btn-primary" type="submit" style="float:left">Pateikti</button>
    </form>
    <form action="/studijos/projektai" method="get" style="float:left;margin-left: 15px">
        @csrf
        <button class="btn btn-primary" type="submit">Atgal</button>
    </form>
@endsection