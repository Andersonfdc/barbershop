<?php
    $dbHost = 'Localhost:3307';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro-barbershop';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao -> connect_errno){
    //     echo "Error";
    // } else {
    //     echo "Deu certo!";
    // }
?>