<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="consulta")
 */

class Consulta
{	
 	/**
     * @Id
     * @Column(name="codConsulta",type="integer")
     * GenerateValue(strategy="AUTO")
     */
	private $codConsulta;
	/** @Column(name="codPaciente") */
	/**
     * Many Consultas have One Paciente.
     * @ManyToOne(targetEntity="Paciente", inversedBy="consultas" )
     * @JoinColumn(name="codPaciente", referencedColumnName="CodPaciente")
     */
	private $Paciente;
	/** @Column(name="crmMedico") */
	/**
     * Many Consultas have One Medico.
     * @ManyToOne(targetEntity="Medico", inversedBy="consultas")
     * @JoinColumn(name="crmMedico", referencedColumnName="CRM")
     */
	private $Medico;
	/** @Column(name="dataConsulta") */
	private $dataConsulta;
	/** @Column(name="descricaoConsulta") */
	private $descricaoConsulta;

	function getConsulta(){
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
//		Teste para adicionar consultas ao médico
		$c_medico->setConsulta($this);
	}	

	function setDataConsulta($c_data){
		$this->dataConsulta = $c_data;
	}	

	function setDescricao($c_descricao){
		$this->descricaoConsulta = $c_descricao;
	}	

}

  ?>