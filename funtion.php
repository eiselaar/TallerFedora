<?php
include('conexion.php');

function cargarTa(){
    $selectPerson = "SELECT * FROM `registro`";
    $selectCarga=mysqli_query(connection(), $selectPerson);
    $data = $selectCarga->fetch_all(MYSQLI_ASSOC);//leer lo que trae el jquery
    return $data;
}
