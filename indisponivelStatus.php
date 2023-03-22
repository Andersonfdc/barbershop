<?php
include_once('config.php');  

if(!empty($_GET['id'])){
    
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";

    $result = $conexao->query($sqlSelect);


    if($result ->num_rows > 0){

        $sqlConfirma = "UPDATE usuarios SET statusAgenda ='INDISPONÍVEL' 
        WHERE idusuarios=$id";
        $resultConfirma = $conexao->query($sqlConfirma);  

    }
}
header('Location: admin.php');

?>