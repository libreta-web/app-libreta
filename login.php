<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Libreta | Home</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- purecss -->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

        <!-- Estilo personificado -->
        <link href="css/style.css" rel="stylesheet">

        <!-- font awesone(iconos) -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
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
                    <a class="navbar-brand" href="#">HOME</a><p class="navbar-text">Estas en la pagina principal</p> 
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">



                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="descargas.html"><span class="fa fa-download"></span>&nbsp; Descargas</a></li>
                        <li><a href="contacto.html"><span class="fa fa-envelope-o"></span>&nbsp; Contacto</a></li>
                        <li><a href="info.html"><span class="fa fa-info"></span>&nbsp; Acerca de</a></li>
                        <li>&nbsp; <button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Entrar</button></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="¿Que buscas?">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp; Buscar</button>
                    </form>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Entrar en nuestro servicio</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <form class="pure-form pure-form-stacked" action="oper/login.php" method="post">
                                                <fieldset>
                                                    <legend>Inicio de Sesión</legend>

                                                    <label for="email">Email</label>
                                                    <input id="email" name="email" type="email" class="pure-input-1" placeholder="Email" required="required">

                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" name="password" class="pure-input-1"  placeholder="Password" required="required">

                                                    <label for="remember" class="pure-checkbox">
                                                        <input id="remember" type="checkbox"> Recordar
                                                    </label>

                                                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <form class="pure-form pure-form-stacked">
                                                <fieldset>
                                                    <legend>Registrarse</legend>


                                                    <label for="nombre-reg">Nombre</label>
                                                    <input id="nombre-reg" class="pure-input-1" type="text" placeholder="Nombre" required>

                                                    <label for="email-reg">Email</label>
                                                    <input id="email-reg" type="email" class="pure-input-1" placeholder="Email" required>

                                                    <label for="email-rep">Repita el Email</label>
                                                    <input id="email-rep" type="email" class="pure-input-1" placeholder="Repita el Email" required>


                                                    <label for="password-reg">Password</label>
                                                    <input id="password-reg" type="password" class="pure-input-1" placeholder="Password" required>


                                                    <label for="password-rep" >Repita la Password</label>
                                                    <input id="password-rep" class="margen-inf-20 pure-input-1" type="password" placeholder="Repita la Password" required>
                                                    <br/>
                                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="text-info">Proximamente podras entrar usando tu cuenta de facebook, twitter u otra red social.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1>Libreta</h1>
                <form class="pure-form pure-form-stacked" action="oper/login.php" method="post">
                    <fieldset>
                        <legend>Inicio de Sesión</legend>
                        <label for="email2">Email</label>
                        <input id="email2" name="email" type="email" class="pure-input-1" placeholder="Email" required="required">

                         <?php
                        if (isset($_SESSION['no_user'])) {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>No existe el usuario</strong>
                            </div>
                            <?php
                        }
                            ?>
                        
                        <label for="password2">Password</label>
                        <input id="password2" type="password" name="password" class="pure-input-1"  placeholder="Password" required="required">

                        <?php
                        if (isset($_SESSION['no_pass'])) {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Password incorrecta!</strong>
                            </div>
                            <?php
                        }
                            session_unset();
                            session_destroy();
                            ?>
                        <label for="remember" class="pure-checkbox">
                            <input id="remember" type="checkbox"> Recordar
                        </label>

                        <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                    </fieldset>
                </form>
            </div>
        </div>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Javascript para los efectos de bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modal.js"></script>
    </body>
</html>