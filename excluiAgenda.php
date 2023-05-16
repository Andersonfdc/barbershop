<?php

    include_once('config.php');  

    if(!empty($_GET['id'])){
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";

        $result = $conexao->query($sqlSelect);

        // ALTERA INFO NO BD
        if($result ->num_rows > 0){

            $sqlDelete = "UPDATE usuarios SET barbeiro= '',servico='',dataHora=' ',statusAgenda = ''
            WHERE idusuarios=$id";

            $resultDelete = $conexao->query($sqlDelete);  

            $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";

            $resultSelect = $conexao->query($sqlSelect);

            $user_data = mysqli_fetch_assoc($resultSelect);

            $nome = $user_data['nome'];

            // API WHATSAPP
        
            $curl = curl_init();
        
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.positus.global/v2/sandbox/whatsapp/numbers/814e1f43-af0b-4ecb-a3ee-719c3481fabf/messages",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{\r\n  \"to\": \"+558399898887\",\r\n  \"type\": \"text\",\r\n  \"text\": {\r\n      \"body\": \" A(o) clinete: *$nome*, cancelou a última proposta de horário.\"\r\n  }\r\n}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNGRhZTAyMWNhNTYyYzgxZTVhNTBjMzc5ZWM3YzYyMmM3MjQ5ZTg1Y2JmMGM5NTMyZjY2NTk1OGFjMGMyZWY0NDM2MjczYTU3ZGI3YjY1YjgiLCJpYXQiOjE2Nzk0NTI5MzMuNzE4MzM2LCJuYmYiOjE2Nzk0NTI5MzMuNzE4MzQsImV4cCI6MTcxMTA3NTMzMy43MTU3NDcsInN1YiI6IjMxMTAxIiwic2NvcGVzIjpbXX0.otyaju4hv-8YsQVXPCR4dUgbGgnQZPkleKwa30EyW7e-w-2eifWDoxwC-YdbXPesP_-_O6c654v_G2loDyuYq_xGWgvJ-vdo6dGf8wUspvBOSaHULjBZZsnfQebAV8l5vH7i33FevUykWnDzk_w9JRFL7aqa9onr6I1uJ-jn6SbLtWpocO1YiwZxTSH6Q7Gp1cDfUdsfGrbpGPCfdks78HZ35phDb01PLjYHm5KoeZ2Ru_2P8Vu--e3AHc3q5xG3-Oaypo2Nj_9j5dUWWfDJV3ctKuuwH8yPahd7DfgB_f3oixPXNMzjxIJlbt16Ri8ZQG_vfuwlQ1NpiI3iOGybgqPp5A2XRCgfVQqPXI8ZZwKKIZzSYL1S9vozHvKhiaGSTypOR4JsyHr-iU_XJfA9r1XrWzsL1bd6UCMxHnWTa4wCAOiVL7Wq0w4M-GejtX-pvfBMKFYv7_3tuk4NV4Vt3wmzj_WDxdxIg6Dk0HwWhBMhPI6-IUPjsEe-zfJOazXzbvcCB-4UJMWasoJ9IglvMLMzyB2oXUG3AFrewrObSyj-ydyqBJhWJRA2FjJJu4FibdmI_zY9-9pIVO1eeu0hojtTLb6xHetk-DEZuvVdpVCudnPVWXwTfhdk-HAXszlXHxVJtvXpEzvy5ifFCll9cqR6Wp7N0kaCXS948aeNOfA"
            ),
            ));
        
            $response = curl_exec($curl);
        
            curl_close($curl);
            echo $response;

        }
    }
    header('Location: agendament.php');

?>