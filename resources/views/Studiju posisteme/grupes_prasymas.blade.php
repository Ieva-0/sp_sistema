@extends('Studiju posisteme.isdestymas')
@section('title', 'Grupės prašymas')
@section('content')
    <h2>Mokslo grupės prašymas</h2>
    <h6 style="margin-top:10px">Vardas, pavardė</h6>
    <p>{{ $studentas->Vardas }} {{ $studentas->Pavarde }}</p>
    <h6 style="margin-top:10px">El. Paštas</h6>
        <p>{{ $studentas->El_Pastas }}</p>
    <h6 style="margin-top:10px">Studijų programa</h6>
    <p>{{ $studentas->Studiju_programa }}</p>
    <h6 style="margin-top:10px">Kursas</h6>
    <p>{{ $studentas->Kursas }}</p>
        <h6 style="margin-top:10px">Vadovas</h6>
        <p>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</p>
        <h6 style="margin-top:10px">El. Paštas</h6>
        <p>{{ $destytojas->el_pastas }}</p>
    <h6 style="margin-top:10px">Motyvacinis</h6>
    <p style="width:40vw">{{ $prasymas->motyvacinis_tekstas }}</p>
    <h6 style="margin-top:10px">Pavadinimas</h6>
    <p>{{  $grupe->Pavadinimas }}</p>
    <h6 style="margin-top:10px">Įstaiga</h6>
    <p>{{ $grupe->Fakultetas }}</p>
    <form action="/studijos/grupes/{{ $grupe->id }}/prasymai/{{ $prasymas->id }}" method="post" style="float:left;margin:10px 10px 15px 0">
        @csrf
        @method('delete')
        <input type="hidden" name="decision"  value=1 />
        <button class="btn btn-dark" type="submit">Patvirtinti</button>
    </form>
    <form action="/studijos/grupes/{{ $grupe->id }}/prasymai/{{ $prasymas->id }}" method="post" style="float:left;margin:10px 0 15px 0">
        @csrf
        @method('delete')
        <input type="hidden" name="decision"  value=0 />
        <button class="btn btn-dark" type="submit">Atmesti</button>
    </form>
@endsection