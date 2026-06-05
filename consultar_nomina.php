<?php
include("conexion.php");

$sql = "SELECT * FROM nomina";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Nómina</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Consulta de Nómina</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Salario Mensual</th>
            <th>Tipo Vinculación</th>
        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['salario_mensual'] ?></td>
            <td><?= $fila['tipo_vinculacion'] ?></td>
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