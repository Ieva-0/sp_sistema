<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Studento prisijungimas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
html, body {
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
                padding-bottom: 30px;
            }
            .login-form{
                text-align: center;
            }

            .title {
    font-size: 40px;
            }

            .links > a {
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


    </head>


    <body>

        <div class="content">
            <div class="title">
                Studento prisijungimas
            </div>
        </div>

    <form class="login-form">
        <input type="text" placeholder="Prisijungimo vardas" />
        <input type="password" placeholder="Slaptažodis" />
        <button>
            <div class="links">
                <a href="{{ url('studentas') }}">Prisijungti</a>
            </div>
        </button>
        <p class="message">Dar neprisiregistrave?<a href="registracija">Registracija</a></p>
    </form>

</body>

</html>
