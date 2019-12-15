@extends('Studiju posisteme.isdestymas')
@section('title', 'Prisijungti')
@section('content')
    <h2>Prisijungti</h2>
    <form method="post" action="/prisijungimas">
        @csrf
        <div class="form-group">
            <label for="email">El. paštas</label>
            <input type="email" class="form-control" id="email" name="email" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="slaptazodis">Slaptažodis</label>
            <input type="password" class="form-control" id="password" name="password" style="width:15vw">
        </div>
        <button class="btn btn-primary">Prisijungti</button>
        {{ $errors->first('message') }}

    </form>
@endsection