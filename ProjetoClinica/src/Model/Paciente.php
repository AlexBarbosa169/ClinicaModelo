<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="paciente")
 */

class Paciente {	
 	/**
     * @Id
     * @Column(name="CodPaciente",type="integer")
     * GenerateValue(strategy="AUTO")
     */
	private $codPaciente;
	/** @Column(name="Convenio") */
	private $convenio;
	/** @Column(name="CPF") */
	private $cpf;
	/** @Column(name="DataNasc") */
	private $dataNasc;
	/** @Column(name="Nome") */
	private $nome;
	/** @Column(name="Telefone") */
	private $telefone;
	/** @Column(name="TipoSanguineo") */
	private $tipoSanguineo;
	/**
	 * Um paciente tem muitas Consultas
     * @OneToMany(targetEntity="Consulta", mappedBy="Consulta" )
     */
	private $consultas;

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

	function getTiposanguineo(){
		return $this->tipoSanguineo;
	}

	function setCodPaciente($cod_paciente){
		$this->codPaciente = $cod_paciente;
	}

	function setConvenio($p_convenio){
		$this->convenio = $p_convenio;
	}

	function setCpf($p_cpf){
		$this->cpf = $p_cpf;
	}

	function setDataNasc($p_dataNasc){
		$this->dataNasc = $p_dataNasc;
	}

	function setNome($p_nome){
		$this->nome = $p_nome;
	}

	function setTelefone($p_telefone){
		$this->telefone = $p_telefone;
	}

	function setTiposanguineo($p_tipoSanguineo){
		$this->tipoSanguineo = $p_tipoSanguineo;
	}

}

  