<?php

namespace App\Model

/**
 * @Entity
 * @Table(name="prescricao")
 */

class Precricao
{
	/**
 	* @Id
 	* @Columm(name='codPrescricao')
 	*/
	private $codPrescricao;	
	private $consulta;
	private $exame;
	private $medicamento;
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

	public function setExame($p_comentario){
		$this->exame = $p_comentario;
	}

}