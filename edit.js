//MOSTRA A SENHA
function mostrarSenha(){
    var inputPass = document.getElementById('senhaSignup')
    var btnShowPass = document.getElementById('btnSenhaEdit')
  
    if(inputPass.type ==='password'){
      inputPass.setAttribute('type', 'text')
      btnShowPass.classList.replace('fa-eye','fa-eye-slash')
    }else{
      inputPass.setAttribute('type', 'password')
      btnShowPass.classList.replace('fa-eye-slash','fa-eye')
    }
  
}