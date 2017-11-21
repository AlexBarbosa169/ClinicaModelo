<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="prescricao")
 */


class Prescricao
{	
 	/**
     * @Id
     * @Column(name="codPrescricao",type="integer")
     * GenerateValue(strategy="AUTO")
     */
	private $codPrescricao;	
	/** @Column(name="codConsulta") */
	/**
     * Uma consulta possui apenas uma prescricao
     * @OneToOne(targetEntity="Consulta")
     * @JoinColumn(name=codConsulta, referencedColumnName="codConsulta")
     */
	private $consulta;
	/** @Column(name="codExame") */
	/**
     * One Product has Many Features
     * @OneToMany(targetEntity="Exame", mappedBy="tipoExame")
     */
	private $exame;
	/** @Column(name="codMedicamento") */
	/**
     * One Product has Many Features.
     * @OneToMany(targetEntity="Medicamento", mappedBy="cod_medicamento")
     */
	private $medicamento;
	/** @Column(name="Comentario") */
	private $comentario;

	public function getPrescricao()
	{
		return $this->codPrescricao;
	}

	public function setPrescricao($p_codPrescricao)
	{
		$this->codPrescricao = $p_codPrescricao;
	}

	public function getConsulta(){
		return $this->consulta;
	}

	public function setConsulta($p_consulta){
		$this->consulta = $p_consulta;
	}
	public function setExame($p_exame){
		$this->exame = $p_exame;
	}

	public function getMedicamento(){
		return $this->medicamento;
	}

	public function setMedicamento($p_medicamento){
		$this->medicamento = $p_medicamento;
	}

	public function getComentario(){
		return $this->comentario;
	}

	public function setComentario($p_comentario){
		$this->exame = $p_comentario;
	}

}