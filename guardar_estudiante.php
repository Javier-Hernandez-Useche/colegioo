<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipo_id = $_POST['tipo_id'];
$numero_id = $_POST['numero_id'];
$programa_academico = $_POST['programa_academico'];
$semestre = $_POST['semestre'];
$edad = $_POST['edad'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$tipo_sangre = $_POST['tipo_sangre'];

$sql = "INSERT INTO estudiantes
(nombre, apellido, tipo_id, numero_id, programa_academico, semestre, edad, fecha_nacimiento, tipo_sangre)
VALUES
('$nombre', '$apellido', '$tipo_id', '$numero_id', '$programa_academico', '$semestre', '$edad', '$fecha_nacimiento', '$tipo_sangre')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Estudiante guardado correctamente</h2>";
} else {
    echo "<h2>Error: " . mysqli_error($conn) . "</h2>";
}
echo "<a href='index.php'>⬅ Volver al formulario</a>";
mysqli_close($conn);
?>