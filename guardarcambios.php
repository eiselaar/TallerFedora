<?php
include('conexion.php');
 $id = $_POST['ID'];
 $nombre = $_POST['Nombre'];
 $apellido = $_POST['Apellido'];
 $edad = $_POST['Edad'];

    $insertPerson = "UPDATE `registro` SET `nombre` = '$nombre', `apellido` = '$apellido', `edad` = '$edad' WHERE id = $id";
        mysqli_query(connection(), $insertPerson);
        header('Location:  crud.php');