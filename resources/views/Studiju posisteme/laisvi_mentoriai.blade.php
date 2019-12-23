@extends('Studiju posisteme.isdestymas')
@section('title', 'Laisvi mentoriai')
@section('content')
    <h2>Laisvi mentoriai</h2>
    <form action="/studijos/mentoryste/prasymai" method="get" style="margin-left: 15px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">El. Paštas</th>
            <th scope="col">Tabelio nr.</th>
        </tr>
        </thead>
        <tbody>
        @foreach($destytojai as $destytojas)
        <tr>
            <td>{{$destytojas->vardas}}</td>
            <td>{{$destytojas->pavarde}}</td>
            <td>{{$destytojas->tabelio_nr}}</td>
            <td>{{$destytojas->el_pastas}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection