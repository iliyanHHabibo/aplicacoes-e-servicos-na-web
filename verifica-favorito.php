<?php
session_start();

include "abreconexao.php";

$utilizador = $_SESSION['utilizador'];
$artigo = $_POST['artigo_id'];

$sql_verifica = "SELECT * FROM favoritos WHERE utilizador='$utilizador' AND artigo='$artigo'";
$resultado_verifica = mysqli_query($conn, $sql_verifica);

$isFavorite = (mysqli_num_rows($resultado_verifica) > 0);

echo json_encode(["isFavorite" => $isFavorite]);

mysqli_close($conn);
?>