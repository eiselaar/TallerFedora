<?php
include('conexion.php');
if ($_GET) {
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = 'SELECT * FROM registro WHERE id = ' . $id;
        $result = connection()->query($sql);
        $rs = $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="guardarcambios.php">
     <input type="hidden" value="<?= $rs[0]['ID'] ?>" name="ID">
     <label for="">Nombre</label>
     <br>
     <br>
     <input value="<?= $rs[0]['NOMBRE'] ?>" name ="Nombre" type="text">
     <br>
     <br>
     <label for="">Apellido</label>
     <br>
     <br>
     <input  value="<?= $rs[0]['APELLIDO'] ?>" name ="Apellido" type="text">
     <br>
     <br>
     <label for="">Edad</label>
     <br>
     <br>
     <input value="<?= $rs[0]['EDAD'] ?>" name ="Edad" type="text">
     <br>
     <br>
     <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
  
</body>
</html>