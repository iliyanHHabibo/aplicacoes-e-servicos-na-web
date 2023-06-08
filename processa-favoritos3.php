<?php

session_start();

include "abreconexao.php";

$utilizador = $_SESSION['utilizador'];
$artigo = $_POST['artigo_id'];

$sql_verifica = "SELECT * FROM favoritos WHERE utilizador='$utilizador' AND artigo='$artigo'";
$resultado_verifica = mysqli_query($conn, $sql_verifica);

if (mysqli_num_rows($resultado_verifica) > 0) {
    header('Location: shop.php');

} else {
    $sql_insere = "INSERT INTO favoritos (utilizador, artigo) VALUES ('$utilizador', '$artigo')";
    if (mysqli_query($conn, $sql_insere)) {
        echo "Artigo adicionado aos favoritos com sucesso!";

    } else {
        echo "Erro ao adicionar o artigo aos favoritos: " . mysqli_error($conn);
    }
}

header('Location: product.php');

mysqli_close($conn);

?>