<?php

    include_once('config.php');  

    // DELETA USUÁRIO DO BD
    if(!empty($_GET['id'])){
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";

        $result = $conexao->query($sqlSelect);


        if($result ->num_rows > 0){

            $sqlDelete = "DELETE FROM usuarios WHERE idusuarios=$id";
            $resultDelete = $conexao->query($sqlDelete);  

        }
    }
    header('Location: admin.php');

?>