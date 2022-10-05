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
$paciente_id = $_POST["paciente"];
$dataconsulta = $_POST["dataconsulta"];
$horaconsulta= $_POST["horaconsulta"];
$psicologo_id = $_POST["psicologo"];
$status = $_POST["status"];
$servico = $_POST["servico"];


InserirConsulta($ativo,$paciente_id,$dataconsulta,$horaconsulta,$psicologo_id,$status,$servico,$conn);


 function InserirConsulta($ativo,$paciente_id,$dataconsulta,$horaconsulta,$psicologo_id,$status,$servico,$conexao){
  $conn = $conexao;

$sql = "INSERT INTO consulta (id, ativo, paciente_id, dataconsulta, horaconsulta, psicologo_id, status,servico_id,dataregistro)
VALUES (NULL, '$ativo', $paciente_id, '$dataconsulta', '$horaconsulta' , $psicologo_id, '$status', $servico,CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
  echo "Registro consulta incluido com sucesso";
  mysqli_close($conn);
   header("Location: http://agenda.com/consultass.php");
   exit();

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



}




 function ListarConsulta($conexao){
  $conn = $conexao;

$sql = "SELECT * FROM consulta";

if (mysqli_query($conn, $sql)) {
  echo "Registros listados Consulta  com sucesso";


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