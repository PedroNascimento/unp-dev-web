<?php
  echo "<h2>Dados do Cliente</h2>";
  echo "<b>Nome: </b>".$_POST["nome"]."<br>";
  echo "<b>Idade: </b>".$_REQUEST["idade"]."<br>";
  echo "<b>Sexo: </b>".$_REQUEST["sexo"]."<br>";
  echo "<b>e-mail: </b>".$_REQUEST["email"]."<br>";
  echo "<b>Senha: </b>".$_REQUEST["senha"]."<br>";
  echo "<b>Admissão: </b>".$_REQUEST["admissao"]."<br>";
  foreach ($_POST["estadocivil"] as $value) {
    echo "<b>Estado Civil: </b>".$value."<br>";
  }
  echo "<b>Descrição: </b>".$_POST["descricao"]."<br>";
  echo "<b>Time de Futebol: </b>".$_POST["times"]."<br>";
  echo "<b>Resultado: </b>".$_POST["resultado"]."<br>";
  //print_r($_FILES["arq"]);
  //echo "<b>Arquivo: </b>".$_FILES["arq"]."<br>";
  echo "<b>Arquivo: </b>".$_FILES["arq"]["tmp_name"]."<br>";
  echo "<b>Arquivo: </b>".$_FILES["arq"]["name"]."<br>";
  
  
  //$arquivo = fopen($_POST["arq"], 'r');
  $arquivo = fopen($_FILES["arq"]["name"], 'r');
  while (! feof($arquivo)) {
    $linha = fgets($arquivo, 1024);
    echo $linha."<br>";
  }
  fclose($arquivo);

?>
