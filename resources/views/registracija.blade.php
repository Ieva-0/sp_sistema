@extends('Studiju posisteme.isdestymas')
@section('title', 'Registracija')
@section('content')
    <h2>Registracija</h2>
    <form method="POST" action="/registracija">
        @csrf
        <div class="form-group">
            <label for="email">El.paštas</label>
            <input type="email" class="form-control" id="email" name="email" style="width:15vw" required>
        </div>
        <div class="form-group">
            <label for="name">Vardas</label>
            <input type="text" class="form-control" id="name" name="name" style="width:15vw" required>
        </div>
        <div class="form-group">
            <label for="surname">Pavardė</label>
            <input type="text" class="form-control" id="surname" name="surname" style="width:15vw" required>
        </div>
        <div class="form-group">
            <label for="password">Slaptažodis</label>
            <input type="password" class="form-control" id="password" name="password" style="width:15vw">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Slaptažodžio patvirtinimas</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation" style="width:15vw" required>
        </div>
        <div class="form-group" style="width:15vh">
            <label for="user_level">Jūs esate:</label>
            <select class="form-control" id="user_level" name="user_level">
                <option value="1">studentas</option>
                <option value="2">dėstytojas</option>
                <option value="3">įmonė</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registruotis</button>
        {{ $errors->first() }}
    </form>
@endsection