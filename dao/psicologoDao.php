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
$datanascimento = $_POST["datanascimento"];
$foto = $_POST["foto"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];


InserirPsicologo($ativo,$nome,$datanascimento,$foto,$email,$telefone,$conn);


 function InserirPsicologo($ativo,$nome,$datan,$foto,$email,$telefone,$conexao){
  $conn = $conexao;

$sql = "INSERT INTO psicologo (id, ativo, nome, datanascimento, foto, email, telefone,dataregistro)
VALUES (NULL, '$ativo', '$nome', '$datan', '$foto' , '$email', '$telefone', CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
  echo "Registro psicologo incluido com sucesso";
  mysqli_close($conn);
   header("Location: http://agenda.com/psicologoss.php");
   exit();

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



}


 function ListarPsicologo($conexao){
  $conn = $conexao;

$sql = "SELECT * FROM psicologo";

if (mysqli_query($conn, $sql)) {
  echo "Registros listados psicologo  com sucesso";


} else {
  echo "Error ao listar: " . $sql . "<br>" . mysqli_error($conn);
}



}

/*$sql2 = "INSERT INTO psicologo (id, ativo, nome, datanascimento, foto, email, telefone,dataregistro)
VALUES (NULL,'1', 'WILL','1982-03-26 09:10:07.000000','WILL.jpg' , 'WILL@example.com','8198777-5544',CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql2)) {
  echo "Registro psicologo incluido com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);
?>