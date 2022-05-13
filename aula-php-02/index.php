<?php

include_once "myclass.php";
$cavalo =  new Animal("Kid Boy", 13);

echo "O Cavalo ", $cavalo->nome, " tem ", $cavalo->get_idade(), " de idade.";

echo Mamifero::comunicar();

$ovelha = new Mamifero("Dolly", 1);
$ovelha->temPelos = TRUE;

echo 
  "<br>A Ovelha ", 
  $ovelha->nome, 
  " pelos: ", 
  $ovelha->temPelos,
  " e pesa ", 
  $ovelha::$peso , "Kg";
?>