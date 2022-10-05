<?php

/*include "Consulta.php";
include "Psicologo.php";*/

require_once("Psicologo.php");

class Paciente{

	private $id;
	private $ativo;
	private $nome;
	private $datanascimento;
	private $foto;
	private $email;
	private $telefone;
	public $arr_consultas = array();
	private  Psicologo $psicologo;
	private $dataregistro;




	/*public function __construct($nome,$datanascimento,$foto){

		$this->nome = $nome;
		$this->datanascimento = $datanascimento;
		$this->foto = $foto;

	}

		public function Paciente(){

	}

	*/

	public function getid(){
		return $this->id;

	}

	public function setid($valor){
		$this->id = $valor;

	}

	public function getativo(){
		return $this->ativo;

	}

	public function setativo($valor){
		$this->ativo = $valor;

	}

	public function getnome(){
		return $this->nome;

	}

	public function setnome($valor){
		$this->nome = $valor;

	}

	public function getdatanascimento(){
		return $this->datanascimento;

	}

	public function setdatanascimento($valor){
		$this->datanascimento = $valor;

	}

		public function getdataregistro(){
		return $this->dataregistro;

	}

	public function setdataregistro($valor){
		$this->dataregistro = $valor;

	}

	public function getfoto(){
		return $this->foto;

	}

	public function setfoto($valor){
		$this->foto = $valor;

	}

	public function getemail(){
		return $this->email;

	}

	public function setemail($valor){
		$this->email = $valor;

	}


	public function gettelefone(){
		return $this->telefone;

	}

	public function settelefone($valor){
		$this->telefone = $valor;

	}

		public function getpsicologo(){
		return $this->psicologo;

	}

	public function setpsicologo($valor){
		$this->psicologo = $valor;

	}

		public function addConsulta($valor){
		return $this->arr_consultas[]=$valor;

	}


	public function getarr_consultas(){



		return $this->arr_consultas;

	}

	public function setarr_consultas($valor){
		$this->arr_consultas = $valor;

	}


	public function getDetalhes(){

		return "<h2> Pacientes </h2> <br /> Id :{$this->id} <br /> Nome :{$this->nome} <br /> Data Nascimento : {$this->datanascimento} <br />, email :{$this->email} <br />  telefone :{$this->telefone} <br /> Psicologo : {$this->psicologo-> getnome()} <br /> Consultas:{$this->arr_consultas} <br /> <hr> <br />";
	}

	public function RetornarValoresArrays($valores){

		$valor = '';

		foreach ($valores as $val) {
    		
    		echo  $val;

    		$valor = $valor + $val;
		}

		return $valor;
	}


}

/*
$ps1 = new Psicologo();
$ps1->setnome('mirelli');
$ps1->setemail('mireli@gmail.com');
$ps1->setfoto('mireli.jpg');
$ps1->settelefone('81-98788876');
$ps1->setdatanascimento('31/12/1983');
$ps1->setid(235);


$ps2 = new Psicologo();
$ps2->setnome('aldo');
$ps2->setemail('aldo@gmail.com');
$ps2->setfoto('aldo.jpg');
$ps2->settelefone('81-98787865');
$ps2->setdatanascimento('31/07/1977');
$ps2->setid(2353);

$p1 = new Paciente('windson','25/03/1982','windson.jpg');
$p1-> setid(234);
$p1->setnome('mario');
$p1->setdatanascimento('17/08/1978');
$p1->setfoto('mario.png');
$p1->setemail('mario@gmail.com');
$p1->settelefone('81-98877-2233');
$p1->setpsicologo($ps1);
$ps1->addPaciente($p1);

$p2 = new Paciente();
$p2->setid(1212);
$p2->setnome('maria');
$p2->setdatanascimento('22/01/1985');
$p2->setfoto('maria.png');
$p2->setemail('maria@gmail.com');
$p2->settelefone('81-99878-5567');
$p2->setpsicologo($ps1);

$ps1->addPaciente($p2);

echo $p1->getDetalhes();

echo $p2->getDetalhes();

//echo array_count_values($ps1->arr_pacientes);


//echo $ps1->getaar;

var_dump($ps1);

*/