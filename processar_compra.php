<?php

session_start();

include "abreconexao.php";

$utilizador_comprador = $_SESSION['utilizador'];
$utilizador_vendedor = $_POST['vendedor'];
$artigo = $_POST['artigo_id'];
$data_compra = date('Y-m-d H:i:s'); //obtém a data atual

$sql = "INSERT INTO escolha (utilizador_comprador, utilizador_vendedor, artigo, data_compra) VALUES ('$utilizador_comprador', '$utilizador_vendedor', '$artigo', '$data_compra')";

if (mysqli_query($conn, $sql)) {
    echo "Compra realizada com sucesso!";

    // Removendo da lista de favoritos após a compra bem-sucedida
    $remove_fav = "DELETE FROM favoritos WHERE artigo_id = $artigo AND utilizador_id = $utilizador_comprador";

    if (mysqli_query($conn, $remove_fav)) {
        echo "Artigo removido dos favoritos!";
    } else {
        echo "Erro ao remover o artigo dos favoritos: " . mysqli_error($conn);
    }

} else {
    echo "Erro ao realizar a compra: " . mysqli_error($conn);
}

header('Location: check-out.php');

mysqli_close($conn);

?>