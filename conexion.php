<?php
function connection()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $bd = "tso"; //taller sitemas operativos

    $conn = mysqli_connect($server, $username, $password, $bd);
    if (!$conn) {
        die('No es posible establecer la conexion' . mysqli_connect_error());
    } else {
        return $conn;
    }

    mysqli_close($conn);
}