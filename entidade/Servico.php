<?php

/*include "Consulta.php";
include "Paciente.php";*/


class Servico{
	
	private $id;
	private $ativo;
	private $nome;
	private $modalidade;
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

		public function getmodalidade(){
		return $this->modalidade;

	}

	public function setmodalidade($valor){
		$this->modalidade = $valor;

	}



	public function getdataregistro(){
		return $this->dataregistro;

	}

	public function setdataregistro($valor){
		$this->dataregistro = $valor;

	}




	public function getDetalhes(){

		return "Id :{$this->id} <br /> Nome : {$this->nome} <br /> Ativo: {$this->ativo} <br />
		Modalidade : {$this->modalidade}  <hr> <br />";
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