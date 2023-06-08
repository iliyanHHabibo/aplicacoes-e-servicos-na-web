<?php 

session_start();

include "abreconexao.php";

$utilizador = $_SESSION['utilizador'];
$artigo_id = $_POST["artigo_id"];
$titulo = $_POST["titulo"];
$estado = $_POST["estado"];
$preco = $_POST["preco"];
$vendedor = $_POST["vendedor"];
$data_registo = $_POST["data_registo"];
$categoria = $_POST["categoria_id"];
$tamanho = $_POST["tamanho_id"];
$marca = $_POST["marca_id"];
$descricao = $_POST["descricao"];

$sql = "INSERT INTO quickview (artigo_id, titulo, categoria, tamanho, marca, estado, preco, data_registo, descricao, vendedor, utilizador) VALUES ('$artigo_id', '$titulo', '$categoria', '$tamanho', '$marca', '$estado', '$preco', '$data_registo', '$descricao', '$vendedor', '$utilizador')";
if(mysqli_query($conn, $sql)){
    echo "Compra realizada com sucesso!";
}else{
    echo "Erro ao realizar a compra: " . mysqli_error($conn);
}

header('Location: product.php');

mysqli_close($conn);


?>