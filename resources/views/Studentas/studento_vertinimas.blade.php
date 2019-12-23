@extends('Studentas.studento_isdestymas')
@section('title', 'Moduliai')

@section('content')
    <div class="title">
        Užsiemimai
    </div>

    <form  action="/studentas/moduliai/{{$modulioId}}" method="post" id="usrform" role="form" style="font-size: 15px">
        @csrf
        <div class="form-group">
            <label for="aprasas">Papildoma informacija:</label>
        </div>
        <textarea rows="4" cols="50" name="aprasas" form="usrform" placeholder="Papildoma informacija..." style="max-height: 250px;"></textarea>

        <div class="form-group">
            <label for="vertinimas">Vertinimas:</label>
            <input type="number" class="form-control" id="usform" max="10" min="0" name="vertinimas" style="width:60px; font-size: 15px; height: 30px">
        </div>

        <div class = "submit">
            <button type="submit" class="btn btn-primary">Vertinti</button>
        </div>
    </form>



@endsection