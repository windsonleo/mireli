<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agenda";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Falha na Conexao: " . mysqli_connect_error());
}


$id = $_POST["id"];
$ativo = $_POST["ativo"];
$ativo = 1;
$nome = $_POST["nome"];
$foto = $_POST["foto"];
$email = $_POST["email"];
$senha = $_POST["senha"];


InserirUsuario($ativo,$nome,$foto,$email,$senha,$conn);


 function InserirUsuario($ativo,$nome,$foto,$email,$senha,$conexao){
  $conn = $conexao;

$sql = "INSERT INTO usuario (id, ativo, nome, foto, email, senha,dataregistro)
VALUES (NULL, '$ativo', '$nome', '$foto' , '$email', '$senha', CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
  echo "Registro usuario incluido com sucesso";
  mysqli_close($conn);
   header("Location: http://agenda.com/usuarios.php");
   exit();

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



}



 function ListarUsuarios($conexao){
  $conn = $conexao;

$sql = "SELECT * FROM usuario";

if (mysqli_query($conn, $sql)) {
  echo "Registros listados usuario  com sucesso";


} else {
  echo "Error ao listar: " . $sql . "<br>" . mysqli_error($conn);
}



}

/*
INSERT INTO `paciente` (`id`, `ativo`, `nome`, `datanascimento`, `foto`, `email`, `telefone`, `psicologo_id`, `dataregistro`) VALUES (NULL, '1', 'julia maria', '2022-09-21 12:59:57.000000', 'julia.png', 'julia@hotmail.com', '87-98769-6455', '1', CURRENT_TIMESTAMP)*/

/*$sql2 = "INSERT INTO psicologo (id, ativo, nome, datanascimento, foto, email, telefone,dataregistro)
VALUES (NULL,'1', 'WILL','1982-03-26 09:10:07.000000','WILL.jpg' , 'WILL@example.com','8198777-5544',CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql2)) {
  echo "Registro psicologo incluido com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);
?>