<div class="login-page">
    <div class="form">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

            .login-page {
                width: 360px;
                padding: 8% 0 0;
                margin: auto;
            }

            .form {
                position: relative;
                z-index: 1;
                background: #FFFFFF;
                max-width: 360px;
                margin: 0 auto 100px;
                padding: 45px;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }

            .form input {
                font-family: "Roboto", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 14px;
            }

            .form button {
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #4CAF50;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #FFFFFF;
                font-size: 14px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
            }

            .form button:hover,
            .form button:active,
            .form button:focus {
                background: #43A047;
            }

            .form .message {
                margin: 15px 0 0;
                color: #b3b3b3;
                font-size: 12px;
            }

            .form .message a {
                color: #4CAF50;
                text-decoration: none;
            }

            .form .register-form {
                display: none;
            }

            .container {
                position: relative;
                z-index: 1;
                max-width: 300px;
                margin: 0 auto;
            }

            .container:before,
            .container:after {
                content: "";
                display: block;
                clear: both;
            }

            .container .info {
                margin: 50px auto;
                text-align: center;
            }

            .container .info h1 {
                margin: 0 0 15px;
                padding: 0;
                font-size: 36px;
                font-weight: 300;
                color: #1a1a1a;
            }

            .container .info span {
                color: #4d4d4d;
                font-size: 12px;
            }

            .container .info span a {
                color: #000000;
                text-decoration: none;
            }

            .container .info span .fa {
                color: #EF3B3A;
            }

            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .links>a {
                text-decoration: none;
                text-transform: uppercase;
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #4CAF50;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #FFFFFF;
                font-size: 14px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
            }
        </style>
        <div class="container">
            @if(count($errors))
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
        </div>
        <form method="post" class="login-form" action="/imone/prisijungimas">
            @csrf
            <div class="form-group">
                <label for="email">El. paštas</label>
                <input type="email" class="form-control" id="email" name="email" style="width:15vw">
            </div>
            <div class="form-group">
                <label for="slaptazodis">Slaptažodis</label>
                <input type="password" class="form-control" id="password" name="password" style="width:15vw">
            </div>
            <button class="btn btn-primary">Prisijungti</button>
            <p class="message">Dar neprisiregistrave? <a href="registracija">Registruotis</a></p>
          
        </form>
    </div>
</div>