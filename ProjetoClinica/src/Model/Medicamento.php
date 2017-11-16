<?php

namespace App\Model

/**
 * @Entity
 * @Table(name="medicamento")
 */

class Medicamento
{
	/**
 	* @Id
 	* @Columm(name='cod_medicamento')
 	*/
	private $cod_medicamento;
	private $descricao;
	private $nome;

	function getCodMedicamento(){
		return $this->cod_medicamento;
	}		

	function getDescricao(){
		return $this->descricao;
	}		

	function getNome(){
		return $this->nome;
	}		

	function setCodMedicamento($m_codMedicamento){
		$this->cod_medicamento = $m_codMedicamento;
	}		

	function setDescricao($m_descricao){
		$this->descricao = $m_descricao;
	}		

	function setNome($m_nome){
		$this->nome = $m_nome;
	}		
}

  ?>