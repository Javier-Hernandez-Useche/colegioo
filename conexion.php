<?php
$conn = new mysqli("localhost", "root", "", "educacion");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>  