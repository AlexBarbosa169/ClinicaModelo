<?php

namespace App\Model

/**
 * @Entity
 * @Table(name="medico")
 */

class Medico
{
	/**
 	* @Id
 	* @Columm(name='CRM')
 	*/
	private $crm;
	private $dataNasc;
	private $especialidade
	private $nome;
	private $telefone;
	private $tipoSanguineo;

	function getCrm(){
		return $this->crm;
	}	

	function getDataNasc(){
		return $this->dataNasc;
	}

	function getEspecialidade(){
		return $this->especialidade;
	}

	function getNome(){
		return $this->nome;
	}

	function getTelefone(){
		return $this->telefone;
	}

	function setCrm($m_crm){
		$this->crm = $m_crm;
	}	

	function setDataNasc($p_dataNasc){
		$this->dataNasc = $m_dataNasc;
	}

	function setEspecialidade($m_especialidade){
		$this->especialidade = $m_especialidade;
	}

	function setNome($m_nome){
		$this->nome = $m_nome;
	}

	function getTelefone($m_telefone){
		$this->telefone = $m_telefone;
	}

}

  ?>