<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agenda";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Falha na Conexão: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE psicologo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ativo  BOOLEAN NOT NULL,
nome VARCHAR(50) NOT NULL,
datanascimento DATE ,
foto VARCHAR(50),
email VARCHAR(50),
telefone VARCHAR(50),
dataregistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Tabela Psicologo Criada com Sucesso <br />";
} else {
  echo "Error ao Criar Tabela psicologo: " . mysqli_error($conn);
}


// sql to create table
$sql2 = "CREATE TABLE paciente (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ativo  BOOLEAN NOT NULL,
nome VARCHAR(50) NOT NULL,
datanascimento DATE ,
foto VARCHAR(50),
email VARCHAR(50),
telefone VARCHAR(50),
psicologo_id INT(6),
 FOREIGN KEY my_fk (psicologo_id) REFERENCES psicologo(id) ON UPDATE NO ACTION ON DELETE NO ACTION,
dataregistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql2)) {
  echo "Tabela paciente Criada com Sucesso <br />";
} else {
  echo "Error ao Criar Tabela paciente: " . mysqli_error($conn);
}


$sql3 = "CREATE TABLE consulta (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ativo  BOOLEAN NOT NULL,
paciente_id INT(6) NOT NULL,
FOREIGN KEY my_fk_pac (paciente_id) REFERENCES paciente(id) ON UPDATE NO ACTION ON DELETE NO ACTION,
dataconsulta DATE,
horaconsulta TIME ,
psicologo_id INT(6) NOT NULL,
status VARCHAR(50),
servico_id INT(6)  NULL,
 FOREIGN KEY my_fk_serv (servico_id) REFERENCES servico(id) ON UPDATE NO ACTION ON DELETE NO ACTION,
 FOREIGN KEY my_fk_ps (psicologo_id) REFERENCES psicologo(id) ON UPDATE NO ACTION ON DELETE NO ACTION,
dataregistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql3)) {
  echo "Tabela consulta Criada com Sucesso <br />";
} else {
  echo "Error ao Criar Tabela consulta: " . mysqli_error($conn);
}


$sql4 = "CREATE TABLE usuario (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ativo  BOOLEAN NOT NULL,
nome VARCHAR(50) NOT NULL,
foto VARCHAR(50),
email VARCHAR(50),
senha VARCHAR(50),
dataregistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql4)) {
  echo "Tabela usuario Criada com Sucesso <br />";
} else {
  echo "Error ao Criar Tabela usuario: " . mysqli_error($conn);
}


$sql5 = "CREATE TABLE servico (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ativo  BOOLEAN NOT NULL,
nome VARCHAR(50) NOT NULL,
modalidade VARCHAR(50),
dataregistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql5)) {
  echo "Tabela servico Criada com Sucesso <br /> <hr>";
} else {
  echo "Error ao Criar Tabela servico: " . mysqli_error($conn);
}



mysqli_close($conn);
?>