
<?php

  include_once('config.php');  

  if(!empty($_GET['id'])){
    
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";

    $result = $conexao->query($sqlSelect);


    if($result ->num_rows > 0){

        while($user_data =mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $senha = $user_data['senha'];
        }  
    }else{
        header('Location: admin.php');
    }

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
  <link rel="stylesheet" href="./style-edit.css">
  <link rel="stylesheet" href="./icons/fontawesome/css/all.min.css">
  
  <!-- Icons -->  
  <link rel="shortcut icon" href="images/img.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignup">Editar cadastro</button>
    </div>

    <!-- APRESENTA INDO NA TELA -->
    <form id="signup" action="saveEdit.php"  method="POST" >
      <input type="text" name="nome" placeholder="Nome" id="nome" value="<?php echo $nome ?>" required />
      <i class="fas fa-user iUser"></i>

      <input type="text" name="telefone" placeholder="Telefone" id="telefone" value="<?php echo $telefone ?>" required />
      <i class="fas fa-phone iTelefone"></i>
        
      <input type="text" name="emailSignup" placeholder="Email" id="emailSignup" value="<?php echo $email ?>" required />
      <i class="fas fa-envelope iEmailUp"></i>

      <input type="password" name="senhaSignup" placeholder="Password" id="senhaSignup" value="<?php echo $senha ?>"required />
      <i class="fas fa-lock iPasswordUp"></i>
      <i class="fas fa-eye iEye" id="btnSenhaEdit" onclick="mostrarSenha()"></i>

      <input type="hidden" name="id" value="<?php echo $id ?>">
      <button type="submit" name="update" id="update">Salvar</button>
    </form>

    <div class="buttonsFormClose">
       <a href="admin.php">
            <i class="fas fa-circle-xmark "></i>
       </a> 
    </div>
        
    </div>

  </div>

  <!--Script-->
  <script src="./edit.js"></script>
</body>
</html>