<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="exame")
 */

class Exame
{
 	/**
     * @Id
     * @Column(name="tipoExame",type="integer")
     * GenerateValue(strategy="AUTO")
     */
	private $tipoExame;
	/** @Column(name="descricaoExame") */	
	private $descricaoExame;	

	public function getDescricao()
	{
		return $this->descricaoExame;
	}

	public function setDescricao($e_descricao)
	{
		$this->descricaoExame = $e_descricao;
	}

	public function getTipoExame(){
		return $this->tipoExame;
	}

	public function setTipoExame($e_tipoExame){
		$this->tipoExame = $e_tipoExame;
	}

}

  ?>