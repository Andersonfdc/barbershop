<?php

    include_once('config.php');

    // ALTERA INFO NO BD
    if(isset($_POST['update'])){

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['emailSignup'];
            $telefone = $_POST['telefone'];
            $senha = $_POST['senhaSignup'];

            $sqlUpdate = "UPDATE usuarios SET nome= '$nome',senha='$senha',email='$email',telefone='$telefone'
            WHERE idusuarios=$id";

            $result = $conexao->query($sqlUpdate);
    }
    header('Location: agendament.php');

?>