<?php
session_start();

include "abreconexao.php";

$utilizador = $_SESSION['utilizador'];
$artigo = $_POST['artigo_id'];

$sql = "DELETE FROM favoritos WHERE utilizador = '$utilizador' AND artigo = '$artigo'";
if (mysqli_query($conn, $sql)) {
    header("Location: shopping-cart.php");
    exit;

    // if (mysqli_query($conn, $sql)) {
//     echo "Artigo removido dos favoritos com sucesso!";
// } else {
//     echo "Erro ao remover o artigo dos favoritos: " . mysqli_error($conn);
// }
}
mysqli_close($conn);

// header('Location: shopping-cart.php');

?>