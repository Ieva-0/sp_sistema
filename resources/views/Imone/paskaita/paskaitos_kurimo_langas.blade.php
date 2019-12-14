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
                @if(count($errors)) > 0 )
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>

                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach

                </div>
                @endif
                @if(\Session::has('success'))

                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    {{ \Session::get('seccess')}}
                </div>
                @endif
                <h3>Paskaitos informacija</h3>

                <form method="post" action="{{url('imone/create/create')}}" class="form-horizontal" role="form">

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
                        <label>Vedimo laikas:</label>
                        <div>
                            <input class="form-control" type="time" name="laikas" id="appt" name="trukme" min="00:00" max="12:00" required>
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
                        <label>Darbuotojas:</label>
                        <div>
                            <input class="form-control" type="text" required name="fk_Darbuotojasid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Auditorija:</label>
                        <div>
                            <input class="form-control" type="number" required name="fk_Auditorijaid_Auditorija">
                        </div>
                    </div>
                    <div>
                        <select id="1" name="mokymo_kalba" class="form-control">
                            <option value="1">Lietuvių</option>
                            <option value="2">English</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Išsaugoti">
                            <span></span>
                            <input type="button" class="btn btn-danger" value="Ištrynti">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Atšaukti pakeitimus">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    @endsection