@extends('Studiju posisteme.isdestymas')
@section('title', 'Prisijungti')
@section('content')
    <h2>Prisijungti</h2>
    @if($errors->first())
        <div class="alert alert-danger" style="width:20vw">
            {{ $errors->first() }}
        </div>
    @endif
    <form method="post" action="/studijos/prisijungimas">
        @csrf
        <div class="form-group">
            <label for="email">El. paštas</label>
            <input type="text" class="form-control" id="email" name="email" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="slaptazodis">Slaptažodis</label>
            <input type="password" class="form-control" id="password" name="password" style="width:15vw">
        </div>
        <button class="btn btn-dark">Prisijungti</button>
    </form>
@endsection