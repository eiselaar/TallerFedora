<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <td>Nombre</td>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <tbody>
        <?php include("funtion.php"); $obtenerdatos=cargarTa();
                        for ($i = 0; $i < count($obtenerdatos); $i++) { ?>
                            <tr>
                                <td><?= $obtenerdatos[$i]['NOMBRE'] ?></td>
                                <td><?= $obtenerdatos[$i]['APELLIDO'] ?></td>
                                <td><?= $obtenerdatos[$i]['EDAD'] ?></td>
                                <td>
                                    <a class='btn btn-secondary' href="editar.php?id=<?= $obtenerdatos[$i]['ID'] ?>">editar</a>
                                    <a class='btn btn-warning' href="eliminar.php?id=<?= $obtenerdatos[$i]['ID'] ?>">eliminar</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
        </tbody>
    </table>
</body>
</html>