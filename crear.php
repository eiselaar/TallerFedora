<?php
include('conexion.php');
 $nombre = $_POST['Nombre'];
 $apellido = $_POST['Apellido'];
 $edad = $_POST['Edad'];

 $insertPerson = "INSERT INTO `registro` (`nombre`, `apellido`, `edad`) VALUES ('$nombre', '$apellido', '$edad')";
        mysqli_query(connection(), $insertPerson);
        header('Location:  crud.php');