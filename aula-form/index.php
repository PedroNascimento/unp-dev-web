<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">

  <title>Aula sobre forms</title>
</head>
  <body> 
    <form action="cadastro.php" target="_blank" method="POST" oninput="resultado.value = x.value = parseInt(a.value) + parseInt(b.value);" enctype="multipart/form-data">
          <h2>Cadastro de Clientes</h2>
          <fieldset>
              <legend>Dados Pessoais</legend>
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" size="50" maxlength="40" required><br>

          <label for="idade">Idade</label>
          <input type="number" id="idade" name="idade" min="0" max="150"><br>

          <label for="sexo">Sexo</label>
          <input type="radio" id="sexo" name="sexo" value="F" checked>Feminino
          <input type="radio" id="sexo" name="sexo" value="M">Masculino
          <input type="radio" id="sexo" name="sexo" value="O">Outro
          <br>
      </fieldset>
      <fieldset>
          <legend>Outros dados</legend>
          <label for="email">e-mail</label>
          <input type="email" id="email" name="email" 
          placeholder="digite seu e-mail aqui">
          <br>

          <label for="senha">senha</label>
          <input type="password" id="senha" name="senha" title="informe a senha">
          <br>

          <label for="admissao">Dt Admissão</label>
          <input type="date" id="admissao" name="admissao" min="2021-12-01">
          <br>

          <label for="cor">Cor</label>
          <input type="color" id="cor" name="cor" >
          <br>
          <label for="estadocivil">Estado Civil:</label>
          <br>
          <select id="estadocivil" name="estadocivil[]" multiple>
              <option value="SOLTEIRO(A)">SOLTEIRO(A)</option>
              <option value="CASADO(A)">CASADO(A)</option>
              <option value="SEPARADO(A)">SEPARADO(A)</option>
              <option value="VIÚVO(A)">VIÚVO(A)</option>
          </select>
          <br>
          <label for="descricao">Descrição</label>
          <br>
          <textarea id="descricao" name="descricao"
            rows="5" cols="50" placeholder="Descreva você neste espaço..."></textarea>
            <br>
          </fieldset>
          <fieldset>
              <legend>Futebol</legend>
              <input list="times" name="times">
              <datalist id="times">
                  <option value="ABC">
                  <option value="ALECRIM"></option>
                  <option value="AMERICA"></option>
                  <option value="ASSU"></option>
                  <option value="GLOBO"></option>
                  <option value="FORÇA E LUZ"></option>
                  <option value="SANTA CRUZ"></option>
              </datalist>
          </fieldset>
          <fieldset>
              <legend>Calculando</legend>
              0<input type="range" id="a" name="a" value="50" >100 + <input type="number" id="b" name="b" value="50"> = <output name="x" for="a b">100</output>
              <input type="hidden" id="resultado" name="resultado" value="100">
          </fieldset>
          <fieldset>
              <legend>Arquivo comprobatório</legend>
              <input type="file" id="arq" name="arq" accept=".txt">
          </fieldset>

          <input type="submit" value="Enviar" >

      </form>    
  </body>

</html>