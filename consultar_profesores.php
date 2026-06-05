<?php
include("conexion.php");

$sql = "SELECT * FROM profesores";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Profesores</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Listado de Profesores</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo ID</th>
            <th>Número ID</th>
            <th>Programa</th>
            <th>Semestre</th>
            <th>Edad</th>
            <th>Fecha Nacimiento</th>
            <th>Tipo Sangre</th>
        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['apellido'] ?></td>
            <td><?= $fila['tipo_id'] ?></td>
            <td><?= $fila['numero_id'] ?></td>
            <td><?= $fila['programa_academico'] ?></td>
            <td><?= $fila['semestre'] ?></td>
            <td><?= $fila['edad'] ?></td>
            <td><?= $fila['fecha_nacimiento'] ?></td>
            <td><?= $fila['tipo_sangre'] ?></td>
        </tr>
        <?php } ?>

    </table>

    <br>

    <a href="index.php">
        <button type="button">Volver</button>
    </a>

</body>
</html>

<?php mysqli_close($conn); ?>