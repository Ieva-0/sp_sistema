@extends('Studiju posisteme.isdestymas')
@section('title', 'Projekto prašymas')
@section('content')
    <h2>Projekto prašymas</h2>
    @if($projektas->dalyvio_tipas == 1)
    <h6 style="margin-top:10px">Vardas, pavardė</h6>
    <p>{{ $studentas->Vardas }} {{ $studentas->Pavarde }}</p>
    <h6 style="margin-top:10px">El. Paštas</h6>
        <p>{{ $studentas->El_Pastas }}</p>
    <h6 style="margin-top:10px">Studijų programa</h6>
    <p>{{ $studentas->Studiju_programa }}</p>
    <h6 style="margin-top:10px">Kursas</h6>
    <p>{{ $studentas->Kursas }}</p>
    @else
        <h6 style="margin-top:10px">Vardas, pavardė</h6>
        <p>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</p>
        <h6 style="margin-top:10px">El. Paštas</h6>
        <p>{{ $destytojas->el_pastas }}</p>
        <h6 style="margin-top:10px">Tabelio nr.</h6>
        <p>{{ $destytojas->tabelio_nr }}</p>
    @endif
    <h6 style="margin-top:10px">Motyvacinis</h6>
    <p style="width:40vw">{{ $prasymas->motyvacinis_tekstas }}</p>
    <h6 style="margin-top:10px">Šalis</h6>
    <p>{{ $projektas->salis }}</p>
    <h6 style="margin-top:10px">Įstaiga</h6>
    <p>{{ $projektas->mokymo_istaiga }}</p>
    <h6 style="margin-top:10px">Semestras</h6>
    <p>@foreach($semestro_tipai as $tipas) @if($tipas->id == $projektas->semestras) {{ $tipas->name }} @endif @endforeach {{ $projektas->metai }}</p>
    <form action="/studijos/projektai/{{ $projektas->id }}/prasymai/{{ $prasymas->id }}" method="post" style="float:left;margin:10px 10px 15px 0">
        @csrf
        @method('delete')
        <input type="hidden" name="decision"  value=1 />
        <button class="btn btn-primary" type="submit">Patvirtinti</button>
    </form>
    <form action="/studijos/projektai/{{ $projektas->id }}/prasymai/{{ $prasymas->id }}" method="post" style="float:left;margin:10px 0 15px 0">
        @csrf
        @method('delete')
        <input type="hidden" name="decision"  value=0 />
        <button class="btn btn-primary" type="submit">Atmesti</button>
    </form>
@endsection