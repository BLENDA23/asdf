<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $stmt = $mysqli->prepare("INSERT INTO usuarios (username, password,email,name) VALUES (?, ? ,?, ?)");
    $stmt->bind_param("ss", $username, $password,$email,$name);
    $stmt->execute();

    echo "Registrado correctamente. <a href='../index.html'>Iniciar sesión</a>";
}
?>
