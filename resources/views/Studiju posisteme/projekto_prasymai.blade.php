@extends('Studiju posisteme.isdestymas')
@section('title', 'Erasmus+ prašymai')
@section('content')
    <h2>Erasmus+ prašymai</h2>
    <form action="/studijos/projektai/{{ $projektas-> id }}/redaguoti" style="float:left;margin:10px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
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
        @foreach($prasymai as $prasymas)
            @if($projektas->dalyvio_tipas == 1)
                <tr>
                    @foreach($studentai as $studentas)
                        @if($prasymas->user == $studentas->fk_studentas_user)
                            <td>{{ $studentas->Vardas }} </td>
                            <td>{{ $studentas->Pavarde }}</td>
                            <td>{{ $studentas->Studiju_programa }}, {{ $studentas->Kursas }}</td>
                            <td>{{ $studentas->El_Pastas }}</td>
                            <td><form action="/studijos/projektai/{{ $projektas->id }}/prasymai/{{ $prasymas->id }}" method="get">@csrf <button class="btn btn-dark">Plačiau</button></form></td>
                        @endif
                    @endforeach
                </tr>
            @else
                <tr>
                    @foreach($destytojai as $destytojas)
                        @if($prasymas->user == $destytojas->fk_destytojas_user)
                            <td>{{ $destytojas->vardas }}</td>
                            <td>{{ $destytojas->pavarde }}</td>
                            <td>{{ $destytojas->tabelio_nr }}</td>
                            <td>{{ $destytojas->el_pastas }}</td>
                            <td><form action="/studijos/projektai/{{ $projektas->id }}/prasymai/{{ $prasymas->id }}" method="get">@csrf <button class="btn btn-dark">Plačiau</button></form></td>
                        @endif
                    @endforeach
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endsection