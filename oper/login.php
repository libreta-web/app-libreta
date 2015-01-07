<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('../conexion.php');

session_start();

$link = Conectarse();

$email = filter_input(INPUT_POST, "email");
$emailsql= NULL;

$sql = "select email from usuarios where email='$email'";
$datos = mysqli_query($link, $sql);
echo $sql;

while ($row = mysqli_fetch_array($datos)) {
    //Bucle para ver todos los registros
    $emailsql = $row['email'];
}

if (!empty($emailsql) || !is_null($emailsql)) {
    $password = filter_input(INPUT_POST, "password");
    $sqlpass = "select password from usuarios where password=MD5('$password')";
    $datospass = mysqli_query($link, $sqlpass);
    while ($row = mysqli_fetch_array($datospass)) {
        //Bucle para ver todos los registros
        $passwordmd5 = $row['password'];
    }

    if (!empty($passwordmd5)) {
     
        $sqldatos = "select nombre,apellido,direccion,telefono,fecha_creacion from usuarios where email='$email'";
    $datosuser = mysqli_query($link, $sqldatos);
    while ($row = mysqli_fetch_array($datosuser)) {
        //Bucle para ver todos los registros
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $fecha_creacion = $row['fecha_creacion'];
    }
        
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['direccion'] = $direccion;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['fecha_creacion'] = $fecha_creacion;
        mysqli_close($link);
        header('Location: ../user/home.php');
        
    } else {              
    $_SESSION['no_pass'] = TRUE;
    header('Location: ../login.php');
    }
} else {
    $_SESSION['no_user'] = TRUE;
    header('Location: ../login.php');
    
    
}


mysqli_close($link); //cerrar conexion