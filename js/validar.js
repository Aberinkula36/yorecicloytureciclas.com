var contraseña = document.getElementById("contraseña")
  , contraseña2 = document.getElementById("contraseña2");

function validatePassword(){
  if(contraseña.value != contraseña2.value) {
    contraseña2.setCustomValidity("Passwords Don't Match");
  } else {
    contraseña2.setCustomValidity('');
  }
}

contraseña.onchange = validatePassword;
contraseña2.onkeyup = validatePassword;