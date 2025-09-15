<?php
$mysqli = new mysqli("localhost", "root", "alhep3.1415", "palabras");
if ($mysqli->connect_errno) {
    echo "Fallo conexión: " . $mysqli->connect_error;
    exit();
}
?>
    