<?php

namespace App\Model

/**
 * @Entity
 * @Table(name="paciente")
 */

class Paciente
{
	/**
 	* @Id
 	* @Columm(name='CodPaciente')
 	*/
	private $codPaciente;
	private $convenio;
	private $cpf;
	private $dataNasc;
	private $nome;
	private $telefone;
	private $tipoSanguineo;

	function getCodPaciente(){
		return $this->codPaciente;
	}

	function getConvenio(){
		return $this->convenio;
	}

	function getCpf(){
		return $this->cpf;
	}

	function getDataNasc(){
		return $this->dataNasc;
	}

	function getNome(){
		return $this->nome;
	}

	function getTelefone(){
		return $this->telefone;
	}

	function setCodPaciente($cod_paciente){
		$this->codPaciente = $cod_paciente;
	}

	function setConvenio($p_convenio){
		$this->convenio = $p_convenio;
	}

	function getCpf($p_cpf){
		$this->cpf = $p_cpf;
	}

	function setDataNasc($p_dataNasc){
		$this->dataNasc = $p_dataNasc;
	}

	function setNome($p_nome){
		$this->nome = $p_nome;
	}

	function getTelefone($p_telefone){
		$this->telefone = $p_telefone;
	}

}

  ?>