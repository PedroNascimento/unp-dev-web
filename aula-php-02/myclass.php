<?php

class Animal {
  public $nome;
  private $idade;

  function __construct($nome, $idade){
    $this->nome = $nome;
    $this->idade = $idade;

  }

  function get_idade(){
    return $this->idade;
  }

  function set_idade($idade){
    $this->idade = $idade;
  }

}

class Mamifero extends Animal{
  public $temPelos;
  public static function comunicar(){
    return "Mamífero se comunicando";
  }
}