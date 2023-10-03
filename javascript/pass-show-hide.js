function checkPassword () {

const passwordField = document.querySelector('.password');

  if(passwordField.type === "password"){
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}