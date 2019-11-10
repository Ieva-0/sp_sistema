<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Redaguoti paskaitą</title>

    <!-- Fonts -->
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
    <div class="content" align="center">

        <div class="links">
            <a href="{{ URL::previous() }}">Go Back</a>
            <a href="{{ url('imone/prisijungti ') }}">Prisijungti</a>
            <a href="{{ url('imone/registracija ') }}">Registruotis</a>
            <a href="{{ url('imone/paskaitos ') }}">Paskaitu sąrašas</a>
            <a href="{{ url('imone/paskaitos ') }}">Praktikų sąrašas</a>
        </div>
    </div>
</head>

<body>
    <div class="container">
        <h1 align="center">Paskaitos redagavimas</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">

            </div>
            <div>


                <!-- edit form column -->
                <div>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>
                        This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <h3>Paskaitos informacija</h3>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label>Paskaitos pavadinimas:</label>
                            <div>
                                <input class="form-control" type="text" value="Įvadinė paskaita">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Srities pavadinimas:</label>
                            <div>
                                <input class="form-control" type="text" value="Duomenų bazės">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Įmonė:</label>
                            <div>
                                <input class="form-control" type="text" value="Fezo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Paštas informacijai:</label>
                            <div>
                                <input class="form-control" type="text" value="janesemail@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Data:</label>
                            <div>
                                <input class="form-control" type="date" id="start" name="trip-start" value="2019-12-01" min="2018-01-01" max="2020-12-31">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Laikas:</label>
                            <div>
                                <input class="form-control" type="time" id="appt" name="appt" min="09:00" max="21:00" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Vieta:</label>
                            <div>
                                <input class="form-control" type="text" value="Studentų g. 57 XI. r. 315">
                            </div>
                        </div>
                        <div>
                            <select id="user_language" class="form-control">
                                <option value="Lietuvių">Lietuvių</option>
                                <option value="English">English</option>
                                <option value="Russian">Russian</option>
                                <option value="Latvian">Latvian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <div>
                                <input type="button" class="btn btn-primary" value="Išsaugoti">
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
</body>

</html>