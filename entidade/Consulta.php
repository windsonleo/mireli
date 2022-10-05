<?php

/*include "Paciente.php";
include "Psicologo.php";*/

//require_once("../utils/StatusConsulta");
require_once("Psicologo.php");
require_once("Paciente.php");


class Consulta{
	

	private $id;
	private Paciente $paciente;
	private Psicologo $psicologo;
	private $dataconsulta;
	private $horaconsulta; 
	private  $status;
	private Servico $servico;

	

	public function getid(){
		return $this->id;

	}

	public function setid($valor){
		$this->id = $valor;

	}

	public function getpaciente(){
		return $this->paciente;

	}

	public function setpaciente( $valor){
		$this->paciente = $valor;

	}

	public function getdataconsulta(){
		return $this->dataconsulta;

	}

	public function setdataconsulta($valor){
		$this->dataconsulta = $valor;

	}

	public function gethoraconsulta(){
		return $this->horaconsulta;

	}

	public function sethoraconsulta($valor){
		$this->horaconsulta = $valor;

	}

	public function getpsicologo(){
		return $this->psicologo;

	}

	public function setpsicologo( $valor){
		$this->psicologo = $valor;

	}


	public function getstatus(){
		return $this->status;

	}

	public function setstatus($valor){
		$this->status = $valor;

	}

		public function getservico(){
		return $this->servico;

	}

	public function setservico($valor){
		$this->servico = $valor;

	}



		public function getDetalhes(){

		return "<h2> Consultas </h2> <br /> Id :{$this->id} <br /> Psicologo :{$this->psicologo->getnome()} <br /> Paciente: {$this->paciente->getnome()} <br /> data :{$this->dataconsulta} <br /> Hora :{$this->horaconsulta} <br /> Status: {$this->status} <br /> Servico: {$this->servico} <br /><hr>";
	}


}

$ps1 = new Psicologo();
$ps1->setnome('mirelli');
$ps1->setemail('mireli@gmail.com');
$ps1->setfoto('mireli.jpg');
$ps1->settelefone('81-98788876');
$ps1->setdatanascimento('31/12/1983');
$ps1->setid(235);


$p2 = new Paciente();
$p2->setid(1212);
$p2->setnome('maria');
$p2->setdatanascimento('22/01/1985');
$p2->setfoto('maria.png');
$p2->setemail('maria@gmail.com');
$p2->settelefone('81-99878-5567');
$p2->setpsicologo($ps1);

$ps1->addPaciente($p2);

//$stat = StatusConsulta::Pendente;


$consulta = new Consulta();
$consulta->setid(2222);
$consulta->setpaciente($p2);
$consulta->setpsicologo($ps1);
$consulta->setdataconsulta('11/09/2022');
$consulta->sethoraconsulta('15:00');
$consulta->setstatus('Pendente');

$ps1->addConsulta($consulta);

$p2->addConsulta($consulta);

//var_dump($consulta);

//echo $consulta->getDetalhes();

//echo $p2->getDetalhes();

//echo $ps1->getDetalhes();


//$val = $p2->arr_consultas;

//print_r(array_values ($val));

