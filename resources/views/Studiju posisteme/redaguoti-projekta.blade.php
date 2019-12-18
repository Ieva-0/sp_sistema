@extends('Studiju posisteme.isdestymas')
@section('title', 'Redaguoti projektą')
@section('content')
    <h2>Redaguoti Erasmus+ projektą</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/studijos/projektai/{{$projektas->id}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="metai">Metai</label>
            <select class="form-control" id="metai" name="metai" style="width:15vw">
                <option value="2019/2020" {{ $projektas->metai == '2019/2020' ? 'selected' : '' }}>2019/2020</option>
                <option value="2020/2021" {{ $projektas->metai == '2020/2021' ? 'selected' : '' }}>2020/2021</option>
                <option value="2021/2022" {{ $projektas->metai == '2021/2022' ? 'selected' : '' }}>2021/2022</option>
            </select>
        </div>
        <div class="form-group">
            <label for="semestras">Semestras</label>
            <select class="form-control" id="semestras" name="semestras" style="width:15vw">
                <option value=1 {{ $projektas->semestras == 1 ? 'selected' : '' }}>Rudens</option>
                <option value=2 {{ $projektas->semestras == 2 ? 'selected' : '' }}>Pavasario</option>
            </select>
        </div>
        <div class="form-group">
            <label for="salis">Šalis</label>
            <input type="text" class="form-control" id="salis" name="salis" style="width:15vw" value="{{$projektas->salis}}">
        </div>
        <div class="form-group">
            <label for="istaiga">Mokymo įstaiga</label>
            <input type="text" class="form-control" id="istaiga" name="istaiga" style="width:15vw" value="{{ $projektas->mokymo_istaiga }}">
        </div>
        <div class="form-group">
            <label for="dalyviai">Dalyvių kiekis</label>
            <input type="number" class="form-control" id="dalyviai" name="dalyviai" style="width:15vw" value={{$projektas->dalyviu_skaicius}}>
        </div>
        <div class="form-group">
            <label for="tipas">Dalyvių tipas</label>
            <select class="form-control" id="tipas" name="tipas" style="width:15vw">
                <option value=1 {{ $projektas->dalyvio_tipas == 1 ? 'selected' : '' }}>Studentai</option>
                <option value=2 {{ $projektas->dalyvio_tipas == 2 ? 'selected' : '' }}>Dėstytojai</option>
            </select>
        </div>
        <input type="hidden" name="user" value="{{$projektas->user}}" />
        <button class="btn btn-primary" style="float:left">Patvirtinti</button>
    </form>
    <form action="/studijos/projektai/{{$projektas->id}}/dalyviai" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-primary" type="submit">Dalyviai</button>
    </form>
    <form action="/studijos/projektai/{{$projektas->id}}/prasymai" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-primary" type="submit">Prašymai</button>
    </form>
    <form action="/studijos/projektai" style="float:left;margin-left:15px">
        @csrf
        <button class="btn btn-primary" type="submit">Atšaukti</button>
    </form>
@endsection