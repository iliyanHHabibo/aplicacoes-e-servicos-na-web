<?php
session_start();

if (isset($_SESSION['utilizador'])) {
    include "../../abreconexao.php";
    if (isset($_POST['vendedor']) && isset($_POST['titulo'])) {
        $msg = "Estou interessado no seu produto " . $_POST['titulo'] . ". Gostaria de saber mais informações sobre o mesmo.";
        $sql = "INSERT INTO chats (de_email, para_email, mensagem) VALUES ('" . $_SESSION['utilizador'] . "','" . $_POST['vendedor'] . "','" . $msg . "')";
        $query = mysqli_query($conn, $sql);
        
        if ($query) {
            echo "Insert successful!"; // or any other success message you want to display
        } else {
            echo "Error inserting into the database: " . mysqli_error($conn);
        }
    }
}
?>
