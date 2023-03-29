var formSignin = document.querySelector('#signin')
var formSignup = document.querySelector('#signup')
var btnColor = document.querySelector('.btnColor')
var btnSignin = document.querySelector('#btnSignin')
var btnSignup = document.querySelector('#btnSignup')

// DESLIZA O CONTAINER DE LOGIN
document.querySelector('#btnSignin')
  .addEventListener('click', () => {
    formSignin.style.left = "25px"
    formSignup.style.left = "450px"
    btnColor.style.left = "0px"
    btnSignin.style.color = "white"
    btnSignin.style.font = "bold"
    btnSignup.style.color = "black"
})

document.querySelector('#btnSignup')
  .addEventListener('click', () => {
    formSignin.style.left = "-450px"
    formSignup.style.left = "25px"
    btnColor.style.left = "110px"
    btnSignup.style.color = "white"
    btnSignin.style.color = "black"
})

// MOSTRA A SENHA DE LOGIN

function mostrarSenha(){
  var inputPass = document.getElementById('senhaSignin')
  var btnShowPass = document.getElementById('btnSenha')

  if(inputPass.type ==='password'){
    inputPass.setAttribute('type', 'text')
    btnShowPass.classList.replace('fa-eye','fa-eye-slash')
  }else{
    inputPass.setAttribute('type', 'password')
    btnShowPass.classList.replace('fa-eye-slash','fa-eye')
  }

}

// MOSTRA A SENHA DE CADASTRO
function mostrarSenhaUp(){
  var inputPass = document.getElementById('senhaSignup')
  var btnShowPass = document.getElementById('btnSenhaUp')

  if(inputPass.type ==='password'){
    inputPass.setAttribute('type', 'text')
    btnShowPass.classList.replace('fa-eye','fa-eye-slash')
  }else{
    inputPass.setAttribute('type', 'password')
    btnShowPass.classList.replace('fa-eye-slash','fa-eye')
  }

}
