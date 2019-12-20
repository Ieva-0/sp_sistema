@extends('Studiju posisteme.isdestymas')
@section('title', 'Moduliai')
@section('content')
    <h2>Moduliai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kodas</th>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Koordinuojantis dėstytojas</th>
            <th scope="col">Įvertinimų vidurkis</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($moduliai as $modulis)
        <tr>
            <th scope="row">{{ $modulis->kodas }}</th>
            <td>{{ $modulis->Pavadinimas }}</td>
            @foreach($destytojai as $destytojas)
                @if($destytojas->fk_destytojas_user == $modulis->fk_Destytojastabelio_nr)
            <td>{{ $destytojas->vardas }} {{ $destytojas->pavarde }}</td>
                @endif
            @endforeach
            @foreach($ivertinimai as $ivertinimas)
                @if($ivertinimas->modulis == $modulis->kodas)
                    <td>{{ number_format($ivertinimas->avg, '1') }}</td>
                @endif
            @endforeach
            <td><form action="/studijos/moduliai/{{ $modulis->kodas }}/ivertinimai" method="get">@csrf<button class="btn btn-dark">Modulio įvertinimai</button></form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection