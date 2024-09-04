var senha = document.getElementById('senha');
var senhac = document.getElementById('senhac');

function validarSenha() {
  if (senha.value != senhac.value) {
    senhac.setCustomValidity("Senhas diferentes!");
  } else {
    senhac.setCustomValidity("");
  }
}

senha.onchange = validatePassword;
senhac.onkeyup = validatePassword;

senhac.addEventListener('input', validarSenha);



