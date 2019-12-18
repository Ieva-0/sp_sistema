@extends('Studiju posisteme.isdestymas')
@section('title', 'Projekto dalyviai')
@section('content')
    <h2>Dalyviai</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            @if($projektas->dalyvio_tipas == 1)<th scope="col">Studijų programa, kursas</th>@else <th scope="col">Tabelio nr.</th> @endif
            <th scope="col">El. paštas</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($dalyviai as $dalyvis)
        @if($projektas->dalyvio_tipas == 1)
        <tr>
            @foreach($studentai as $studentas)
                @if($dalyvis->user == $studentas->fk_studentas_user)
            <td>{{ $studentas->Vardas }} </td>
            <td>{{ $studentas->Pavarde }}</td>
            <td>{{ $studentas->Studiju_programa }}, {{ $studentas->Kursas }}</td>
            <td>{{ $studentas->El_pastas }}</td>
            <td><form action="/studijos/projektai/{{ $projektas->id }}/dalyviai/{{ $dalyvis->id }}" method="post">@csrf @method('delete')<button class="btn btn-primary">Pašalinti</button></form></td>
            @endif
            @endforeach
        </tr>
        @else
        <tr>
            @foreach($destytojai as $destytojas)
                @if($dalyvis->user == $destytojas->fk_destytojas_user)
            <td>{{ $destytojas->vardas }}</td>
            <td>{{ $destytojas->pavarde }}</td>
            <td>{{ $destytojas->tabelio_nr }}</td>
            <td>{{ $destytojas->el_pastas }}</td>
            <td><form action="/studijos/projektai/{{ $projektas->id }}/dalyviai/{{ $dalyvis->id }}" method="post">@csrf @method('delete')<button class="btn btn-primary">Pašalinti</button></form></td>
                @endif
                @endforeach
            </tr>
        @endif
        @endforeach
        </tbody>
    </table>
@endsection