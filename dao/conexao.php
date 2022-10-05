<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Falha na Conexao: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE agenda";
if (mysqli_query($conn, $sql)) {
  echo "Banco Criado com Sucesso!";
} else {
  echo "Error ao Criar Banco de Dados: " . mysqli_error($conn);
}



mysqli_close($conn);
?>