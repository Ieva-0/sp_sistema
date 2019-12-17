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
    <h1 align="center">Paskaitos redagavimas</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4">

        </div>
        <div>
            <!-- edit form column -->
            <div>

                <h3>Paskaitos redagavimas</h3>

                <form method="post" enctype="multipart/form-data" action="{{ route('paskaita-edit-update',['id' => $paskaita->id]) }}" class="form-horizontal">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Paskaitos pavadinimas:</label>
                        <div>
                            <input class="form-control" type="text" value="{{ $paskaita->tema }}" name="tema" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Data:</label>
                        <div>
                            <input class="form-control" type="date" id="start" value="{{ $paskaita->data }}" name="data" required min="2018-01-01" max="2020-12-31">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Trukmė:</label>
                        <div>
                            <input class="form-control" type="time" id="appt" value="{{ $paskaita->trukme }}" name="trukme" min="00:00" max="12:00" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Vieta:</label>
                        <div>
                            <input class="form-control" type="text" value="{{ $paskaita->vieta }}" name="vieta" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Papildoma informacija:</label>
                        <div>
                            <input class="form-control" type="text" value="{{ $paskaita->papildoma_informacija }}" name="papildoma_informacija">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Lektorius:</label>
                        <div>
                            <input class="form-control" type="text" value="{{ $paskaita->lektorius }}" required name="lektorius">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pasirinkite auditoriją:</label>
                        <select name="fk_Auditorijaid_Auditorija" value="{{ $paskaita->fk_Auditorijaid_Auditorija }}" class="form-control input-lg dynamic" data-dependent="state" required>
                            <option value="" disabled>Pasirinkite auditoriją</option>
                            @foreach($auditorija_list as $auditorija)
                            @if( $auditorija->id_Auditorija == $paskaita->fk_Auditorijaid_Auditorija)
                            <option selected value="{{ $auditorija->id_Auditorija}}">{{ $auditorija->kabineto_Nr }}, {{ $auditorija->adresas }} [{{ $auditorija->vietu_skaicius }}]</option>
                            @else
                            <option value="{{ $auditorija->id_Auditorija}}">{{ $auditorija->kabineto_Nr }}, {{ $auditorija->adresas }} [{{ $auditorija->vietu_skaicius }}]</option>
                            @endif
                            @endforeach
                        </select>
                    </div>




                    <div>
                        <label>Paskaitos vykimo laikas:</label>
                        <select id="1" name="laikas" class="form-control">
                            @if( 1 == $paskaita->laikas)
                            <option selected value="1">09:00-10:30</option>
                            @else
                            <option value="1">09:00-10:30</option>
                            @endif

                            @if( 2 == $paskaita->laikas)
                            <option selected value="2">11:00-12:30</option>
                            @else
                            <option value="2">11:00-12:30</option>
                            @endif

                            @if( 3 == $paskaita->laikas)
                            <option selected value="3">13:30-15:00</option>
                            @else
                            <option value="3">13:30-15:00</option>
                            @endif

                            @if( 4 == $paskaita->laikas)
                            <option selected value="4">15:30-17:00</option>
                            @else
                            <option value="4">15:30-17:00</option>
                            @endif

                            @if( 5 == $paskaita->laikas)
                            <option selected value="5">17:30-19:00</option>
                            @else
                            <option value="5">17:30-19:00</option>
                            @endif

                            @if( 6 == $paskaita->laikas)
                            <option selected value="6">19:15-20:45</option>
                            @else
                            <option value="6">19:15-20:45</option>
                            @endif
                        </select>
                    </div>
                    <div>
                        <label>Mokymo kalbos:</label>
                        <select id="1" name="mokymo_kalba" class="form-control">
                            @if( 1 == $paskaita->mokymo_kalba)
                            <option selected value="1">Lietuvių</option>
                            @else
                            <option value="1">Lietuvių</option>
                            @endif

                            @if( 2 == $paskaita->mokymo_kalba)
                            <option selected value="2">English</option>
                            @else
                            <option value="2">English</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Išsaugoti pakeitimus">
                        </div>
                </form>
                <br>
                <div>
                    <form method="POST" action="/imone/paskaitos/{{$paskaita->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Ar tikrai?')" class="btn btn-danger delete-user" value="Ištrinti paskaitą">
                    </form>
                </div>
                <br>
                <div>
                    <input onclick="return confirm('Ar tikrai?')" action="/imone/paskaitos/{{$paskaita->id}}/edit" type="reset" class="btn btn-info" value="Atšaukti pakeitimus">
                </div>
            </div>



        </div>
    </div>
</div>
<hr>

@endsection