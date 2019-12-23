@extends('Studiju posisteme.isdestymas')
@section('title', 'Projektas')
@section('content')
    <h2>Apie Erasmus+ projektą</h2>
    <h6 style="margin-top:10px">Šalis</h6>
    <p>{{ $projektas->salis }}</p>
    <h6 style="margin-top:10px">Aukštoji mokykla</h6>
    <p>{{ $projektas->mokymo_istaiga }}</p>
    <h6 style="margin-top:10px">Dalyviai</h6>
    <p>{{ $dalyviai->where('projektas', $projektas->id)->count() }}/{{ $projektas->dalyviu_skaicius }}</p>
    <h6 style="margin-top:10px">Semestras</h6>
    <p style="width:40vw">@foreach($semestro_tipai as $tipas) @if($tipas->id == $projektas->semestras) {{ $tipas->name }} @endif @endforeach {{ $projektas->metai }}</p>

    <form action="/studijos/projektai" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
@endsection