

let play = document.getElementById("cadastro").addEventListener('click', function() {

    // verificar se algum radio foi marcado (não pega o value ainda)
    let minhaEscolha = document.querySelector("input[type='radio']:checked");
  
    if (!minhaEscolha) { // se nenhum radio foi marcado
      return alert("escolha uma opção!");
    }
