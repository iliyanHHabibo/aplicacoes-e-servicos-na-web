<?php

    function getChats($email_utilizador1,$email_utilizador2,$conn){
        $sql = "SELECT * FROM chats
                WHERE (de_email = '$email_utilizador1' AND para_email = '$email_utilizador2')
                 OR (de_email = '$email_utilizador2' AND para_email = '$email_utilizador1')
                 ORDER BY chat_id ASC";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0){
            $chats = mysqli_fetch_all($result,MYSQLI_ASSOC);
            return $chats;
        }else{
            $chats = [];
            return $chats;
        }
    }

?>