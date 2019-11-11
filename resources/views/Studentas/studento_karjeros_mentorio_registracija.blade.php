<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Studento prisijungimas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .content {
            padding: 50px;
        }

        .title {
            font-size: 40px;
            padding-bottom: 50px;
            text-align: center;
        }
        .top-right > a{
            position: absolute;
            right: 10px;
            top: 18px;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .top-left > a{
            position: absolute;
            left: 10px;
            top: 18px;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a {
            text-align: center;
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .table {
            margin: auto;
        }

    </style>

</head>
<body>

    <div class="title">
        Mentorių sąrašas
    </div>

    <div class="top-right ">
        <a href="{{ url('studentas') }}">Pagrindinis puslapis</a>
    </div>

    <div class="align-middle">
        <table class="table table-bordered " style="width: 80%" >
            <thead class="thead-dark">
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Sritis</th>
                <th scope="col">Paštas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Žilvinas</td>
                <td>Tomkevičius</td>
                <td>Informatika</td>
                <td>žilvinas@gmail.com</td>
            </tr>
            <tr>
                <td>Povilas</td>
                <td>Bagdonas</td>
                <td>Matematika</td>
                <td>povilas@gmail.com</td>
            </tr>
            </tbody>
        </table>
    </div>
<div class="content">
    <form>
        <div class="form-group" style="width: 18%">
            <label for="exampleFormControlInput1">Elektroninis paštas</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group" style="width: 50%">
            <label for="exampleFormControlTextarea1">Motyvacinis laiškas</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Siūsti</button>
    </form>
</div>



</body>

</html>
