@extends('Studiju posisteme.isdestymas')
@section('title', 'Mokslo grupės')
@section('content')
    <h2>Mokslo grupės</h2>
    <form action="/studijos/grupes/sukurti" style="float:left;margin:10px 10px 15px 0">
        @csrf
        <button class="btn btn-dark" type="submit">Sukurti naują grupę</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Fakultetas</th>
            <th scope="col">Vadovas</th>
            <th scope="col">Narių kiekis</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($grupes as $grupe)
        <tr>
            <td>{{ $grupe->Pavadinimas }}</td>
            <td>{{ $grupe->Fakultetas }}</td>
            <td>@foreach($destytojai as $destytojas) @if($grupe->vadovas == $destytojas->fk_destytojas_user) {{ $destytojas->vardas }} {{$destytojas->pavarde}}@endif @endforeach </td>
            <td>{{ $nariai->where('grupe', $grupe->id)->count() }}/{{ $grupe->Nariu_kiekis }}</td>
            <td>
                @can('centras')<form action="/studijos/grupes/{{$grupe->id}}/redaguoti">@csrf<button class="btn btn-dark">Redaguoti</button></form>@endcan
                @can('studentas')<form action="/studijos/grupes/{{$grupe->id}}">@csrf<button class="btn btn-dark">Plačiau</button></form>@endcan
            </td>
            <td><form action="/studijos/grupes/{{$grupe->id}}" method="post">@csrf @method('delete')<button class="btn btn-dark">Ištrinti</button></form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection