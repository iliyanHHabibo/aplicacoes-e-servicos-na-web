<?php

session_start();

if (isset($_SESSION['utilizador'])) {
    include "../abreconexao.php";
    include "helpers/utilizador.php";
    include "helpers/get_chats.php";
    include "helpers/opened.php";

    #ir buscar o utilizador
    $chatWith = getUtilizador($_GET['user'],$conn);
    $utilizador = getUtilizador($_SESSION['utilizador'],$conn);
    
    #ir buscar as mensagens entre os utilizadores
    $chats = getChats($_SESSION['utilizador'],$chatWith['email'],$conn);

    opened($chatWith['email'],$conn,$chats);

}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chat interface</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="chat_css.css">

</head>
<body class = "d-flex justify-content-center align-items-center vh-100">
    <div class = "p-2 w-400 rounded-shadow">
        <a href="chat_home.php" class ="fs-4 link-dark"> <--  </a>
        <div class = "d-flex align-items-center">
            <h3 class="display-4 fs-xs m-2"> <?=$chatWith['nome']?> </h3>
        </div>
        <div class = "shadow p-4 rounded d-flex flex-column mt-2 chat-box" id="chatBox"
        style ="overflow-y:auto;overflow-x:hidden; max-height: 50vh;">
        <?php
        if (!empty($chats)) {
            foreach ($chats as $chat) {
                if ($chat['de_email'] === $_SESSION['utilizador']) { ?>
                    <p class="rtext align-self-end border rounded p-2 mb-1" style="width: 65%;">
                        <?= $chat['mensagem'] ?>
                        <small class="d-block text-right">
                            <?= $chat['data_hora'] ?>
                        </small>
                    </p>
                <?php } else { ?>
                    <p class="ltext border rounded p-2 mb-1" style="width: 65%; background-color: rgb(244, 179, 16);">
                        <?= $chat['mensagem'] ?>
                        <small class="d-block text-right">
                            <?= $chat['data_hora'] ?>
                        </small>
                    </p>
                <?php }
            }
        }
        ?>

        </div>
        <div class="input-group mb-3">
            <textarea cols="3" class="form-control" style= "resize: none;" id="mensagem"> </textarea>
            <button class="btn btn-warning" id="enviarBtn">Enviar</button>
        </div>
    </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        var scrollDown = function(){
                let chatBox = document.getElementById("chatBox");
                chatBox.scrollTop = chatBox.scrollHeight;
        }

        scrollDown();

        $(document).ready(function(){

            $("#enviarBtn").on("click", function(){
                mensagem = $("#mensagem").val();
                if (mensagem == "") return;

                $.post("ajax/insert.php",
                {
                    mensagem:mensagem,
                    para_email: "<?=$chatWith['email']?>"
                },
                function(data,status){
                    $("#mensagem").val("");
                    $("#chatBox").append(data);
                    scrollDown();
                });
            });
            
     

        //reload automatico
        let fetchData = function(){
            $.post("ajax/getMessage.php",
            {
                para_email: "<?=$chatWith['email']?>"
            },
            function(data,status){
                    $("#chatBox").append(data);
                    if (data != "")scrollDown();
                });
            }
            fetchData();
            //auto refresh a cada 0.5 segundos
            setInterval(fetchData,500);
        });
    </script>

</body>
</html>