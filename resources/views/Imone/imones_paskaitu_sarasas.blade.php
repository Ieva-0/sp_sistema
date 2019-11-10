<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <div class="content">

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
    <div class="flex-center position-ref full-height">
       
    <div class="list-group">
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">First List Group Item Heading</h4>
            <p class="list-group-item-text">List Group Item Text</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
            <p class="list-group-item-text">List Group Item Text</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
            <p class="list-group-item-text">List Group Item Text</p>
        </a>
    </div>

    </div>
</body>

</html>