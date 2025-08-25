<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "aula_php";

// Cria conexão
$strcon = mysqli_connect($servername, $username, $password, $database);

// Verifica conexão
if (!$strcon) {
    die("Falha na Conexão: " . mysqli_connect_error());
}

echo "Sucesso na Conexão";
?>