@extends('Studiju posisteme.isdestymas')
@section('title', 'Mokslo grupės prašymai')
@section('content')
    <h2>Mokslo grupės prašymai</h2>
    <form action="/studijos/grupes/{{ $grupe-> id }}/redaguoti" style="margin:10px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
    @if($errors->first())
        <div class="alert alert-info" style="width:30vw">
            {{ $errors->first() }}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Studijų programa, kursas</th>
            <th scope="col">El. paštas</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($prasymai as $prasymas)
                <tr>
                    @foreach($studentai as $studentas)
                        @if($prasymas->studentas == $studentas->fk_studentas_user)
                            <td>{{ $studentas->Vardas }} </td>
                            <td>{{ $studentas->Pavarde }}</td>
                            <td>{{ $studentas->Studiju_programa }}, {{ $studentas->Kursas }}</td>
                            <td>{{ $studentas->El_Pastas }}</td>
                            <td><form action="/studijos/grupes/{{ $grupe->id }}/prasymai/{{ $prasymas->id }}" method="get">@csrf <button class="btn btn-dark">Plačiau</button></form></td>
                        @endif
                    @endforeach
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection