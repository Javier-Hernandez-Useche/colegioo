<?php
include("conexion.php");

$salario_mensual = $_POST['salario_mensual'];
$tipo_vinculacion = $_POST['tipo_vinculacion'];

$sql = "INSERT INTO nomina
(salario_mensual, tipo_vinculacion)
VALUES
('$salario_mensual', '$tipo_vinculacion')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Nómina registrada correctamente</h2>";
} else {
    echo "<h2>Error: " . mysqli_error($conn) . "</h2>";
}
echo "<a href='index.php'>⬅ Volver al formulario</a>";
mysqli_close($conn);
?>