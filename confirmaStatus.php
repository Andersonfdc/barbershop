<?php
    include_once('config.php');  

    //INCLUI NO BD O STAUS DE CONFIMAÇÃO DE AGENDAMENTO
    if(!empty($_GET['id'])){
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";

        $result = $conexao->query($sqlSelect);


        if($result ->num_rows > 0){

            $sqlConfirma = "UPDATE usuarios SET statusAgenda ='CONFIRMADO' 
            WHERE idusuarios=$id";
            $resultConfirma = $conexao->query($sqlConfirma);  

        }

    }

    header('Location: admin.php');

?>
