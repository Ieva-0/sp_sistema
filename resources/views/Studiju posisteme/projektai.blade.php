@extends('Studiju posisteme.isdestymas')
@section('title', 'Erasmus+')
@section('content')
    <h2>Erasmus+ projektai</h2>
    <form action="/studijos/projektai/sukurti" style="float:left;margin:10px 10px 15px 0">
        @csrf
        <button class="btn btn-dark" type="submit">Sukurti naują projektą</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Semestras</th>
            <th scope="col">Šalis</th>
            <th scope="col">Mokymo įstaiga</th>
            <th scope="col">Dalyvių tipas</th>
            <th scope="col">Dalyvių skaičius</th>
            @can('centras')
                <th scope="col">Prašymų skaičius</th>
            <th scope="col"></th>
            @endcan
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($projektai as $projektas)
        <tr>
            <td>@foreach($semestro_tipai as $tipas) @if($tipas->id == $projektas->semestras) {{ $tipas->name }} @endif @endforeach {{ $projektas->metai }}</td>
            <td>{{ $projektas->salis }}</td>
            <td>{{ $projektas->mokymo_istaiga }}</td>
            <td>@foreach($dalyvio_tipai as $tipas) @if($tipas->id == $projektas->dalyvio_tipas) {{ $tipas->name }} @endif @endforeach</td>
            <td>{{ $dalyviai->where('projektas', $projektas->id)->count() }}/{{ $projektas->dalyviu_skaicius }}</td>
            @can('centras')
            <td>{{ $prasymai->where('projektas', $projektas->id)->count() }}</td>
            <td><form action="/studijos/projektai/{{$projektas->id}}/redaguoti" method="get">@csrf<button class="btn btn-dark">Redaguoti</button></form></td>
            <td><form action="/studijos/projektai/{{$projektas->id}}" method="post">@csrf @method('delete')<button class="btn btn-dark">Ištrinti</button></form></td>
            @elsecan('studdest')
                @if($gali)
                    <td><form action="/studijos/projektai/{{$projektas->id}}/prasymai/sukurti" method="get">@csrf <button class="btn btn-dark">Pateikti prašymą</button></form></td>
                @else
                    <td>Neturite galimybės teikti prašymą</td>
                @endif
            @endcan
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection