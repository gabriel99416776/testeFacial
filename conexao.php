<?php
// Conexão com o banco de dados
$hostname = "localhost";
$bancodedados = "testefacial";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
    echo "Falha ao conectar (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}

?>
