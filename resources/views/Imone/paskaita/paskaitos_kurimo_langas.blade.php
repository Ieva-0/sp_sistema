@extends('Imone.imones_navigavimo_meniu')

@section('content')
<title>Paskaitos įvedimas</title>


<!-- Fonts Testas-->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Styles -->
<style>
    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
<span style="display:inline-block; width:WIDTH;"></span>

</head>

<div class="container">
    <h1 align="center">Paskaitos įvedimas</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">

        </div>
        <div>
            <!-- edit form column -->
            <div>
                <h3>Paskaitos informacija</h3>

                <form method="post" action="{{url('imone/create/create')}}" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Paskaitos pavadinimas:</label>
                        <div>
                            <input class="form-control" type="text" name="tema" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Data:</label>
                        <div>
                            <input class="form-control" type="date" id="start" name="data" required min="2018-01-01" max="2020-12-31">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Trukmė:</label>
                        <div>
                            <input class="form-control" type="time" id="appt" name="trukme" min="00:00" max="12:00" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Vieta:</label>
                        <div>
                            <input class="form-control" type="text" name="vieta" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Papildoma informacija:</label>
                        <div>
                            <input class="form-control" type="text" name="papildoma_informacija">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Lektorius:</label>
                        <div>
                            <input class="form-control" type="text" required name="lektorius">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label>Pasirinkite auditoriją:</label>
                        <select name="fk_Auditorijaid_Auditorija" id="0" class="form-control input-lg dynamic" data-dependent="state" required>
                            <option value="" selected disabled>Pasirinkite auditoriją</option>
                            @foreach($auditorija_list as $auditorija)
                            <option value="{{ $auditorija->id_Auditorija}}">{{ $auditorija->kabineto_Nr }}, {{ $auditorija->adresas }} [{{ $auditorija->vietu_skaicius }}]</option>
                            @endforeach
                        </select>
                    </div>




                    <div>
                        <label>Paskaitos vykimo laikas:</label>
                        <select id="1" name="laikas" class="form-control">
                            <option value="1">09:00-10:30</option>
                            <option value="2">11:00-12:30</option>
                            <option value="3">13:30-15:00</option>
                            <option value="4">15:30-17:00</option>
                            <option value="5">17:30-19:00</option>
                            <option value="6">19:15-20:45</option>
                        </select>
                    </div>
                    <div>
                        <label>Mokymo kalbos:</label>
                        <select id="1" name="mokymo_kalba" class="form-control">
                            <option value="1">Lietuvių</option>
                            <option value="2">English</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Įrašyti paskaitą">
                            <span></span>
                            <input action="/imone/paskaitos" type="reset" onclick="return confirm('Ar tikrai?')" class="btn btn-danger" value="Atšaukti kūrimo pakeitimus">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    @endsection