
<?php

    
  //cadastro
  if(isset($_POST['submitup'])){
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['emailSignup'];
    $senha = $_POST['senhaSignup'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha) VALUES ('$nome','$email','$telefone','$senha')");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Sparta Barbershop</title>

  <!-- Style -->
  <link rel="stylesheet" href="./style-login.css">
  <link rel="stylesheet" href="./icons/fontawesome/css/all.min.css">

  <!-- Icons -->  
  <link rel="shortcut icon" href="images/img.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container card">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Cadastro</button>
    </div>

    <!--Sign in-->
    <form id="signin" action="testLogin.php" method="POST">
      <input type="email" placeholder="Email" name="emailSignin" id="emailSignin" required />
      <i class="fas fa-envelope iEmail"></i>

      <input type="password" placeholder="Password" name="senhaSignin" id="senhaSignin" required />
      <i class="fas fa-lock iPassword"></i>
      <i class="fas fa-eye iEye" id="btnSenha" onclick="mostrarSenha()"></i>

      <button type="submit" name="submitin" id="submitin" >Login</button>
    </form>

    <!--Sign up-->
    <form id="signup" action="login.php"  method="POST" >
      <input type="text" name="nome" placeholder="Nome" id="nome" required />
      <i class="fas fa-user iUser"></i>

      <input type="tel" name="telefone" placeholder="Telefone" id="telefone" required />
      <i class="fas fa-phone iTelefone"></i>
        
      <input type="text" name="emailSignup" placeholder="Email" id="emailSignup" required />
      <i class="fas fa-envelope iEmailUp"></i>

      <input type="password" name="senhaSignup" placeholder="Password" id="senhaSignup" required />
      <i class="fas fa-lock iPasswordUp"></i>
      <i class="fas fa-eye iEyeUp" id="btnSenhaUp" onclick="mostrarSenhaUp()"></i>

      <div class="divCheck">
        <input type="checkbox" required />
        <span><a href="https://www.cblservicos.org.br/termos-e-condicoes/#:~:text=Este%20documento%20visa%20registrar%20a,de%20Dados%20Pessoais%20(LGPD)." target="_blank" rel="noopener noreferrer">
          Termos e condições
        </a></span>
      </div>
      <button type="submit" name="submitup" id="submitup">Cadastrar</button>
    </form>

    <div class="buttonsFormClose">
       <a href="index.php">
          <i class="fas fa-circle-xmark "></i>
       </a> 
    </div>
  </div>
  

  <!--Script-->
  <script src="./login.js"></script>
</body>
</html>