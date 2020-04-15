<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <title>Añadir Horas | AS2</title>
    <style>
        body {
            margin: 0%;
            background: #fafafa;
            width: 100%;
        }

        .container {
            margin: 2%;
        }

        .line {
            border: 1px solid #000;
            width: 100%;
        }

        /*header starts here*/
        .titlebar {
            width: 97%;
            margin: 0%;
            height: 7%;
            background: #000;
            display: flex;
            color: #fff;
            padding: 1%;
        }

        .logo {
            margin-left: 2%;
            width: 6%;
        }

        .logoimg {
            width: 100%;
        }

        .title {
            margin-left: 3%;
            margin-top: 2%;
            font-size: 40px;
        }

        .controls {
            margin-left: 35%;
            margin-top: 3%;
            font-size: 28px;
        }

        .controls a {
            text-decoration: none;
            color: #fff;
        }

        /*page conted starts here*/
        .main {
            width: 97%;
            margin: 0%;
            margin-top: 2%;
            height: 700px;
            display: flex;
        }

        /*bluebar*/
        .menucontrols {
            margin-left: 3%;
            width: 20%;
            background: #002c61;
            text-align: center;
            font-size: 28px;
            padding: 1%;
            height: 90%;
        }

        .menucontrols a {
            text-decoration: none;
            color: #fff;
        }

        .items {
            margin-top: 4%;
        }

        /*dashboard*/
        .panel {
            margin-left: 0.5%;
            width: 70%;
            background: #ddd;
            padding-left: 1%;
            padding-right: 1%;
            height: 95%;
        }

        .panel h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 40px;
            margin-bottom: 1%;
        }

        .details {
            font-size: 25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="titlebar">
            <div class="logo">
                <a href="http://unadeca.ac.cr/home/"><img class="logoimg" src="Unadecalogo.png" alt="unadecalogo"></a>
            </div>
            <div class="title">Gestor de Horas Beca</div>
            <div class="controls">
                <a href="">
                    <!--username-->Usuario</a> | <a href="">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="menucontrols">
                <div class="items"><a href="index.html">Inicio
                        <!--addhours temporal--></a></div>
                <div class="items"><a href="rules.html">Reglamentos
                        <!--Rules temporal--></a></div>
                <div class="items"><a href="comments.html">Comentarios
                        <!--Coments temporal--></a></div>
                <div class="items"><a href="">Moodle
                        <!--link to moodle--></a></div>
                <div class="items"><a href="aboutUs.html">Acerca de Nosotros
                        <!--About Us temporal--></a></div>
            </div>
            <div class="panel">
                <h2>Editar Informacion de Usuario</h2>
                <div class="line"></div>
                <p>
                    Edit your personal information, we want to know mor about you.
                </p>
                <form action="{{url(/users)}}" method="POST" enctype="multipart/form-data">
                    <div class="block">
                        <label for="nombre">{{Nombres}}</label>
                        <input class="textinput" type="text" name="Nombre" id="Nombre" placeholder="Nombres">
                    </div>
                    <div class="block">
                        <label for="Aperllidos">{{Aperllidos}}</label>
                        <input class="textinput" type="text" name="apellidopa" id="ap" placeholder="Apellido Paterno">
                        <input class="textinput" type="text" name="apellidoma" id="am" placeholder="Apellido Materno">
                    </div>
                    <div class="block">
                        <label for="contraseña">{{Contraseña}}</label>
                        <input class="textinput" type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
                    </div>
                    <div class="hiden">
                        <input type="hidden" name="codigo" value="{{''}}">
                        <input type="hidden" name="departamento" value="{{''}}">
                        <input type="hidden" name="escuela" value="{{''}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>