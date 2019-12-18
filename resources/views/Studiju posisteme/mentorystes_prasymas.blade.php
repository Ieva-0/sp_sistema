@extends('Studiju posisteme.isdestymas')
@section('title', 'Mentorystės prašymas')
@section('content')
    <h2>Mentorystės prašymas</h2>
    <h6 style="margin-top:10px">Vardas, pavardė</h6>
    <p>{{ $studentas->Vardas }} {{ $studentas->Pavarde }}</p>
    <h6 style="margin-top:10px">El. Paštas</h6>
    <p>{{ $studentas->El_Pastas }}</p>
    <h6 style="margin-top:10px">Studijų programa</h6>
    <p>{{ $studentas->Studiju_programa }}</p>
    <h6 style="margin-top:10px">Kursas</h6>
    <p>{{ $studentas->Kursas }}</p>
    <h6 style="margin-top:10px">Motyvacinis</h6>
    <p style="width:40vw">{{ $prasymas->motyvacinis_tekstas }}</p>
    <form action="/studijos/mentoryste/prasymai/{{$prasymas->id}}" style="margin:10px 0 15px 0" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="decision"  value=1 />
        <div class="form-group">
            <label for="mentorius">Laisvi mentoriai</label>
            <select class="form-control" id="mentorius" name="mentorius" style="width:15vw">
                @foreach($destytojai as $destytojas)
                    <option value={{ $destytojas->fk_destytojas_user }}>{{$destytojas->vardas}} {{$destytojas->pavarde}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit" style="float:left">Priskirti</button>
    </form>
    <form action="/studijos/mentoryste/prasymai/{{$prasymas->id}}" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="decision"  value=0 />
        <button class="btn btn-primary" type="submit" style="float:left; margin-left:15px">Atmesti</button>
    </form>
@endsection