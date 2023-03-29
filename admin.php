<?php

    //Inicio da sessão
    session_start();

    //import de configurações de conexão
    include_once('config.php');

    //Verifica se existe conexão vazia, caso exista encerra a sessão de login e direciona a página de login
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    
    //Pesquisa na tabela
    if(!empty($_GET['search'])){

        $data = $_GET['search'];

        $sql = "SELECT * FROM usuarios WHERE idusuarios LIKE '%$data%' OR nome 
        LIKE '%$data%' OR email LIKE '%$data%' ORDER BY dataHora DESC";

    }else {
        $sql = "SELECT * FROM usuarios ORDER BY dataHora DESC";
    }
    

    $result = $conexao -> query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
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
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"rel="stylesheet"/>
  </head>
</head>
<body>

    <header id="header">
      <nav class="container">
       
      <a class="logo" href="#"><i class="icon-spartans"></i> Sparta<span> Barbershop</span></a>
        
        <!-- BARRA DE PESQUISA -->
        <div class="box-search search">
            <input type="search" class="form-control w-100"placeholder="Pesquisar..." id="pesquisar">
            <button onclick="searchData()" type="button" class="btn btn-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
        <a href="./index.php" class="logado">   
            <i class="fa-solid fa-right-from-bracket toggle"></i>
        </a>
      </nav>
    </header>

    <main>       

        <section> 
            <!-- TABELA DO BANCO DE DADOS -->
            <div class="m-5 table-bg">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col">SERVIÇO</th>
                            <th scope="col">BARBEIRO</th>
                            <th scope="col">DATA - HORA</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">EDITAR</th>
                            <th scope="col">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            while ($user_data = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>".$user_data['idusuarios']."</td>";
                                    echo "<td>".$user_data['nome']."</td>";
                                    echo "<td>".$user_data['email']."</td>";
                                    echo "<td>".$user_data['telefone']."</td>";
                                    echo "<td>".$user_data['servico']."</td>";
                                    echo "<td>".$user_data['barbeiro']."</td>";
                                    echo "<td>".$user_data['dataHora']."</td>";
                                    echo "<td>".$user_data['statusAgenda']."</td>";
                                    echo "<td>
                                        <a class='btn btn-sm btn-warning' href='edit.php?id=$user_data[idusuarios]'>

                                            <svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                            </svg>

                                        </a>

                                        <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[idusuarios]' alt='teste'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                            </svg>
                                        </a>

                                        <a class='btn btn-sm btn-success' target='_blank' href='https://api.whatsapp.com/send?phone=+55$user_data[telefone]&text=Olá, está quase chegando a sua vez, tente chegar com 10min de antecedência!'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-whatsapp' viewBox='0 0 16 16'>
                                                <path d='M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z'/>
                                            </svg>
                                        </a>
                                    </td>";

                                    echo "<td>
                                        <a class='btn btn-sm btn-success' href='confirmaStatus.php?id=$user_data[idusuarios]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle' viewBox='0 0 16 16'>
                                                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                                <path d='M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z'/>
                                            </svg>
                                        </a>

                                        <a class='btn btn-sm btn-danger' href='indisponivelStatus.php?id=$user_data[idusuarios]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle' viewBox='0 0 16 16'>
                                                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                                <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
                                            </svg>
                                        </a>

                                    </td>";    
                                    
                                echo "<tr>";
                            }

                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    
    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- SCRIPT -->
    <script src="pesquisar.js"></script>
</body>
</html>

