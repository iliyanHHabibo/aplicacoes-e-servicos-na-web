<?php
session_start();

if (isset($_SESSION['utilizador'])) {
    if (isset($_POST['para_email'])) {
        include "../../abreconexao.php";

        $email_utilizador1 = $_SESSION['utilizador'];
        $email_utilizador2 = $_POST['para_email'];
        $opened = 0;

        $sql = "SELECT * FROM chats
                WHERE (de_email = '$email_utilizador2' AND para_email = '$email_utilizador1')
                ORDER BY chat_id ASC";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0){
            $chats = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($chats as $chat){
                if ($chat['opened'] == 0){
                    
                    $opened = 1;
                    $chat_id = $chat['chat_id'];

                    $sql2 = "UPDATE chats SET opened = $opened WHERE chat_id = $chat_id";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                        ?>
                        <p class="ltext border rounded p-2 mb-1" style="width: 65%; background-color: rgb(244, 179, 16);">
                            <?= $chat['mensagem'] ?>
                            <small class="d-block text-right">
                                <?= $chat['data_hora'] ?>
                            </small>
                        </p>
                        <?php
                    }
                }
            }
        }
    }
}
?>
