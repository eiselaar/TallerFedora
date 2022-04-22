<?php
include('conexion.php');
$id = $_GET['id'];//variable global, que variable spor el url 

$sql_query = "DELETE FROM registro WHERE id=$id";
mysqli_query(connection(), $sql_query);
header('Location: crud.php');