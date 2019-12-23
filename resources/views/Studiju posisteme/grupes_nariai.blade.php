@extends('Studiju posisteme.isdestymas')
@section('title', 'Projekto dalyviai')
@section('content')
    <h2>Nariai</h2>
    <form action="/studijos/grupes/{{ $grupe->id }}/redaguoti" style="margin:10px">
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
            <th scope="col">El. paštas</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($nariai as $narys)
            @foreach($users as $user)
                @if($user->id == $narys->user && $user->user_level == 1)
                <tr>
                    @foreach($studentai as $studentas)
                        @if($narys->user == $studentas->fk_studentas_user)
                            <td>{{ $studentas->Vardas }} </td>
                            <td>{{ $studentas->Pavarde }}</td>
                            <td>{{ $studentas->El_Pastas }}</td>
                            <td><form action="/studijos/grupes/{{ $grupe->id }}/nariai/{{ $narys->id }}" method="post">@csrf @method('delete')<button class="btn btn-dark">Pašalinti</button></form></td>
                        @endif
                    @endforeach
                </tr>
            @elseif($user->id == $narys->user && $user->user_level == 2)
                    <tr>
                    @foreach($destytojai as $destytojas)
                        @if($narys->user == $destytojas->fk_destytojas_user)
                            <td>{{ $destytojas->vardas }}</td>
                            <td>{{ $destytojas->pavarde }}</td>
                            <td>{{ $destytojas->el_pastas }}</td>
                            <td><form action="/studijos/grupes/{{ $grupe->id }}/nariai/{{ $narys->id }}" method="post">@csrf @method('delete')<button class="btn btn-dark">Pašalinti</button></form></td>
                        @endif
                    @endforeach
                </tr>
            @endif
            @endforeach
        @endforeach
        </tbody>
    </table>
@endsection