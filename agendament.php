<?php

    //iNICIO DA SESSÃO
    session_start();

    //iNICIO DA SESSÃO
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado =  $_SESSION['email'];
    $senha = $_SESSION['senha'];

    //IMPORT DE CONFIGURAÇÕES
    include_once('config.php');


    //CONSULTA DE INFORMAÕES DO USUÁRIO NO BD
    $sqlID = "SELECT * FROM usuarios WHERE email ='$logado' and senha= '$senha'";

    $resultAgenda = $conexao->query($sqlID);

    $user_data =mysqli_fetch_assoc($resultAgenda);

    $id = $user_data['idusuarios'];
    // print_r($user_data['barbeiro']);
    // print_r($user_data['servico']);
    // print_r($user_data['dataHora']);

    
?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
<head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sparta Barbershop</title>

    <!-- Icons -->
    <link rel="stylesheet" href="icons/style.css" />
    <link rel="shortcut icon" href="images/img.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./icons/fontawesome/css/all.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="style-agendamento.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"rel="stylesheet"/>
  </head>
</head>
<body>

    <header id="header">
      <nav class="containerNav">
        <a class="logo" href="#"><i class="icon-spartans"></i> Sparta<span> Barbershop</span></a>

        <!-- EDITAR USUÁRIO -->
        <a href='editUser.php?id=<?php echo $id ?>' class="email">
            <?php
                 echo $user_data['nome'];
            ?>
            
        </a>
        
        <!-- SAIR -->
        <a href="index.php" class="logado">
        
            <i class="fa-solid fa-right-from-bracket toggle"></i>
        </a>
        
      </nav>
    </header>

    <main>
        
            <div class="containerAgendamento">
                <div class="buttonsForm">
                    <div class="btnColor"></div>
                    <button id="btnSignup">AGENDAR</button>
                </div>

                <!-- AGENDAR -->
                <form id="agendar" action='agendar.php'  method="POST" >
                    
                    <label for="barbeiro">Barbeiro:</label>
                    <select id="barbeiro" name="barbeiro" placeholder="Barbeiro" required>
                        <option value="Roberto">Roberto</option>
                        <option value="Carlos">Carlos</option>
                        <option value="Eduardo">Eduardo</option>
                        <option value="Diego">Diego</option>
                    </select>

                    <label for="servico">Serviço:</label>
                    <select id="servico" name="servico" placeholder="Serviço" required>
                        <option value="Corte">Corte</option>
                        <option value="Barba">Barba</option>
                        <option value="Corte e Barba">Corte e Barba</option>
                    </select>
                        
                    <label for="dataHora">Selecione data e hora:*</label>
                    <input type="datetime-local" id="dataHora" name="dataHora" min="2023-04-01T08:00" max="2023-06-30T18:00" required>


                    <input type="hidden" name="id" value="

                    <?php 
                    echo $user_data['idusuarios']
                    ?>
                    
                    ">
                    <button type="submit" name="updateAgenda" id="updateAgenda">Salvar</button>
                    <label for="updateAgenda"><small>*Sujeito a avaliação de disponibilidade(Horários entre 08:00 - 18:00 de Seg - Sex)</small></label>
                </form>

            </div>

            <!-- AGENDAMENTO -->
            <div class="containerAgenda">
                <div class="buttonsForm">
                    <div class="btnColor"></div>
                    <button id="btnSignup">AGENDAMENTO</button>
                </div>

                <table class="table" >
                    <thead>
                        <tr>
                            <th>SERVIÇO</th>
                            <th>BARBEIRO</th>
                            <th>DATA - HORA</th>
                            <th>AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>

                        <td>
                            <?php 
                                echo $user_data['servico']
                            ?>
                        </td>

                        <td>
                             <?php 
                                echo $user_data['barbeiro']
                            ?>
                        </td>

                        <td>
                            <?php 
                                echo $user_data['dataHora']
                            ?>
                        </td>

                        <td>
                            <a href='excluiAgenda.php?id=<?php echo $user_data['idusuarios'] ?>'><i class="fa-solid fa-trash"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=+5583999898887&text=Olá" target="_blank" ><i class="fa-brands fa-whatsapp"></i></a>
                        </td>
                        
                    </tbody>
                </table>

                <table class="table" >
                    <thead>
                        <tr>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>

                        <td>
                            <?php 
                                echo $user_data['statusAgenda']
                            ?>
                        </td>
                        
                    </tbody>
                </table>

            </div>
    </main>
    
</body>
</html>