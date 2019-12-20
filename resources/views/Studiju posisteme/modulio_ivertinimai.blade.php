@extends('Studiju posisteme.isdestymas')
@section('title', 'Įvertinimai')
@section('content')
    <h2>Modulio įvertinimai</h2>
    <div style="width:30vw;float:left">
    <h6 style="margin-top:10px">Modulio kodas</h6>
    <p>{{ $modulis->kodas }}</p>
    <h6 style="margin-top:10px">Modulio pavadinimas</h6>
    <p>{{ $modulis->Pavadinimas }}</p>
    <h6 style="margin-top:10px">Fakultetas</h6>
    <p>{{ $modulis->Fakultetas }}</p>
    <h6 style="margin-top:10px">Koordinuojantis dėstytojas</h6>
    <p>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}, {{ $destytojas->el_pastas }}</p>
    </div>
    <div style="width:15vw;float:left">
    <table class="table" style="width:30vw;margin-top:20px">
        <thead>
        <tr>
            <th scope="col">Įvertinimas</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($ivertinimai as $ivertinimas)
        <tr>
            <th scope="row">{{$ivertinimas->ivertinimas}}</th>
            <td><form action="/studijos/moduliai/{{$modulis->kodas}}/ivertinimai/{{ $ivertinimas->id }}" method="post">@csrf @method('delete')<button class="btn btn-dark">Ištrinti</button></form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection