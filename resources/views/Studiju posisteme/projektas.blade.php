@extends('Studiju posisteme.isdestymas')
@section('title', 'Grupė')
@section('content')
    <form action="/studijos/projektai">
        @csrf
        <div class="form-group">
            <label for="metai">Metai</label>
            <select class="form-control" id="metai" style="width:15vw">
                <option>2019/2020</option>
                <option>2020/2021</option>
                <option>2021/2022</option>
            </select>
        </div>
        <div class="form-group">
            <label for="semestras">Semestras</label>
            <select class="form-control" id="semestras" style="width:15vw">
                <option>Rudens</option>
                <option>Pavasario</option>
            </select>
        </div>
        <div class="form-group">
            <label for="salis">Šalis</label>
            <input type="text" class="form-control" id="salis" style="width:15vw" value="Slovakija">
        </div>
        <div class="form-group">
            <label for="istaiga">Mokymo įstaiga</label>
            <input type="text" class="form-control" id="istaiga" style="width:15vw" value="Technologijų universitetas">
        </div>
        <div class="form-group">
            <label for="dalyviai">Dalyvių kiekis</label>
            <input type="text" class="form-control" id="dalyviai" style="width:15vw" value="13">
        </div>
        <div class="form-group">
            <label for="semestras">Dalyvių tipas</label>
            <select class="form-control" id="semestras" style="width:15vw">
                <option>Studentai</option>
                <option>Dėstytojai</option>
            </select>
        </div>
        <button class="btn btn-primary">Patvirtinti</button>
    </form>
    <form action="/studijos/projektai" style="float:left;margin:10px 0 15px 0">
        @csrf
        <button class="btn btn-primary" type="submit">Atšaukti</button>
    </form>
@endsection