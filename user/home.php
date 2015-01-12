<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if (isset($_SESSION['nombre'])) {
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
            <link href="../css/style_user.css" rel="stylesheet">

            <!-- font awesone(iconos) -->
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

            <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
            
            <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

            <!-- Font Awesone-->
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        </head>
        <body>
            <header >
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
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
                                <li><a href="mensajes.php"><span class="fa fa-envelope"></span>&nbsp; Mensajes <strong><?php echo '(5)'; ?></strong></a></li>
                                <li><a href="contactos.php"><span class="fa fa-users"></span>&nbsp; Contactos</a></li>
                                <li>&nbsp;&nbsp;<div class="btn-group navbar-btn">
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
                                    <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-search"></span>&nbsp; Buscar</button>
                                </div>

                            </form>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <div id="notas" class="marcador"></div>
            <article class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="nav nav-pills col-xs-12 col-md-2 visible-md visible-lg navbar-fixed-left alert alert-info">
                            <ul class="nav nav-pills nav-stacked">
                                <li role="presentation"><a id="ir-crear-nota"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Crear una nota</a></li>
                                <li role="presentation"><a id="ir">Notas importantes</a></li>
                                <li role="presentation"><a id="ir-notas-amigos">Notas de mis amigos</a></li>
                                <li role="presentation"><a id="Actualizar"><i  class="fa fa-refresh fa-spin"></i>&nbsp;&nbsp;Actualizar Vistas</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-offset-2 col-md-10">
                            <div class="jumbotron">
                            <h1 >Notas importantes</h1>
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div>
                            </div>
                            <p><a class="btn btn-success">Más noticas de la web.</a></p>
                            </div>
                            <div id="notas-amigos" class="marcador"></div>
                            <div class="jumbotron">
                            <h1>Notas de mis amigos</h1>
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div>
                            </div>
                            <p><a class="btn btn-success">Más noticas de la web.</a></p>
                            </div>
                            <div id="crear-nota" class="marcador"></div>
                            <div class="jumbotron">
                            <h1>Crear nota</h1>
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div><div class="col-xs-12 col-md-3">
                                    <h3>Lorem</h3>
                                    <p class="text-justify">Lorejdas asd asdasd as dasd asd as das das d as das d as ds fg rty tu y hfgd sad</p>
                                    <p><a href="" class="btn btn-info">Leer más</a></p>
                                </div>
                            </div>
                            <p><a class="btn btn-success">Más noticas de la web.</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <?php
            } else {
                ?>        
                <script>
                    alert("ERROR: Inicie sesion o registrese para poder ver esta pagina");
                    window.location.href = "../";
                </script>
                <?php
            }
            ?>
        </article>
        <footer id="footer">
            <p class="text-center text-info">Todos los derechos reservados. (<a href="">Ver Politicas de uso de cookies.</a>)</p>
        </footer>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Javascript para los efectos de bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modal.js"></script>
        <script src="../js/ejecucion-jquery.js"></script>
    </body>
</html>
