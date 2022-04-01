function mudarTexto() {
  document.getElementById('h2texto').innerHTML = 'Alterando o H2 novamente'
  window.alert('h2 alterado')
}
function aumentarFonte() {
  document.getElementById('h2texto').style.fontSize = '28px'
}
function diminuirFonte() {
  document.getElementById('h2texto').style.fontSize = '18px'
}
function imprimir() {
  window.print()
}

function calcular() {
  var op = document.getElementById('opcao').value
  vlr01 = document.getElementById('valor1').value
  vlr02 = document.getElementById('valor2').value
  var res = 0

  switch (op) {
    case '+':
      res = parseFloat(vlr01) + parseFloat(vlr02)
      break
    case '-':
      res = parseFloat(vlr01) - parseFloat(vlr02)
      break
    case '*':
      res = parseFloat(vlr01) * parseFloat(vlr02)
      break
    case '/':
      res = parseFloat(vlr01) / parseFloat(vlr02)
      break
    default:
      break
  }

  document.getElementById('resultado').innerHTML = res
}

function calcular2() {
  const op = document.getElementById('opcao').value
  vlr01 = document.getElementById('valor1').value
  vlr02 = document.getElementById('valor2').value
  const res = 0

  switch (op) {
    case '+':
      res = somar(vlr01, vlr02)
      break
    case '-':
      res = subtrair(vlr01, vlr02)
      break
    case '*':
      res = multiplicar(vlr01, vlr02)
      break
    case '/':
      res = dividir(vlr01, vlr02)
      break
    default:
      break
  }

  document.getElementById('resultado').innerHTML = res
}

function somar(p1, p2) {
  return parseFloat(vlr01) + parseFloat(vlr02)
}
function subtrair(p1, p2) {
  return parseFloat(vlr01) - parseFloat(vlr02)
}
function multiplicar(p1, p2) {
  return parseFloat(vlr01) * parseFloat(vlr02)
}
function dividir(p1, p2) {
  return parseFloat(vlr01) / parseFloat(vlr02)
}
