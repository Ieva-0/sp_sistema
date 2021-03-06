@extends('Studiju posisteme.isdestymas')
@section('title', 'Karjeros mentorystės prašymai')
@section('content')
<h2>Karjeros mentorystės prašymai</h2>

<form action="/studijos/mentoryste/laisvi" style="margin:10px 10px 15px 0">
    @csrf
    <button class="btn btn-dark" type="submit">Laisvi mentoriai</button>
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
        <th scope="col">Studijų programa</th>
        <th scope="col">Kursas</th>
        <th scope="col">El. Paštas</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($prasymai as $prasymas)
        @foreach($studentai as $studentas)
            @if($prasymas->studentas == $studentas->fk_studentas_user)
            <tr>
                <td>{{ $studentas->Vardas }} </td>
                <td>{{ $studentas->Pavarde }}</td>
                <td>{{ $studentas->Studiju_programa }}</td>
                <td>{{ $studentas->Kursas }}</td>
                <td>{{ $studentas->El_Pastas }}</td>
                <td><form action="/studijos/mentoryste/prasymai/{{ $prasymas->id }}" method="get">@csrf <button class="btn btn-dark">Plačiau</button></form></td>
            </tr>
            @endif
        @endforeach
    @endforeach
    </tbody>
</table>
@endsection