<?php
    function opened($email_utilizador,$conn,$chats){
        foreach($chats as $chat){
            if ($chat['opened'] == 0){
                $opened = 1;
                $chat_id = $chat['chat_id'];
                
                $sql = "UPDATE chats SET opened = $opened WHERE de_email = $email_utilizador AND chat_id = $chat_id";
                $result = mysqli_query($conn, $sql);
                }
            }
        }
?>

