<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Curso
 * @Entity
 */
class Curso {
    /**
     * @Id
     * @Column(name="codigo",type="integer")
     * GenerateValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Column(name="nome_curso")
     */
    private $nome;
    
    public function getId():int{
        return $this->id;
    }
    
    public function getNome():string{
        return $this->nome;
    }
    
    public function setId(int $id){
        $this->id=$id;
    }
    public function setNome(string $nome){
        $this->nome=$nome;
    }
}
