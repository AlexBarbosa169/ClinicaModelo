<?php

namespace App\Model

/**
 * @Entity
 * @Table(name="exame")
 */

class Exame
{
	/**
 	* @Id
 	* @Columm(name='tipoExame')
 	*/
	private $descricaoExame;	
	private $tipoExame;

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