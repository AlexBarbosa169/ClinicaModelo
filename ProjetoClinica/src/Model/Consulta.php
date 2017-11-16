<?php

namespace App\Model

/**
 * @Entity
 * @Table(name="consulta")
 */

class Consulta
{
	/**
 	* @Id
 	* @Columm(name='codConsulta')
 	*/
	private $codConsulta;
	private $Paciente;
	private $Medico;
	private $dataConsulta;
	private $descricaoConsulta;

	function getCondulta(){
		return $this->codConsulta;
	}
	
	function getPaciente(){
		return $this->Paciente;
	}

	function getMedico(){
		return $this->Medico;
	}

	function getDataConsulta(){
		return $this->dataConsulta;
	}

	function getDescricao(){
		return $this->descricaoConsulta;
	}

	function setConsulta($c_codConsulta){
		$this->codConsulta = $c_codConsulta;
	}

	function setPaciente($c_Paciente){
		$this->Paciente = $c_Paciente;
	}		

	function setMedico($c_medico){
		$this->Medico = $c_medico;
	}	

	function setDataConsulta($c_data){
		$this->dataConsulta = $c_data;
	}	

	function setDescricao($c_descricao){
		$this->descricaoConsulta = $c_descricao;
	}	

}

  ?>