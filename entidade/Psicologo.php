<?php

/*include "Consulta.php";
include "Paciente.php";*/


class Psicologo{
	
	private $id;
	private $ativo;
	private $nome;
	private $datanascimento;
	private $foto;
	private $email;
	private $telefone;
	public $arr_consultas = array();
	public $arr_pacientes = array();
	private $dataregistro;


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


	public function getarr_pacientes(){
		return $this->arr_pacientes;

	}

	public function setarr_pacientes($valor){
		$this->arr_pacientes = $valor;

	}

	public function addPaciente($valor){
		return $this->arr_pacientes[]=$valor;

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

		return " <h2> Psicologos </h2> <br /> Id :{$this->id} <br /> Nome : {$this->nome} <br /> Data Nascimento : {$this->datanascimento} <br /> email :{$this->email} <br /> telefone :{$this->telefone} <br />
		Pacientes : {$this->arr_pacientes} <br /> Consultas : {$this->arr_consultas} <hr> <br />";
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

//echo $ps1->getDetalhes();

var_dump($ps1);

*/