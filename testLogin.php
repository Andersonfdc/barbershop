<?php

    session_start();
    // print_r($_REQUEST);

    if(isset($_POST['submitin']) && !empty($_POST['emailSignin']) && !empty($_POST['senhaSignin']) ){

        //acessa
        include_once('config.php');

        $emailin = $_POST['emailSignin'];
        $senhain = $_POST['senhaSignin'];

        $sql = "SELECT * FROM usuarios WHERE email = '$emailin' and senha = '$senhain'";

        $resultLogin = $conexao -> query($sql);

        

        if(mysqli_num_rows($resultLogin) < 1){
            echo '<script>alert("Credenciais incorretas. Por favor, tente novamente."); window.location.href=" login.php";</script>';
        }else {

            if($_POST['emailSignin'] == 'anderson@gmail.com' and $_POST['senhaSignin'] == ('asdf' or 'ASDF')){
                $_SESSION['email'] = $emailin; 
                $_SESSION['senha'] = $senhain; 
                header('location:admin.php');
            }else{
                $_SESSION['email'] = $emailin; 
                $_SESSION['senha'] = $senhain; 
                header('location: agendament.php'); 
            }
        }        

    }else{

        //nao acesssa
        header('Location: login.php');
    }

?>