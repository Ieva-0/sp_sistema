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
<div class="content">

    <div class="links">
        <a href="{{ url('/') }}">Namo</a>

    </div>
</div>
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
                @if(session()->has('message'))

                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    {{ session()->get('message') }}
                </div>
                @endif
                <h3>Paskaitos informacija</h3>

                <form method="post" action="{{url('/aplikacija-praktikai/create')}}" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Vardas:</label>
                        <div>
                            <input class="form-control" type="text" name="vardas" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pavardė:</label>
                        <div>
                            <input class="form-control" type="text" name="pavarde" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Baigimo metai:</label>
                        <div>
                            <input class="form-control" type="date" id="start" name="baigimo_laikas" data-date-format="YYYY-MM" required min="2018-01" max="2020-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Paštas:</label>
                        <div>
                            <input class="form-control" type="email" name="pastas" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pasirinkite kursą:</label>
                        <select name="kursas" id="0" class="form-control input-lg dynamic" data-dependent="state" required>
                            <option value="" selected disabled>Pasirinkite kursą</option>
                            <option value="1-as kursas">1-as kursas</option>
                            <option value="2-as kursas">2-as kursas</option>
                            <option value="3-as kursas">3-as kursas</option>
                            <option value="4-as kursas">4-as kursas</option>
                            <option value="5-as kursas">5-as kursas</option>
                            <option value="6-as kursas">6-as kursas</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pasirinkite išsilavinimą:</label>
                        <select name="pareigos" id="0" class="form-control input-lg dynamic" data-dependent="state" required>
                            <option value="" selected disabled>Pasirinkite išsilavinimą</option>
                            <option value="Bakalauras">Bakalauras</option>
                            <option value="Magistas">Magistas</option>
                            <option value="Daktaro">Daktaro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pasirinkite praktiką:</label>
                        <select name="fk_praktikosid" id="0" class="form-control input-lg dynamic" data-dependent="state" required>
                            <option value="" selected disabled>Pasirinkite praktiką</option>
                            @foreach($results as $praktika)
                            @if(isset($id))
                            @if ($praktika->id == $id)
                            <option selected value="{{ $praktika->id}}">{{ $praktika->pavadinimas }}, {{ $praktika->trukme }}, {{ $praktika->projekto_Tema }} [{{ $praktika->dalyviu_Skaicius }}dal.]</option>
                            @else
                            <option value="{{ $praktika->id}}">{{ $praktika->pavadinimas }}, {{ $praktika->trukme }}, {{ $praktika->projekto_Tema }} [{{ $praktika->dalyviu_Skaicius }}dal.]</option>
                            @endif
                            @else
                            <option value="{{ $praktika->id}}">{{ $praktika->pavadinimas }}, {{ $praktika->trukme }}, {{ $praktika->projekto_Tema }} [{{ $praktika->dalyviu_Skaicius }}dal.]</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Įrašyti paskaitą">
                            <span></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>