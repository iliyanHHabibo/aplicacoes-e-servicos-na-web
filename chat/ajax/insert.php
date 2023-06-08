<?php

session_start();

if (isset($_SESSION['utilizador'])) {
    if (isset($_POST['mensagem']) && isset($_POST['para_email'])) {
        include "../../abreconexao.php";

        #receber os dadosdo post que fizemos no jquery de chat.php
        #os dados sao: mensagem e email do utilizador com quem estamos a falar
        $mensagem = $_POST['mensagem'];
        $para_email = $_POST['para_email'];

        #ir buscar o email do utilizador logado
        $de_email = $_SESSION['utilizador'];

        $sql = "INSERT INTO chats (de_email,para_email,mensagem) VALUES ('$de_email','$para_email','$mensagem')";

        $result = mysqli_query($conn,$sql);

        #se a mensagem for inserida com sucesso
        if ($result){
            #ver se e a primeira conversa entre os utilizadores
            $sql2 = "SELECT * FROM conversas WHERE (email_utilizador1 = '$de_email' AND email_utilizador2 = '$para_email') OR (email_utilizador1 = '$para_email' AND email_utilizador2 = '$de_email')";

            $result2 = mysqli_query($conn,$sql2);
            // setting up the time Zone
            // It Depends on your location or your P.c settings
            define('TIMEZONE', 'Europe/Lisbon');
            date_default_timezone_set(TIMEZONE);

            $time = date("h:i:s a");

            if(mysqli_num_rows($result2) === 0){
                #se for a primeira conversa, criar uma nova conversa
                $sql3 = "INSERT INTO conversas (email_utilizador1,email_utilizador2) VALUES ('$de_email','$para_email')";
                $result3 = mysqli_query($conn,$sql3);
            }
            ?>
            <p class = "rtext align-self-end border rounded p-2 mb-1" style="width: 65%;">
                <?=$mensagem?>
                <small class="d-block text-right"> <?=$time?></small>
            </p>
            <?php
        }
    }
}
?>
