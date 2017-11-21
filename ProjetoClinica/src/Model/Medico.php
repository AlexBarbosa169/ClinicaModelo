<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="medico")
 */

class Medico
{	
 	/**
     * @Id
     * @Column(name="CRM",type="integer")
     * GenerateValue(strategy="AUTO")
     */
	private $crm;
	/** @Column(name="DataNasc") */
	private $dataNasc;
	/** @Column(name="Especialidade") */
	private $especialidade;
	/** @Column(name="Nome") */
	private $nome;
	/** @Column(name="Telefone") */
	private $telefone;	
	/**
	 * Um Medico tem muitas Consultas
     * @OneToMany(targetEntity="Consulta", mappedBy="Consulta" )
     */
	private $consultas;

	function getConsultas(){
		return $this->consultas;
	}

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

	function setDataNasc($m_dataNasc){
		$this->dataNasc = $m_dataNasc;
	}

	function setEspecialidade($m_especialidade){
		$this->especialidade = $m_especialidade;
	}

	function setNome($m_nome){
		$this->nome = $m_nome;
	}

	function setTelefone($m_telefone){
		$this->telefone = $m_telefone;
	}

//	Teste para adicionar consultas ao médico
	function setConsulta($m_consulta){
		$this->consultas->add($m_consulta);
	}

}

  ?>