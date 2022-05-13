<?php
  $servidor = "locahost";
  $username = "root";
  $senha = "pwd@admin";

  $conexaoMysqli = mysql_connect(
    $servidor,
    $username,
    $senha,
  );
  if ($conexaoMysqli){
    echo "Exemplo de notificação!";
  }

  try{
    $conexaoPDO = new PDO(
      "mysql:host=$servidor;
        dbname=db_aula_web;
        port=3306",
        $username,
        $senha 
    );

    $conexaoPDO->setAttribute(
      PDO::ATTR_ERRMODE, 
      PDO::ERRMODE_EXCEPTION);
      
      echo "foi conectado";

  }catch (PDOException $e){
    echo "conexão parou".$e->getMessage();

  }
