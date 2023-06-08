<?php
session_start();

if (isset($_SESSION['utilizador'])) {
    if (isset($_POST['vendedor'])) {
        include "../../abreconexao.php";
        $sql = "INSERT INTO conversas (email_utilizador1, email_utilizador2) VALUES ('" . $_SESSION['utilizador'] . "','" . $_POST['vendedor'] . "')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "Conversa criada com sucesso!"; // Send success response
        } else {
            echo "Erro ao criar conversa: " . mysqli_error($conn); // Send error response with actual error message
        }
    }
}
?>
