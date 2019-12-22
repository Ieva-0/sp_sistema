@extends('Studiju posisteme.isdestymas')
@section('title', 'Pateikti karjeros mentorystės prašymą')
@section('content')
    <h2>Karjeros mentorystės prašymas</h2>
    @if($errors->first())
        <div class="alert alert-info" >
            {{ $errors->first() }}
        </div>
    @endif
    <form method="post" action="/studijos/mentoryste/prasymai">
        @csrf
        <div class="form-group">
            <label for="motyvacinis">Trumpas motyvacinis laiškas (iki 1000 simbolių)</label>
            <textarea class="form-control" id="motyvacinis" name="motyvacinis" style="width:30vw;height:30vh"></textarea>
        </div>
        <button class="btn btn-dark" type="submit" style="float:left">Pateikti</button>
    </form>
    <form action="/studijos" method="get" style="float:left;margin-left: 15px">
        @csrf
        <button class="btn btn-dark" type="submit">Atgal</button>
    </form>
@endsection