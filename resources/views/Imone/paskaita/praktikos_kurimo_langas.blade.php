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
    <h1 align="center">Praktikos įvedimas</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">

        </div>
        <div>
            <!-- edit form column -->
            <div>
               
                <h3>Praktikos galimybių kūrimas</h3>

                <form method="post" action="{{url('imone/create-praktika/create')}}" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Projekto tema:</label>
                        <div>

                            <input class="form-control" type="text" name="projekto_Tema" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Data:</label>
                        <div>
                            <input class="form-control" type="date" id="start" name="laikas" required min="2018-01-01" max="2020-12-31">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Trukmė (val.):</label>
                        <div>
                            <input class="form-control" type="number" id="appt" name="trukme" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Įrašyti praktiką">
                            <span></span>
                            <input action="/imone/praktikos" type="reset" onclick="return confirm('Ar tikrai?')" class="btn btn-danger" value="Atšaukti kūrimo pakeitimus">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    @endsection