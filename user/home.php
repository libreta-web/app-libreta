<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$direccion = $_SESSION['direccion'];
$telefono = $_SESSION['telefono'];
$fecha_creacion = $_SESSION['fecha_creacion'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Libreta | <?php echo "$nombre $apellido"; ?></title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- purecss -->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

        <!-- Estilo personificado -->
        <link href="../css/style.css" rel="stylesheet">

        <!-- font awesone(iconos) -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Font Awesone-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HOME</a><p class="navbar-text">Hola, estás en tu home.</p> 
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">



                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="mensajes.php"><span class="fa fa-envelope"></span>&nbsp; Mensajes</a></li>
                        <li><a href="contactos.php"><span class="fa fa-users"></span>&nbsp; Contactos</a></li>
                        <li>&nbsp;&nbsp;<div class="btn-group display-block">
                                <a class="btn btn-primary" href="perfil.php"><i class="fa fa-user fa-fw"></i> Mi Perfil</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="">
                                    <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../mod/setPerfil.php"><i class="fa fa-pencil fa-fw"></i> Modificar mis catos</a></li>
                                    <li><a href="../mod/delPerfil.php"><i class="fa fa-trash-o fa-fw"></i> Eliminar mi cuenta</a></li>
                                    <li><a href="../tools/blUsuario.php"><i class="fa fa-ban fa-fw"></i> Bloquear usuario</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../extras/help.php"><i class="fa fa-question fa-fw"></i> Ayuda</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../oper/logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
                                </ul>
                            </div></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="¿Que buscas?">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp; Buscar</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1>Bienvenido <?php echo "$nombre $apellido"; ?></h1>
                <p>En esta pagina podras guardar toda la informacion de tus contactos, organizar eventos... </p>
                <p><a class="btn btn-primary btn-lg" role="button" data-toggle="collapse" href="#collapseLeerMas" data-aria-expanded="false" data-aria-controls="collapseLeerMas">Leer más</a></p>
                <div class="collapse" id="collapseLeerMas">
                    <div class="well">
                        mdsjfs fsdfjsdof fsdfonr freferghtyujk uikui l ioiñp  
                    </div>
                </div>
            </div>
        </div>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Javascript para los efectos de bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modal.js"></script>
    </body>
</html>

