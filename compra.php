<?php 

session_start();

include "abreconexao.php";

$utilizador_comprador = $_SESSION['utilizador'];
$utilizador_vendedor = $_POST['vendedor'];
$artigo = $_POST['artigo_id'];
$data_compra = date('Y-m-d H:i:s'); //obtém a data atual

$sql = "INSERT INTO compra (utilizador_comprador, utilizador_vendedor, artigo, data_compra) VALUES ('$utilizador_comprador', '$utilizador_vendedor', '$artigo', '$data_compra')";
$sql2 = "DELETE FROM artigo WHERE id = '$artigo'";
if(mysqli_query($conn, $sql)){
    echo "Compra realizada com sucesso!";
}else{
    echo "Erro ao realizar a compra: " . mysqli_error($conn);
}

if(mysqli_query($conn, $sql2)){
    echo "DELETE realizado com sucesso!";
}else{
    echo "Erro ao realizar a compra: " . mysqli_error($conn);
}

header('Location: inicial.php');

mysqli_close($conn);


?>