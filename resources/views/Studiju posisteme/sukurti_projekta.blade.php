@extends('Studiju posisteme.isdestymas')
@section('title', 'Naujas Erasmus+ projektas')
@section('content')
    <h2>Sukurti naują Erasmus+ projektą</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/studijos/projektai" method="post">
        @csrf
        <div class="form-group">
            <label for="metai">Metai</label>
            <select class="form-control" id="metai" name="metai" style="width:15vw">
                <option value="2019/2020">2019/2020</option>
                <option value="2020/2021">2020/2021</option>
                <option value="2021/2022">2021/2022</option>
            </select>
        </div>
        <div class="form-group">
            <label for="semestras">Semestras</label>
            <select class="form-control" id="semestras" name="semestras" style="width:15vw">
                <option value=1>Rudens</option>
                <option value=2>Pavasario</option>
            </select>
        </div>
        <div class="form-group">
            <label for="salis">Šalis</label>
            <input type="text" class="form-control" id="salis" name="salis" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="istaiga">Mokymo įstaiga</label>
            <input type="text" class="form-control" id="istaiga" name="istaiga" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="dalyviai">Dalyvių kiekis</label>
            <input type="number" class="form-control" id="dalyviai" name="dalyviai" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="tipas">Dalyvių tipas</label>
            <select class="form-control" id="tipas" name="tipas" style="width:15vw">
                <option value=1>Studentai</option>
                <option value=2>Dėstytojai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipas">Registracija</label>
            <select class="form-control" id="registracija" name="registracija" style="width:15vw">
                <option value=1 {{ $projektas->registracija == 1 ? 'selected' : '' }}>vyksta</option>
                <option value=0 {{ $projektas->dalyvio_tipas == 0 ? 'selected' : '' }}>uždaryta</option>
            </select>
        </div>
        <input type="hidden" value="1" name="user" />
        <button class="btn btn-dark">Sukurti</button>
    </form>
@endsection